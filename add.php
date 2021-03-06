<?php
/**
 *
 * @category        modules
 * @package         imagegallery
 * @author          Daniel Wacker, Matthias Gallas, Rob Smith, Manfred Fuenkner
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.0 and higher
 *
*/

// Insert an extra row into the database
$maxpics = '9';
$thumbdir = 'thumbs';
$thumbsize = '150';
$filenames = '0';
$subdirs = '0';
$title = '0';
$bg = 'FFFFFF';
$maxwidth = '500';
$showoriginal = '0';
$textlink = '0';
$titletext = 'Gallery';
$inline = '1';

$database->query("INSERT INTO `".TABLE_PREFIX."mod_imagegallery_settings` (`page_id`, `section_id`, `maxpics`, `thumbdir`, `thumbsize`, `filenames`, `subdirs`, `title`, `bg`, `maxwidth`, `showoriginal`, `textlink`, `titletext`, `inline`) VALUES ('$page_id','$section_id','$maxpics','$thumbdir','$thumbsize','$filenames','$subdirs','$title','$bg','$maxwidth','$showoriginal','$textlink','$titletext','$inline')");

?>