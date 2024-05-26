<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VastDevelopmentMethod\Joomla\Gitea;


use Joomla\DI\Container;
use VastDevelopmentMethod\Joomla\Gitea\Service\Utilities;
use VastDevelopmentMethod\Joomla\Gitea\Service\Jcb;
use VastDevelopmentMethod\Joomla\Gitea\Service\Settings;
use VastDevelopmentMethod\Joomla\Gitea\Service\Organization;
use VastDevelopmentMethod\Joomla\Gitea\Service\User;
use VastDevelopmentMethod\Joomla\Gitea\Service\Repository;
use VastDevelopmentMethod\Joomla\Gitea\Service\Package;
use VastDevelopmentMethod\Joomla\Gitea\Service\Issue;
use VastDevelopmentMethod\Joomla\Gitea\Service\Notifications;
use VastDevelopmentMethod\Joomla\Gitea\Service\Miscellaneous;
use VastDevelopmentMethod\Joomla\Gitea\Service\Admin;
use VastDevelopmentMethod\Joomla\Interfaces\FactoryInterface;


/**
 * Gitea Factory
 * 
 * @since 3.2.0
 */
abstract class Factory implements FactoryInterface
{
	/**
	 * Global Package Container
	 *
	 * @var     Container
	 * @since 3.2.0
	 **/
	protected static $container = null;

	/**
	 * Get any class from the package container
	 *
	 * @param   string  $key  The container class key
	 *
	 * @return  Mixed
	 * @since 3.2.0
	 */
	public static function _($key)
	{
		return self::getContainer()->get($key);
	}

	/**
	 * Get the global package container
	 *
	 * @return  Container
	 * @since 3.2.0
	 */
	public static function getContainer(): Container
	{
		if (!self::$container)
		{
			self::$container = self::createContainer();
		}

		return self::$container;
	}

	/**
	 * Create a container object
	 *
	 * @return  Container
	 * @since 3.2.0
	 */
	protected static function createContainer(): Container
	{
		return (new Container())
			->registerServiceProvider(new Utilities())
			->registerServiceProvider(new Jcb())
			->registerServiceProvider(new Settings())
			->registerServiceProvider(new Organization())
			->registerServiceProvider(new User())
			->registerServiceProvider(new Repository())
			->registerServiceProvider(new Package())
			->registerServiceProvider(new Issue())
			->registerServiceProvider(new Notifications())
			->registerServiceProvider(new Miscellaneous())
			->registerServiceProvider(new Admin());
	}

}

