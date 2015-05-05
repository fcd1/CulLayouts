<?php
$width = isset($options['file-width'])
    ? html_escape($options['file-width'])
    : 'fullwidth';
$filesPerRow = isset($options['files-per-row'])
    ? html_escape($options['files-per-row'])
    : 'two';
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';

// Reset $filesPerRow if the value does not make sense for the width of the image
if ( ($width == 'halfwidth') && ($filesPerRow != 'two') ) {

  $filesPerRow = 'two';

 }

if ( ($width == 'onethirdwidth') && ( ($filesPerRow == 'four') || ($filesPerRow == 'five') || ($filesPerRow == 'six') ) ) {

  $filesPerRow = 'three';

 }

if ( ($width == 'quarterwidth') && ( ($filesPerRow == 'five') || ($filesPerRow == 'six') ) ) {

  $filesPerRow = 'four';

 }

?>
<div class="exhibit-items files-per-row-<?php echo $filesPerRow; ?> <?php echo $width; ?> captions-<?php echo $captionPosition; ?>">
    <?php foreach ($attachments as $attachment): ?>
     <div class="exhibit-item">
<?php echo $this->exhibitAttachment($attachment, array('imageSize' => 'fullsize') ) ?>
     </div>
    <?php endforeach; ?>
</div>
