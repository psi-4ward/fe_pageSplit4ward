<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  4ward.media 2010
 * @author     Christoph Wiechert <christoph.wiechert@4wardmedia.de>
 * @package    fe_pageSplit4ward
 * @license    LGPL 
 * @filesource
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