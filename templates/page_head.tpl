<?php // default Contao 2.9.1 fe_page.tpl header ?>
<head>
<base href="<?php echo $this->base; ?>"></base>
<title><?php echo $this->pageTitle; ?> - <?php echo $this->mainTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->charset; ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="description" content="<?php echo $this->description; ?>" />
<meta name="keywords" content="<?php echo $this->keywords; ?>" />
<?php echo $this->robots; ?>
<?php echo $this->framework; ?>
<?php echo $this->stylesheets; ?>
<?php echo $this->mooScripts; ?>
<?php echo $this->head; ?>
</head>