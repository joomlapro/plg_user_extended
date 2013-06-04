<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.Extended
 * @copyright   Copyright (C) 2013 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

JFormHelper::loadFieldClass('calendar');

/**
 * Provides input for Birthday.
 *
 * @package     Joomla.Plugin
 * @subpackage  User.Extended
 * @since       3.1
 */
class JFormFieldBirthday extends JFormFieldCalendar
{
	/**
	 * The form field type.
	 *
	 * @var     string
	 * @since   3.1
	 */
	public $type = 'Birthday';
}
