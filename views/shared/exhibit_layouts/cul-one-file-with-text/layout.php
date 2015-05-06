<?php
$position = isset($options['file-position'])
    ? html_escape($options['file-position'])
    : 'left';
$width = isset($options['file-width'])
    ? html_escape($options['file-width'])
    : 'threequarterwidth';
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';
$textBehavior = isset($options['text-behavior'])
    ? html_escape($options['text-behavior'])
    : 'column';
?>
<div class="exhibit-items <?php echo $position; ?> <?php echo $width; ?> captions-<?php echo $captionPosition; ?> <?php echo $textBehavior; ?>">
     <div class="exhibit-item">
<?php 

if ( isset($attachments[0]) ) {

  echo $this->exhibitAttachment($attachments[0], array('imageSize' => 'fullsize'));

}

?>
     </div>
</div>
<div class="exhibit-text <?php echo $position; ?> <?php echo $width; ?> <?php echo $textBehavior; ?> ">
  <?php echo $text; ?>
</div>
