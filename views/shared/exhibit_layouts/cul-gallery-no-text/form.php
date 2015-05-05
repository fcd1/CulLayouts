<?php
$formStem = $block->getFormStem();
$options = $block->getOptions();
?>
<div class="selected-items">
    <h4><?php echo __('Items'); ?></h4>
    <?php echo $this->exhibitFormAttachments($block); ?>
</div>

<div class="layout-options">
    <div class="block-header">
        <h4><?php echo __('Layout Options'); ?></h4>
        <div class="drawer"></div>
    </div>
    
    <div class="file-width">
        <?php echo $this->formLabel($formStem . '[options][file-width', __('File width')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][file-width]',
            @$options['file-width'], array(),
            array(
                'halfwidth' => __('Half width'),
                'onethirdwidth' => __('One-third width'),
                'quarterwidth' => __('Quarter width'),
                'thumbnail' => __('Thumbnail'),
                'tinythumbnail' => __('Tiny Thumbnail')
            ));
        ?>
    </div>

    <div class="files-per-row">
        <?php echo $this->formLabel($formStem . '[options][files-per-row]', __('Files per row')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][files-per-row]',
            @$options['files-per-row'], array(),
            array('two' => __('Two'),
		  'three' => __('Three - NOTE: not valid for half size file'),
		  'four' => __('Four -- NOTE: not valid for half-size and one-third size files'),
		  'five' => __('Five -- NOTE: only valid for thumbnails'),
		  'six' => __('Six -- NOTE: only valid for thumbnails')));
        ?>
    </div>
    
    <div class="captions-position">
        <?php echo $this->formLabel($formStem . '[options][captions-position]', __('Captions position')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][captions-position]',
            @$options['captions-position'], array(),
            array(
                'center' => __('Center'),
                'left' => __('Left'),
                'right' => __('Right')
            ));
        ?>
    </div>

</div>
