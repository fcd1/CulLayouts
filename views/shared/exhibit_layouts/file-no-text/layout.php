<?php
$position = isset($options['file-position'])
    ? html_escape($options['file-position'])
    : 'center';
$width = isset($options['file-width'])
    ? html_escape($options['file-width'])
    : 'fullwidth';
$captionPosition = isset($options['captions-position'])
    ? html_escape($options['captions-position'])
    : 'center';
?>
<div class="exhibit-items <?php echo $position; ?> <?php echo $width; ?> captions-<?php echo $captionPosition; ?>">
    <?php foreach ($attachments as $attachment): ?>
     <div class="exhibit-item">
<?php echo $this->exhibitAttachment($attachment, array('imageSize' => 'fullsize') ) ?>
     </div>
    <?php endforeach; ?>
</div>
