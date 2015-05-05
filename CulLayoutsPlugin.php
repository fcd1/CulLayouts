<?php

class CulLayoutsPlugin extends Omeka_Plugin_AbstractPlugin
{

  protected $_filters = array('exhibit_layouts');

  public function filterExhibitLayouts($layouts) 
  {
    
    $layouts['cul-file-no-text'] = array( 'name' => 'CUL - File without Text',
					 'description' => 'CUL Layout featuring file(s), no text, one file per row' );
    $layouts['cul-one-file-with-text'] = array( 'name' => 'CUL - One File with Text',
					 'description' => 'CUL Layout featuring one file with text' );
    $layouts['cul-gallery-no-text'] = array( 'name' => 'CUL - Gallery with no text',
				     'description' => 'CUL gallery' );
    return $layouts;

  }


}
 
?>