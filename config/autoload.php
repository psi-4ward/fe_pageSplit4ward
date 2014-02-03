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


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'page_content'          => 'system/modules/fe_pageSplit4ward/templates',
	'page_content_yaml'     => 'system/modules/fe_pageSplit4ward/templates',
	'page_head'             => 'system/modules/fe_pageSplit4ward/templates',
	'page_head_yaml'        => 'system/modules/fe_pageSplit4ward/templates',
	'page_foot'             => 'system/modules/fe_pageSplit4ward/templates',
	'fe_pageSplit'          => 'system/modules/fe_pageSplit4ward/templates',
));
