<?php
/*******************************************************************
* Glype is copyright and trademark 2007-2012 UpsideOut, Inc. d/b/a Glype
* and/or its licensors, successors and assigners. All rights reserved.
*
* Use of Glype is subject to the terms of the Software License Agreement.
* http://www.glype.com/license.php
********************************************************************
* This theme configuration file allows easy customization of the
* theme without editing the HTML templates.
*******************************************************************
* Theme: Simple
* Author: Glype
* Website: http://www.glype.com/
******************************************************************/

/*****************************************************************
* Themes can use "theme replacements". These are HTML tags of the format
* <!--[tag_name]--> in the template files. To automatically replace
* these placeholders with other text, use the $themeReplace array.
*  e.g.
* <!--[tag_name]--> will be replaced with the value of $themeReplace['tag_name']
******************************************************************/

// Website name
$themeReplace['site_name'] = 'PRXSite';

// Meta description
$themeReplace['meta_description'] = <<<OUT
Private Proxy Site to unblock and access blocked websites.
OUT;

// Meta keywords (separate with comma)
$themeReplace['meta_keywords'] = <<<OUT
proxy, http, website, unblock, get to this, let me see, facebook, youtube, twitter
OUT;

// Proxy description text
$themeReplace['description'] = <<<OUT
   <p>Some monster eat the description part o_O ...</p>

<br>
<div style="text-align:center; width:600px; margin:auto">
<center>
<!--ADCODE-->
</center>
</div>
  
  
<!--AnalyticsCODE-->

OUT;

// Ad location above the form on the index page
$themeReplace['index_above_form'] = <<<OUT
<center>

</center>
<br>
OUT;

// Ad location below the form on the index page
$themeReplace['index_below_form'] = <<<OUT
<center>
<!--ADCODE-->
</center>
OUT;

// Ad location on proxied pages below the url mini-form
$themeReplace['proxied'] = <<<OUT
<!--ADCODE-->
OUT;
