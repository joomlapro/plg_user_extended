<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  User.client
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

JFormHelper::loadFieldClass('radio');

/**
 * Provides input for Type.
 *
 * @package     Joomla.Plugin
 * @subpackage  User.client
 * @since       2.5
 */
class JFormFieldType extends JFormFieldRadio
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  2.5.5
	 */
	protected $type = 'Type';
}
