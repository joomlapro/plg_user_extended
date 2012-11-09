<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  User.client
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

JFormHelper::loadFieldClass('list');

/**
 * State Field class for the Products.
 *
 * @package     Products
 * @subpackage  com_products
 * @since       1.6
 */
class JFormFieldState extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var     string
	 * @since   1.6
	 */
	protected $type = 'State';

	/**
	 * Method to get the field options.
	 *
	 * @return  array  The field option objects.
	 *
	 * @since   1.6
	 */
	protected function getOptions()
	{
		// Initialiase variables.
		$options = array();

		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('prefix AS value, name AS text');
		$query->from('#__address_states AS a');
		$query->order('a.name');

		// Get the options.
		$db->setQuery($query);

		try
		{
			$options = $db->loadObjectList();
		}
		catch (RuntimeException $e)
		{
			JError::raiseWarning(500, $db->getMessage());
		}

		// Merge any additional options in the XML definition.
		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
