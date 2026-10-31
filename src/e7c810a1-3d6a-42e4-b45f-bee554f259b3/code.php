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

namespace VDM\Joomla\Gitea\Admin;


use VDM\Joomla\Gitea\Abstraction\Api;


/**
 * The Gitea Admin Users
 * 
 * @since 3.2.0
 */
class Users extends Api
{
	/**
	 * List all users.
	 *
	 * @param   int  $page   Page number of results to return (1-based).
	 * @param   int  $limit  Page size of results.
	 * @param   array $filters  Additional documented admin user search filters.
	 *
	 * @return  array|null
	 * @since   3.2.0
	 **/
	public function list(int $page = 1, int $limit = 10, array $filters = []): ?array
	{
		// Build the request path.
		$path = "/admin/users";

		// build the URL
		$url = $this->uri->get($path);
		$url->setVar('page', $page);
		$url->setVar('limit', $limit);

		foreach ($filters as $name => $value)
		{
			if (!in_array($name, ['source_id', 'login_name', 'sort', 'order', 'q', 'visibility', 'is_active', 'is_admin', 'is_restricted', 'is_2fa_enabled', 'is_prohibit_login'], true))
			{
				throw new \InvalidArgumentException('Unknown user filter: ' . $name);
			}

			if ($value !== null)
			{
				$url->setVar($name, is_bool($value) ? ($value ? 'true' : 'false') : $value);
			}
		}

		// Send the get request.
		return $this->response->get(
			$this->http->get($url)
		);
	}

	/**
	 * Create a user with extended options.
	 *
	 * @param   string       $loginName           The user's login name.
	 * @param   string       $email               The user's email address.
	 * @param   string       $password            The user's password.
	 * @param   string|null  $username            The username.
	 * @param   string|null  $fullName            The user's full name (optional).
	 * @param   bool|null    $mustChangePassword  User must change password on next login (optional).
	 * @param   bool|null    $restricted          Restrict the user (optional).
	 * @param   bool|null    $sendNotify          Send a notification email to the user (optional).
	 * @param   int|null     $sourceId            Source ID (optional).
	 * @param   string|null  $visibility          The user's visibility (optional).
	 * @param   string|null  $createdAt           Original creation time in RFC 3339 format, for migrations.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function create(
		string $loginName,
		string $email,
		string $password,
		string $username,
		?string $fullName = null,
		?bool $mustChangePassword = null,
		?bool $restricted = null,
		?bool $sendNotify = null,
		?int $sourceId = null,
		?string $visibility = null,
		?string $createdAt = null
	): ?object
	{
		// Build the request path.
		$path = "/admin/users";

		// Set the user data.
		$data = new \stdClass();
		$data->login_name = $loginName;
		$data->email = $email;
		$data->password = $password;
		$data->username = $username;
		$data->full_name = $fullName;
		$data->must_change_password = $mustChangePassword;
		$data->restricted = $restricted;
		$data->send_notify = $sendNotify;
		$data->source_id = $sourceId;
		$data->visibility = $visibility;

		if ($createdAt !== null)
		{
			$data->created_at = $createdAt;
		}

		// Send the post request.
		return $this->response->get(
			$this->http->post(
				$this->uri->get($path), $this->encode($data)
			), 201
		);
	}

	/**
	 * Delete a user.
	 *
	 * @param   bool|null $purge  Explicitly purge all user data; null uses the server default.
	 *
	 * @param   string  $username  The user's display name.
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function delete(string $username, ?bool $purge = null): string
	{
		// Build the request path.
		$path = '/admin/users/' . $this->segment($username);

		$uri = $this->uri->get($path);
		if ($purge !== null)
		{
			$uri->setVar('purge', $purge ? 'true' : 'false');
		}

		// Send the delete request.
		return $this->response->get(
			$this->http->delete(
				$uri
			), 204, 'success'
		);
	}

	/**
	 * Edit an existing user.
	 *
	 * @param   string  $username                   The user's display name.
	 * @param   string  $loginName                  The user's login name.
	 * @param   int     $sourceId                   The user's source ID.
	 * @param   bool|null $active                     Optional. Is the user active? Omit to leave unchanged.
	 * @param   bool|null $admin                      Optional. Is the user an admin? Omit to leave unchanged.
	 * @param   bool|null $allowCreateOrganization    Optional. Can the user create an organization? Omit to leave unchanged.
	 * @param   bool|null $allowGitHook               Optional. Can the user create Git hooks? Omit to leave unchanged.
	 * @param   bool|null $allowImportLocal           Optional. Can the user import local repositories? Omit to leave unchanged.
	 * @param   string|null $description                Optional. The user's description. Omit to leave unchanged.
	 * @param   string|null $email                      Optional. The user's email address. Omit to leave unchanged.
	 * @param   string|null $fullName                   Optional. The user's full name. Omit to leave unchanged.
	 * @param   string|null $location                   Optional. The user's location. Omit to leave unchanged.
	 * @param   int|null $maxRepoCreation            Optional. Maximum repositories the user can create. Omit to leave unchanged.
	 * @param   bool|null $mustChangePassword         Optional. Must the user change their password? Omit to leave unchanged.
	 * @param   string|null $password                   Optional. The user's password. Omit to leave unchanged.
	 * @param   bool|null $prohibitLogin              Optional. Is the user's login prohibited? Omit to leave unchanged.
	 * @param   bool|null $restricted                 Optional. Is the user restricted? Omit to leave unchanged.
	 * @param   string|null $visibility                 Optional. The user's visibility setting. Omit to leave unchanged.
	 * @param   string|null $website                    Optional. The user's website. Omit to leave unchanged.
	 * @param   string|null $type                     User type (User or Bot), when explicitly changing it.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function edit(
		string $username,
		string $loginName,
		int $sourceId,
		?bool $active = null,
		?bool $admin = null,
		?bool $allowCreateOrganization = null,
		?bool $allowGitHook = null,
		?bool $allowImportLocal = null,
		?string $description = null,
		?string $email = null,
		?string $fullName = null,
		?string $location = null,
		?int $maxRepoCreation = null,
		?bool $mustChangePassword = null,
		?string $password = null,
		?bool $prohibitLogin = null,
		?bool $restricted = null,
		?string $visibility = null,
		?string $website = null,
		?string $type = null
	): ?object
	{
		// Build the request path.
		$path = '/admin/users/' . $this->segment($username);

		// Set the data.
		$data = [
			'login_name' => $loginName,
			'source_id' => $sourceId,
			'active' => $active,
			'admin' => $admin,
			'allow_create_organization' => $allowCreateOrganization,
			'allow_git_hook' => $allowGitHook,
			'allow_import_local' => $allowImportLocal,
			'description' => $description,
			'email' => $email,
			'full_name' => $fullName,
			'location' => $location,
			'max_repo_creation' => $maxRepoCreation,
			'must_change_password' => $mustChangePassword,
			'password' => $password,
			'prohibit_login' => $prohibitLogin,
			'restricted' => $restricted,
			'visibility' => $visibility,
			'website' => $website,
			'type' => $type
		];

		$data = array_filter($data, static function ($value) {
			return $value !== null;
		});

		// Send the patch request.
		return $this->response->get(
			$this->http->patch(
				$this->uri->get($path), $this->encode($data)
			)
		);
	}

}

