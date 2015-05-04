<?php
$formStem = $block->getFormStem();
$options = $block->getOptions();
?>
<div class="selected-items">
    <h4><?php echo __('Items - NOTE: Only first item will be used.'); ?></h4>
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
                'threequarterwidth' => __('Threequarter width'),
                'halfwidth' => __('Half width'),
                'quarterwidth' => __('Quarter width')
            ));
        ?>
    </div>

    <div class="file-position">
        <?php echo $this->formLabel($formStem . '[options][file-position]', __('File position')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][file-position]',
            @$options['file-position'], array(),
            array(
		  'left' => __('Left'),
		  'right' => __('Right')
            ));
        ?>
    </div>
    
    <div class="captions-position">
        <?php echo $this->formLabel($formStem . '[options][captions-position]', __('Captions position')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][captions-position]',
            @$options['captions-position'], array(),
            array('center' => __('Center'),
		  'left' => __('Left'),
		  'right' => __('Right')
            ));
        ?>
    </div>

    <div class="text-behavior">
        <?php echo $this->formLabel($formStem . '[options][text-behavior]', __('Text behavior')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][text-behavior]',
            @$options['text-behavior'], array(),
            array(
                'column' => __('Column opposite file'),
                'wraparound' => __('Wrap around file')
            ));
        ?>
    </div>

</div>

<div class="block-text">
  <h4><?php echo __('Text'); ?></h4>
  <?php echo $this->exhibitFormText($block); ?>
</div>