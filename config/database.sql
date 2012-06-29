-- 
-- Table `tl_layout`
-- 

CREATE TABLE `tl_layout` (
  `fe_pageSplitHeadTpl` varchar(255) NOT NULL default 'page_head',
  `fe_pageSplitContentTpl` varchar(255) NOT NULL default 'page_content',
  `fe_pageSplitFootTpl` varchar(255) NOT NULL default 'page_foot',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

