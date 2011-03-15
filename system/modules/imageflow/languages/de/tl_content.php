<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2008
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    LGPL
 * @version    $Id$
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['ifPreload']			= array('Bilder vorladen', 'Klicken Sie hier wenn alle Bilder vor dem anzeigen geladen werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['ifReflections']		= array('Spiegelung aktivieren', '<a href="http://finnrudolph.de/ImageFlow/Examples#No_reflections" onclick="window.open(this.href); return false">Klicken Sie hier wenn die Bilder gespiegelt werden sollen.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifReflectionP']		= array('Höhe der Spiegelung', '<a href="http://finnrudolph.de/ImageFlow/Examples#Image_alignment" onclick="window.open(this.href); return false">Höhe der Spiegelung in % des Originalbildes (1.0 = 100%, 0 = 0%).</a>');
$GLOBALS['TL_LANG']['tl_content']['ifReflectionPNG']	= array('PNG für Transparenz benutzen', '<a href="http://finnrudolph.de/ImageFlow/Examples#Transparent_reflections" onclick="window.open(this.href); return false">Verwendet reflect3.php anstelle von reflect2.php um PNG-Transparenz zu benutzen.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifImageFocusMax']	= array('Anzahl Bilder auf jeder Seite', '<a href="http://finnrudolph.de/ImageFlow/Examples#imageFocusMax" onclick="window.open(this.href); return false">Maximale Anzahl Bilder auf jeder Seite des fokussierten Bildes.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifStartID']			= array('Startbild', '<a href="http://finnrudolph.de/ImageFlow/Examples#startID" onclick="window.open(this.href); return false">Beim starten zu diesem Bild gleiten.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifStartAnimation']	= array('Start-Animation zeigen', '<a href="http://finnrudolph.de/ImageFlow/Examples#startAnimation" onclick="window.open(this.href); return false">Beim starten werden die Bilder von rechts eingeblendet.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifSlider']			= array('Schieber anzeigen', '<a href="http://finnrudolph.de/ImageFlow/Examples#No_reflections_no_scrollbar" onclick="window.open(this.href); return false">Klicken Sie hier wenn die Scrollbar angezeigt werden soll.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifButtons']			= array('Buttons anzeigen', '<a href="http://finnrudolph.de/ImageFlow/Examples#Enable_navigation_buttons" onclick="window.open(this.href); return false">Klicken Sie hier wenn die Scrollbar-Buttons angezeigt werden sollen.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifCaptions']			= array('Bildunterschriften anzeigen', '<a href="http://finnrudolph.de/ImageFlow/Examples#No_reflections_no_scrollbar_no_captions" onclick="window.open(this.href); return false">Klicken Sie hier wenn Bildunterschriften angezeigt werden sollen.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifOpacity']			= array('Bilder transparent zeigen', '<a href="http://finnrudolph.de/ImageFlow/Examples#Enable_image_opacity" onclick="window.open(this.href); return false">Klicken Sie hier wenn Bilder links und rechts transparent angezeigt werden sollen.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifBgColor']			= array('Hintergrundfarbe der Spiegelung', 'Wählen Sie die Hintergrundfarbe für die Spiegelung entsprechend der Website für beste Resultate.');
$GLOBALS['TL_LANG']['tl_content']['ifGetParameters']	= array('Parameter für Spiegelungs-Script', '<a href="http://finnrudolph.de/ImageFlow/Examples#Reflection_background_color" onclick="window.open(this.href); return false">Sie können dem Spiegelungs-Script zusätzliche Parameter übergeben.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifParameters']		= array('Parameter für ImageFlow-Script', '<a href="http://finnrudolph.de/ImageFlow/Documentation" onclick="window.open(this.href); return false;">Sie können ImageFlow zusätzliche Parameter übergeben.</a>');
$GLOBALS['TL_LANG']['tl_content']['ifLicense']			= array('ImageFlow Lizenz', '');
$GLOBALS['TL_LANG']['tl_content']['ifAnimationSpeed']	= array('Animations-Geschwindigkeit', 'Geben Sie die gewünschte Animationszeit in ms ein.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['ifSettings_legend']		= 'ImageFlow Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['ifReflections_legend']	= 'Bildspiegelung';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['ifGetParameters_ref'] = array('Schlüssel', 'Wert');
