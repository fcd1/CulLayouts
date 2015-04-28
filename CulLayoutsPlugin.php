<?php

class CulLayoutsPlugin extends Omeka_Plugin_AbstractPlugin
{

  protected $_filters = array('exhibit_layouts');

  public function filterExhibitLayouts($layouts) 
  {
    
    $layouts['file-no-text'] = array( 'name' => 'File without Text',
					 'description' => 'Layout featuring file(s), no text, one file per row' );
    return $layouts;

  }


}
 
?>