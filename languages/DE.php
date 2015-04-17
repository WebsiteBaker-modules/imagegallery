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

//Modulbeschreibung
$module_description = 'Mit dem Modul erzeugen sie eine Bildergalerie von einem beliebigem Bilderordner im Medienverzeichnis. Der Originalscript stammt von Daniel Wacker <daniel.wacker@web.de>.';

//Variablen für Frontend Texte
$MOD_IMAGEGALLERY['PREVIOUS'] = 'vorheriges';
$MOD_IMAGEGALLERY['NEXT']	= 'n&auml;chstes';
$MOD_IMAGEGALLERY['OVERVIEW']	= '&Uuml;bersicht';

//Variablen für Backend Texte
$MOD_IMAGEGALLERY['MAIN_SETTINGS'] = 'Bildergalerie Einstellungen';
$MOD_IMAGEGALLERY['TITLE'] = 'Name der Galerie';
$MOD_IMAGEGALLERY['ORIGINAL_PICS'] = 'Originalbilder';
$MOD_IMAGEGALLERY['THUMBS'] = 'Vorschaubilder';
$MOD_IMAGEGALLERY['GALLERY'] = 'Galerie';
$MOD_IMAGEGALLERY['TITLE_TEXT'] = '&Uuml;berschrift festlegen';
$MOD_IMAGEGALLERY['SHOW_TITLE'] = '&Uuml;berschrift anzeigen';
$MOD_IMAGEGALLERY['PICDIR'] = 'Media-Verzeichnis mit Originalbildern';
$MOD_IMAGEGALLERY['INCLUDE_SUBDIRS'] = 'Unterverzeichnisse einschlie&szlig;en';
$MOD_IMAGEGALLERY['THUMBDIR'] = 'Name f&uuml;r Vorschaubildverzeichnis';
$MOD_IMAGEGALLERY['MAXPICS'] = 'Anzahl der Vorschaubilder pro Seite';
$MOD_IMAGEGALLERY['THUMBS_BACKGROUND'] = 'Hintergrund f&uuml;r Vorschaubilder';
$MOD_IMAGEGALLERY['THUMBSIZE'] = 'Gr&ouml;&szlig;e der Vorschaubilder';
$MOD_IMAGEGALLERY['MAXWIDTH'] = 'Maximale Breite der Bilder';
$MOD_IMAGEGALLERY['SHOW_FILE_NAMES'] = 'Dateinamen anzeigen';
$MOD_IMAGEGALLERY['SHOW_ORIGINAL'] = 'Originalbild auf neuer Seite zeigen';
$MOD_IMAGEGALLERY['SHOW_TEXTLINK'] = 'Text anstelle von Icons f&uuml;r vor/zur&uuml;ck';
$MOD_IMAGEGALLERY['INLINE'] = 'Bilder im Inhaltsbereich anzeigen';

//Variablen für Fehlermeldungen
$MOD_IMAGEGALLERY['words']['error'] = 'Fehler';
$MOD_IMAGEGALLERY['words']['php_error'] = 'PHP Version >= 4.1 wid ben&ouml;tigt.';
$MOD_IMAGEGALLERY['words']['gd_error'] = 'GD Library wird ben&ouml;tigt. Siehe http://www.boutell.com/gd/.';
$MOD_IMAGEGALLERY['words']['jpg_error'] = 'JPEG-Software wird ben&ouml;tigt. Siehe ftp://ftp.uu.net/graphics/jpeg/.';
$MOD_IMAGEGALLERY['words']['mkdir_error'] = 'Für dieses Verzeichnis wird Schreibberechtigung ben&ouml;tigt.';
$MOD_IMAGEGALLERY['words']['opendir_error'] = 'Das Verzeichnis "%1" kann nicht gelesen werden.';

?>