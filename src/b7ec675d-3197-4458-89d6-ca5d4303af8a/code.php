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

namespace VDM\Joomla\Gitea;


use VDM\Joomla\Gitea\Abstraction\Api;


/**
 * The Gitea Package
 * 
 * @since 3.2.0
 */
class Package extends Api
{
	/**
	 * Gets a package.
	 *
	 * @param   string   $owner    The owner of the package.
	 * @param   string   $type     The type of the package.
	 * @param   string   $name     The name of the package.
	 * @param   string   $version  The version of the package.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function get(
		string $owner,
		string $type,
		string $name,
		string $version
	): ?object
	{
		// Build the request path.
		$path = '/packages/' . $this->segment($owner) . '/' . $this->segment($type) . '/' . $this->segment($name) . '/' . $this->segment($version);

		// Send the get request.
		return $this->response->get(
			$this->http->get(
				$this->uri->get($path)
			)
		);
	}

	/**
	 * Delete a package.
	 *
	 * @param   string   $owner    The owner of the package.
	 * @param   string   $type     The type of the package.
	 * @param   string   $name     The name of the package.
	 * @param   string   $version  The version of the package.
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function delete(
		string $owner,
		string $type,
		string $name,
		string $version
	): string
	{
		// Build the request path.
		$path = '/packages/' . $this->segment($owner) . '/' . $this->segment($type) . '/' . $this->segment($name) . '/' . $this->segment($version);

		// Send the delete request.
		return $this->response->get(
			$this->http->delete(
				$this->uri->get($path)
			), 204, 'success'
		);
	}


	/**
	 * List every version of a package, with pagination.
	 *
	 * @param   string  $owner  Package owner.
	 * @param   string  $type   Package type.
	 * @param   string  $name   Unencoded package name, including scopes if applicable.
	 * @param   int     $page   One-based page number.
	 * @param   int     $limit  Page size.
	 *
	 * @return  array|null
	 * @since   1.1.0
	 */
	public function versions(string $owner, string $type, string $name, int $page = 1, int $limit = 10): ?array
	{
		$path = '/packages/' . $this->segment($owner) . '/' . $this->segment($type) . '/' . $this->segment($name);
		$uri = $this->uri->get($path);
		$uri->setVar('page', $page);
		$uri->setVar('limit', $limit);

		return $this->response->get($this->http->get($uri));
	}

	/**
	 * Get the latest version of a package.
	 *
	 * @param   string  $owner  Package owner.
	 * @param   string  $type   Package type.
	 * @param   string  $name   Unencoded package name.
	 *
	 * @return  object|null
	 * @since   1.1.0
	 */
	public function latest(string $owner, string $type, string $name): ?object
	{
		$path = '/packages/' . $this->segment($owner) . '/' . $this->segment($type) . '/' . $this->segment($name) . '/-/latest';

		return $this->response->get($this->http->get($this->uri->get($path)));
	}

	/**
	 * Link a package to a repository belonging to its owner.
	 *
	 * @param   string  $owner  Package owner.
	 * @param   string  $type   Package type.
	 * @param   string  $name   Unencoded package name.
	 * @param   string  $repo   Repository name.
	 *
	 * @return  string
	 * @since   1.1.0
	 */
	public function link(string $owner, string $type, string $name, string $repo): string
	{
		$path = '/packages/' . $this->segment($owner) . '/' . $this->segment($type) . '/' . $this->segment($name) . '/-/link/' . $this->segment($repo);

		return $this->response->get($this->http->post($this->uri->get($path), ''), 201, 'success');
	}

	/**
	 * Remove a package's repository association.
	 *
	 * @param   string  $owner  Package owner.
	 * @param   string  $type   Package type.
	 * @param   string  $name   Unencoded package name.
	 *
	 * @return  string
	 * @since   1.1.0
	 */
	public function unlink(string $owner, string $type, string $name): string
	{
		$path = '/packages/' . $this->segment($owner) . '/' . $this->segment($type) . '/' . $this->segment($name) . '/-/unlink';

		return $this->response->get($this->http->post($this->uri->get($path), ''), 201, 'success');
	}

	/**
	 * Delete all versions of a package. delete() still deletes one version.
	 *
	 * @param   string  $owner  Package owner.
	 * @param   string  $type   Package type.
	 * @param   string  $name   Unencoded package name.
	 *
	 * @return  string
	 * @since   1.1.0
	 */
	public function deleteAll(string $owner, string $type, string $name): string
	{
		$path = '/packages/' . $this->segment($owner) . '/' . $this->segment($type) . '/' . $this->segment($name);

		return $this->response->get($this->http->delete($this->uri->get($path)), 204, 'success');
	}

}

