<?php

/**
 * fe_pageSplit4ward
 * Split fe_page.html5 template into head/content/foot templates
 * to allow easy updating. Yaml templates included
 *
 * @package fe_pageSplit4ward
 * @author Christoph Wiechert <wio@psitrax.de>
 * @copyright 4ward.media <http://4wardmedia.de>
 * @license LGPL
 */


$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('template,','template,fe_pageSplitHeadTpl,fe_pageSplitContentTpl,fe_pageSplitFootTpl,',$GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_layout']['fields']['fe_pageSplitHeadTpl'] = array (
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['fe_pageSplitHeadTpl'],
	'exclude'                 => true,
	'filter'                  => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 11,
	'inputType'               => 'select',
	'default'				  => 'page_head',
	'options_callback'        => array('fe_pageSplit4ward', 'getTemplates'),
	'eval'                    => array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['fe_pageSplitContentTpl'] = array (
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['fe_pageSplitContentTpl'],
	'exclude'                 => true,
	'filter'                  => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 11,
	'inputType'               => 'select',
	'default'				  => 'page_content',
	'options_callback'        => array('fe_pageSplit4ward', 'getTemplates'),
	'eval'                    => array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['fe_pageSplitFootTpl'] = array (
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['fe_pageSplitFootTpl'],
	'exclude'                 => true,
	'filter'                  => true,
	'search'                  => true,
	'sorting'                 => true,
	'flag'                    => 11,
	'inputType'               => 'select',
	'default'				  => 'page_foot',
	'options_callback'        => array('fe_pageSplit4ward', 'getTemplates'),
	'eval'                    => array('tl_class'=>'w50')
);


class fe_pageSplit4ward extends Backend {

	/**
	 * Return all page templates as array
	 * @param object
	 * @return array
	 */
	public function getTemplates(DataContainer $dc) {
		return $this->getTemplateGroup('page_', $dc->activeRecord->pid);
	}

}

?>