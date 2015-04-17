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
$module_description = 'Met deze module kun je een fotoalbum maken mbv galerie.php - een eenvoudig fotalbum script van Daniel Wacker <daniel.wacker@web.de>.';

//Variables for the Frontend
$MOD_IMAGEGALLERY['PREVIOUS'] = 'vorige';
$MOD_IMAGEGALLERY['NEXT']	= 'volgende';
$MOD_IMAGEGALLERY['OVERVIEW']	= 'start';

//Variables for the Backend
$MOD_IMAGEGALLERY['MAIN_SETTINGS'] = 'Fotoalbum Instellingen';
$MOD_IMAGEGALLERY['TITLE'] = 'Fotoalbum';
$MOD_IMAGEGALLERY['ORIGINAL_PICS'] = 'Pictures';
$MOD_IMAGEGALLERY['THUMBS'] = 'Thumbs';
$MOD_IMAGEGALLERY['GALLERY'] = 'Gallery';
$MOD_IMAGEGALLERY['TITLE_TEXT'] = 'Define Title';
$MOD_IMAGEGALLERY['SHOW_TITLE'] = 'Titel zichtbaar';
$MOD_IMAGEGALLERY['PICDIR'] = 'Fotomap';
$MOD_IMAGEGALLERY['INCLUDE_SUBDIRS'] = 'Inclusief submappen';
$MOD_IMAGEGALLERY['THUMBDIR'] = 'Mapnaam thumbnails ';
$MOD_IMAGEGALLERY['MAXPICS'] = 'Aantal thumbnails per pagina';
$MOD_IMAGEGALLERY['THUMBS_BACKGROUND'] = 'Thumbnails achtergrondkleur';
$MOD_IMAGEGALLERY['THUMBSIZE'] = 'Thumbnail grootte';
$MOD_IMAGEGALLERY['MAXWIDTH']	= 'Maximale breedte foto';
$MOD_IMAGEGALLERY['SHOW_FILE_NAMES'] = 'Bestandsnaam zichtbaar';
$MOD_IMAGEGALLERY['SHOW_ORIGINAL'] = 'Originele foto zichtbaar (nieuw scherm)';
$MOD_IMAGEGALLERY['SHOW_TEXTLINK'] = 'Volgende/vorige als tekst ipv plaatje';
$MOD_IMAGEGALLERY['INLINE'] = 'Show gallery inline';

//Variables for Error messages
$MOD_IMAGEGALLERY['words']['error'] = 'Fout';
$MOD_IMAGEGALLERY['words']['php_error'] = 'PHP >= 4.1 is nodig.';
$MOD_IMAGEGALLERY['words']['gd_error'] = 'GD Library is nodig. Ga naar http://www.boutell.com/gd/.';
$MOD_IMAGEGALLERY['words']['jpg_error'] = 'JPEG software is nodig. Ga naar ftp://ftp.uu.net/graphics/jpeg/.';
$MOD_IMAGEGALLERY['words']['mkdir_error'] = 'Schrijfrechten zijn nodig op deze map.';
$MOD_IMAGEGALLERY['words']['opendir_error'] = 'De map "%1" kan niet worden gelezen.';

?>