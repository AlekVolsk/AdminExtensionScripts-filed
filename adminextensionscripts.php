<?php defined('JPATH_PLATFORM') or die;
/*
 * @package     Joomla.Field
 * @subpackage  adminextensionscripts
 * @copyright   Copyright (C) 2019 Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Form\FormField;

class FormFieldAdminExtensionScripts extends FormField
{
    protected $type = 'adminextensionscripts';

    protected function getLabel()
    {
        return '';
    }

    protected function getInput()
    {
        if (Factory::getApplication()->isClient('administrator') === false) {
            return '';
        }

        $path = str_replace('\\', '/', str_replace(JPATH_SITE, '', dirname(__FILE__)));

        if ((bool) $this->element['styles']) {
            HTMLHelper::stylesheet($path . '/adminextensionscripts.css', ['version' => 'auto']);
        }

        if ((bool) $this->element['script']) {
            HTMLHelper::script($path . '/adminextensionscripts.js', ['version' => 'auto']);
        }

        return '';
    }
}
