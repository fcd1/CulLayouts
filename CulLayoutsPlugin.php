<?php

class CulLayoutsPlugin extends Omeka_Plugin_AbstractPlugin
{

  protected $_filters = array('exhibit_layouts');

  public function filterExhibitLayouts($layouts) 
  {
    
    $layouts['cul-file-no-text'] = array( 'name' => 'CUL - File without Text',
					 'description' => 'CUL Layout featuring file(s), no text, one file per row' );
    // fcd1, 09Jul15: It was decided that the cul-one-file-with-text and cul-gallery-no-text block layouts
    // would be disabled at this time -- these new block layouts could be confusing to users.
    // However, code implementing the two layouts has not been removed or commented out. Note that this code is within
    // subdirs specific to the layouts in question, and should never be exercised while the layouts are disabled --
    // commenting out the entries for the layuouts in this method disables the layouts.
    // To enable one or both layouts, activate the appropriate lines of code below by removing them from the comment block.
    /*
    $layouts['cul-one-file-with-text'] = array( 'name' => 'CUL - One File with Text',
					 'description' => 'CUL Layout featuring one file with text' );
    $layouts['cul-gallery-no-text'] = array( 'name' => 'CUL - Gallery with no text',
				     'description' => 'CUL gallery' );
    */
    return $layouts;

  }


}
 
?>