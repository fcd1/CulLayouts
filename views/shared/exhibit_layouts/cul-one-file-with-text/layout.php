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
    <?php foreach ($attachments as $attachment): ?>
     <div class="exhibit-item">
<?php echo $this->exhibitAttachment($attachment, array('imageSize' => 'fullsize') ) ?>
     </div>
    <?php endforeach; ?>
</div>
<div class="exhibit-text <?php echo $position; ?> <?php echo $width; ?> <?php echo $textBehavior; ?> ">
  <?php echo $text; ?>
</div>
