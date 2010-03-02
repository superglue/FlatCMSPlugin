<?php

class FlatCMSPluginPageModel
{
  public static function getPagePath($path)
  {
    $filepath = sgConfiguration::getPath('settings.FlatCMSPlugin.data_dir') . $path;
    if (sgToolkit::checkFileLocation($filepath, $path))
    {
      if (file_exists("$filepath.yml"))
      {
        return "$filepath.yml";
      }
      
      return false;
    }
    
    return false;
  }
  
  public function getPage($path)
  {
    if ($filepath = self::getPagePath($path))
    {
      $data = Spyc::YAMLLoad($filepath);
      return $data;
    }
    
    return false;
  }
}