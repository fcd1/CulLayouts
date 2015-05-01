<?php

class CulLayoutsPlugin extends Omeka_Plugin_AbstractPlugin
{

  protected $_filters = array('exhibit_layouts');

  public function filterExhibitLayouts($layouts) 
  {
    
    $layouts['cul-file-no-text'] = array( 'name' => 'CUL - File without Text',
					 'description' => 'CUL Layout featuring file(s), no text, one file per row' );
    return $layouts;

  }


}
 
?>