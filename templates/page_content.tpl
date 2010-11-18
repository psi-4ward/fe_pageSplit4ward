<?php // default Contao 2.9.1 fe_page.tpl content ?>
<div id="wrapper">
<?php if ($this->header): ?>

<div id="header">
<div class="inside">
<?php echo $this->header; ?> 
</div>
</div>
<?php endif; ?>
<?php echo $this->getCustomSections('before'); ?>

<div id="container">
<?php if ($this->left): ?>

<div id="left">
<div class="inside">
<?php echo $this->left; ?> 
</div>
</div>
<?php endif; ?>
<?php if ($this->right): ?>

<div id="right">
<div class="inside">
<?php echo $this->right; ?> 
</div>
</div>
<?php endif; ?>

<div id="main">
<div class="inside">
<?php echo $this->main; ?> 
</div>
<?php echo $this->getCustomSections('main'); ?> 
<div id="clear"></div>
</div>

</div>
<?php echo $this->getCustomSections('after'); ?>
<?php if ($this->footer): ?>

<div id="footer">
<div class="inside">
<?php echo $this->footer; ?> 
</div>
</div>
<?php endif; ?>

<!-- indexer::stop -->
<img src="<?php echo $this->base; ?>cron.php" alt="" class="invisible" />
<!-- indexer::continue -->

</div>