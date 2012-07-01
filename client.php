<?php
/**
 * @package     Client
 * @subpackage  plg_user_client
 * @copyright   Copyright (C) 2012 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

/**
 * Client User plugin
 *
 * @package     User_Client
 * @subpackage  plg_user_client
 * @since       2.5
 */
class plgUserClient extends JPlugin
{
	/**
	 * Constructor
	 *
	 * @param   object  &$subject  The object to observe
	 * @param   array   $config    An array that holds the plugin configuration
	 *
	 * @since   2.5
	 */
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	/**
	 * Method is called after user data is stored in the database
	 *
	 * @param   array    $user     Holds the new user data.
	 * @param   boolean  $isnew    True if a new user is stored.
	 * @param   boolean  $success  True if user was succesfully stored in the database.
	 * @param   string   $msg      Message.
	 *
	 * @return  void
	 * 
	 * @since   2.5
	 * @throws  Exception on error.
	 */
	public function onUserAfterSave($user, $isnew, $success, $msg)
	{
		$app = JFactory::getApplication();

		if ($isnew)
		{
			JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_products/tables');
			$client = &JTable::getInstance('Client', 'ProductsTable');

			if (!$contact)
			{
				return false;
			}

			$client->user_id = $user['id'];

			$client->store();
		}
		else
		{
			// Do updates if necessary
		}
	}

	/**
	 * Method is called after user data is deleted from the database
	 *
	 * @param   array    $user    Holds the user data.
	 * @param   boolean  $succes  True if user was succesfully stored in the database.
	 * @param   string   $msg     Message.
	 *
	 * @return  void
	 * 
	 * @since   2.5
	 */
	public function onUserAfterDelete($user, $succes, $msg)
	{
		$app = JFactory::getApplication();

		// Initialiase variables.
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Prepare query.
		$query->delete();
		$query->from('#__products_clients');
		$query->where('user_id = ' . (int) $user['id']);

		// Inject the query and load the result.
		$db->setQuery($query);
		$db->query();
	}
}
