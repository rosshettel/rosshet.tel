<?php defined('BP_START') || die('Unauthorized Access');
/*
Name: MacOS
Author: Ross Hettel <ross@rosshettel.com>
Inspiration taken from the Retro MacOS wordpress theme: <http://retromacosdemo.wordpress.com>
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="resource-type" content="document" />
<meta name="language" content="en-gb" />
<meta name="distribution" content="global" />
<meta name="copyright" content="<?php print date('Y').' '.$bp->page_title();?>" />
<meta name="keywords" content="<?php print $bp->page_meta_keywords();?>" />
<meta name="description" content="<?php print $bp->page_meta_description();?>" />
<meta name="generator" content="BasicPages" />
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="bp_themes/macos/favicon.gif" />
<link rel="stylesheet" type="text/css" href="bp_themes/macos/<?php print $bp->page_style('macos.css');?>" />
<title>Ross Hettel</title>
<?php print $bp->page_analytics();?>
</head>

<body>
<div id="page">
    <div id="header">
        <h1 id="site-title">
            <a href="http://www.rosshettel.com">rosshettel</a>
        </h1>
    </div>
    <hr>
    
    <div id="content" class="narrowcolumn">
        <div class="post type-post status-publish format-standard hentry">
            <h2 class="entry-title"><span><?php print $bp->page_meta_keywords(); ?></span></h2>
            <small><?php print date('l, F jS, Y'); ?></small>
            <div class="entry"><?php print $bp->page_content();?></div>            
        </div>
    </div>
    <div id="sidebar">
	<ul>
	    <li class="home_icon"><a href="http://www.rosshettel.com" title="Home">rosshettel</a></li>
	    <li class="page_item"><a href="http://northernstar.info/search/?q=ross+hettel&t=article&l=10&d=&d1=&d2=&s=start_time&sd=desc&f=html#.TstHukgk6dA" target="_blank" title="My Articles at the Northern Star">Northern Star Articles</a></li>
	    <li class="archive_item"><a href="https://github.com/rosshettel" title="GitHub">GitHub</a></li>
	    <li class="archive_item"><a href="http://www.linkedin.com/pub/ross-hettel/30/990/418" title="LinkedIn">LinkedIn</a></li>
	    <?php foreach ($bp->page_navigation() as $nav_page => $nav_title) { ?>
		<li class="page_item page-item-2"><a href="<?=$nav_page?>"><?=$nav_title?></a></li>
	    <? } ?>
	</ul>
    </div>
	
    <div id="footer">
	<div id="site-generator"><?php print $bp->page_credits();?></div>
    </div>
</div>
