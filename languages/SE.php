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

//Modul Description
$module_description = 'This module allows you to create a image Gallery using galerie.php - a simple gallery script from Daniel Wacker <daniel.wacker@web.de>.';

//Variables for the Frontend
$MOD_IMAGEGALLERY['PREVIOUS'] = '<< f&ouml;reg&aring;ende';
$MOD_IMAGEGALLERY['NEXT']	= 'n&auml;sta >>';
$MOD_IMAGEGALLERY['OVERVIEW']	= 'bild&ouml;versikt';

//Variables for the Backend
$MOD_IMAGEGALLERY['MAIN_SETTINGS'] = 'Huvudinst&auml;llningar';
$MOD_IMAGEGALLERY['TITLE'] = 'Imagegallery';
$MOD_IMAGEGALLERY['ORIGINAL_PICS'] = 'Pictures';
$MOD_IMAGEGALLERY['THUMBS'] = 'Thumbs';
$MOD_IMAGEGALLERY['GALLERY'] = 'Gallery';
$MOD_IMAGEGALLERY['TITLE_TEXT'] = 'Define Title';
$MOD_IMAGEGALLERY['SHOW_TITLE'] = 'Visa titel';
$MOD_IMAGEGALLERY['PICDIR'] = 'Bildmapp';
$MOD_IMAGEGALLERY['INCLUDE_SUBDIRS'] = 'Inkludera undermappar';
$MOD_IMAGEGALLERY['THUMBDIR'] = 'Namn p&aring; tumnagelmapp';
$MOD_IMAGEGALLERY['MAXPICS'] = 'Antalet tumnaglar per sida';
$MOD_IMAGEGALLERY['THUMBS_BACKGROUND'] = 'Bakgrund p&aring; tumnagelbilder';
$MOD_IMAGEGALLERY['THUMBSIZE'] = 'Storlek p&aring; tumnagel';
$MOD_IMAGEGALLERY['MAXWIDTH']	= 'Maximal bildbredd';
$MOD_IMAGEGALLERY['SHOW_FILE_NAMES'] = 'Visa filnamn';
$MOD_IMAGEGALLERY['SHOW_ORIGINAL'] = 'Visa orginal';
$MOD_IMAGEGALLERY['SHOW_TEXTLINK'] = 'Text n&auml;sta/f&ouml;reg&aring;ende l&auml;nkar';
$MOD_IMAGEGALLERY['INLINE'] = 'Show gallery inline';

//Variables for Error messages
$MOD_IMAGEGALLERY['words']['error'] = 'Error';
$MOD_IMAGEGALLERY['words']['php_error'] = 'PHP >= 4.1 is required.';
$MOD_IMAGEGALLERY['words']['gd_error'] = 'GD Library is required. See http://www.boutell.com/gd/.';
$MOD_IMAGEGALLERY['words']['jpg_error'] = 'JPEG software is required. See ftp://ftp.uu.net/graphics/jpeg/.';
$MOD_IMAGEGALLERY['words']['mkdir_error'] = 'Write permission is required in this folder.';
$MOD_IMAGEGALLERY['words']['opendir_error'] = 'The directory "%1" can not be read.';

?>