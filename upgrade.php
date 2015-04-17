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

if(!defined('WB_PATH')) { exit("Cannot access this file directly"); }

$database->query("ALTER TABLE `".TABLE_PREFIX."mod_imagegallery_settings` ADD `titletext` TEXT NOT NULL ");
$database->query("ALTER TABLE `".TABLE_PREFIX."mod_imagegallery_settings` ADD `inline` INT NOT NULL DEFAULT '1'");

?>