<?php
class FlatCMSPluginController extends sgMagicController
{
  public function GET() { 
    $model = new FlatCMSPluginPageModel();
    $page = $model->getPage(sgContext::getCurrentPath());
    if ($page)
    {
      $this->content = $page['content'];
    }
    else
    {
      return parent::GET();
    }
    
    return $this->render($page['template']);
  }
}