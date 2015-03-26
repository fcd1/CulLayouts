<?php

class CulLayoutsPlugin extends Omeka_Plugin_AbstractPlugin
{

  protected $_filters = array('exhibit_layouts');

  public function filterExhibitLayouts($layouts) 
  {
    
    $layouts['fred-layout-one'] = array( 'name' => 'Fred First Layout',
					 'description' => 'This is the first layout by Fred' );
    $layouts['file-no-text'] = array( 'name' => 'File without Text',
					 'description' => 'Layout featuring file(s), no text' );
    return $layouts;

  }


}
 
?>