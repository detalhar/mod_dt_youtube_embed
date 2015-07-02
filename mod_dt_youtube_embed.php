<?php 
/**
*-------------------------------------------------------------------------------
* DT Simple Youtube Embed - Embed Youtube videos in Joomla by Detalhar - http://detalharweb.com.br
*-------------------------------------------------------------------------------
* @package DT Simple Youtube Embed
* @version 0.1.0
* @author Detalhar http://http://detalharweb.com.br
* @copyright (C) 2015 Detalhar. All Rights Reserved
* @license - GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html or see LICENSE.txt
*
* DT Simple Youtube Embed is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
**/

defined('_JEXEC') or die('Access Restricted');

// require_once dirname(__FILE__) . '/helper.php';

$doc = JFactory::getDocument();
//params
$youtube_id = $params->get('youtube_id');
$width = (int)$params->get('width', 300);
$height = (int)$params->get('height', 200);
$autoplay = $params->get('autoplay', 0);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_dt_youtube_embed', $params->get('layout','default'));