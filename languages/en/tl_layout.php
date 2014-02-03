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


$GLOBALS['TL_LANG']['tl_layout']['fe_pageSplitHeadTpl'] = array('Head-Template','This template gets included in the fe_pageSplit head-section.');
$GLOBALS['TL_LANG']['tl_layout']['fe_pageSplitContentTpl'] = array('Content-Template','This template gets included in the fe_pageSplit content-section.');
$GLOBALS['TL_LANG']['tl_layout']['fe_pageSplitFootTpl'] = array('Foot-Template','This template gets included in the fe_pageSplit foot-section.');
