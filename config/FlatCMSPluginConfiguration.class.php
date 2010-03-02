<?php

class FlatCMSPluginConfiguration
{
  public static function preConfig()
  {
    sgAutoloader::loadFile('Spyc', realpath(dirname(__FILE__) . '/../lib/vendor/spyc/spyc.php'));
  }
  
  public static function install()
  {
    sgToolkit::mkdir(sgConfiguration::getPath('settings.FlatCMSPlugin.data_dir'));
  }
  
  public static function uninstall()
  {
    $message = <<<END
Are you you want to uninstall this plugin? Doing this will remove
all of your cms data in the project_root/data/flatcms directory!
END;
    sgCLI::confirm($message);
    sgToolkit::rmdir(sgConfiguration::getPath('settings.FlatCMSPlugin.data_dir'));
  }
}