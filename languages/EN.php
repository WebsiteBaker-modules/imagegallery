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

//Variablen für Frontend Texte
$MOD_IMAGEGALLERY['PREVIOUS'] = 'previous';
$MOD_IMAGEGALLERY['NEXT']	= 'next';
$MOD_IMAGEGALLERY['OVERVIEW']	= 'Overview';

//Variables for the Backend
$MOD_IMAGEGALLERY['MAIN_SETTINGS'] = 'Imagegallery Settings';
$MOD_IMAGEGALLERY['TITLE'] = 'Title';
$MOD_IMAGEGALLERY['ORIGINAL_PICS'] = 'Pictures';
$MOD_IMAGEGALLERY['THUMBS'] = 'Thumbs';
$MOD_IMAGEGALLERY['GALLERY'] = 'Gallery';
$MOD_IMAGEGALLERY['TITLE_TEXT'] = 'Define Title';
$MOD_IMAGEGALLERY['SHOW_TITLE'] = 'Show Gallery Title';
$MOD_IMAGEGALLERY['PICDIR'] = 'Dir from the pictures';
$MOD_IMAGEGALLERY['INCLUDE_SUBDIRS'] = 'Include Subdirs';
$MOD_IMAGEGALLERY['THUMBDIR'] = 'Name for Thumbdir';
$MOD_IMAGEGALLERY['MAXPICS'] = 'Number of Thumbs per page';
$MOD_IMAGEGALLERY['THUMBS_BACKGROUND'] = 'Thumbs Background';
$MOD_IMAGEGALLERY['THUMBSIZE'] = 'Thumbsize';
$MOD_IMAGEGALLERY['MAXWIDTH']	= 'Maximum Width';
$MOD_IMAGEGALLERY['SHOW_FILE_NAMES'] = 'Show Filenames';
$MOD_IMAGEGALLERY['SHOW_ORIGINAL'] = 'Show Original';
$MOD_IMAGEGALLERY['SHOW_TEXTLINK'] = 'Text next/previous links';
$MOD_IMAGEGALLERY['INLINE'] = 'Show gallery inline';

//Variables for Error messages
$MOD_IMAGEGALLERY['words']['error'] = 'Error';
$MOD_IMAGEGALLERY['words']['php_error'] = 'PHP >= 4.1 is required.';
$MOD_IMAGEGALLERY['words']['gd_error'] = 'GD Library is required. See http://www.boutell.com/gd/.';
$MOD_IMAGEGALLERY['words']['jpg_error'] = 'JPEG software is required. See ftp://ftp.uu.net/graphics/jpeg/.';
$MOD_IMAGEGALLERY['words']['mkdir_error'] = 'Write permission is required in this folder.';
$MOD_IMAGEGALLERY['words']['opendir_error'] = 'The directory "%1" can not be read.';

?>