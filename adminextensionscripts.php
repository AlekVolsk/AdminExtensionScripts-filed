<?php defined('JPATH_PLATFORM') or die;
/*
 * @package     Joomla.Site
 * @subpackage  Layout
 * @copyright   Copyright (C) 2018 Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

class FormFieldAdminExtensionScripts extends Joomla\CMS\Form\FormField
{
	protected $type = 'adminextensionscripts';

	protected function getInput()
	{
		$path = str_replace( '\\', '/', str_replace( JPATH_SITE, '', dirname( __FILE__ ) ) );
		
		if ( (int) $this->element[ 'styles' ] == true )
		{
			Joomla\CMS\Factory::getDocument()->addStyleSheet( $path . '/adminextensionscripts.css ');
		}
		
		if ( (int) $this->element[ 'script' ] == true )
		{
			Joomla\CMS\Factory::getDocument()->addScript( $path . '/adminextensionscripts.js' );
		}
		
		return '';
	}
}
