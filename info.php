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

/*
 * galerie.php - a simple gallery script
 * Copyright (C) 2004  Daniel Wacker <daniel.wacker@web.de>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 *
 * --
 * This script provides a simple gallery of all images that are located
 * in the script's directory and subdirectories.
 *
 * Requirements
 * - PHP >= 4.1.0
 * - GD Library ( >= 2.0.1 for good thumbnails)
 * - JPEG software
 * - PHP >= 4.3.0 or GD < 1.6 for GIF support
 * - libpng for PNG support
 *
 * Installation
 * Simply put this script in a folder of your web server and call it in a
 * web browser. Be sure that the script has permission to read the image
 * files and to create and write into the thumbnail folder.
 *
 * Attention:
 * This script tries to generate jpeg thumbnail files in a subfolder of the
 * gallery folder(s). The filenames look like "originalfilename.thumb.jpg".
 *
*/
$module_directory = 'imagegallery';
$module_name = 'Another Image Gallery';
$module_function = 'page';
$module_version = '2.2';
$module_platform = '2.8.x';
$module_author = 'Daniel Wacker, Matthias Gallas, Rob Smith, Manfred Fuenkner';
$module_license = 'GNU General Public License';
$module_description = 'This module allows you to create a image Gallery using galerie.php - a simple gallery script from Daniel Wacker <daniel.wacker@web.de>.';

?>
