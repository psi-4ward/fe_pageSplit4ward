<?php echo $this->doctype; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<?php
	$objContent = new FrontendTemplate($this->layout->fe_pageSplitHeadTpl);
	$objContent->setData($this->getData());
	echo $objContent->parse();
?>
<body id="top"<?php if ($this->class): ?> class="<?php echo $this->class; ?>"<?php endif; if ($this->onload): ?> onload="<?php echo $this->onload; ?>"<?php endif; ?>>
<?php
	$objContent = new FrontendTemplate($this->layout->fe_pageSplitContentTpl);
	$objContent->setData($this->getData());
	echo $objContent->parse();
	
	$objContent = new FrontendTemplate($this->layout->fe_pageSplitFootTpl);
	$objContent->setData($this->getData());
	echo $objContent->parse();
?>
</body>
</html>