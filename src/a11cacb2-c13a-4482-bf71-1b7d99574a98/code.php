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

namespace VDM\Joomla\Gitea\Repository\Hooks;


use VDM\Joomla\Gitea\Abstraction\Api;


/**
 * The Gitea Repository Hooks Git
 * 
 * @since 3.2.0
 */
class Git extends Api
{
	/**
	 * List the Git hooks in a repository.
	 *
	 * @param	string  $ownerName	The owner name.
	 * @param	string  $repoName		The repository name.
	 *
	 * @return  array|null
	 * @since   3.2.0
	 **/
	public function list(string $ownerName, string $repoName): ?array
	{
		// Build the request path.
		$path = '/repos/' . $this->segment($ownerName) . '/' . $this->segment($repoName) . '/hooks/git';

		// Get the URI object with the path.
		$uri = $this->uri->get($path);

		// Send the get request.
		return $this->response->get(
			$this->http->get($uri)
		);
	}

	/**
	 * Get a Git hook.
	 *
	 * @param	string  $ownerName	The owner name.
	 * @param	string  $repoName		The repository name.
	 * @param	string|int $hookId 	The Git hook name (e.g. pre-receive).
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function get(
		string $ownerName,
		string $repoName,
		string|int $hookId
	): ?object
	{
		// Build the request path.
		$path = '/repos/' . $this->segment($ownerName) . '/' . $this->segment($repoName) . '/hooks/git/' . $this->segment((string) $hookId);

		// Get the URI object with the path.
		$uri = $this->uri->get($path);

		// Send the get request.
		return $this->response->get(
			$this->http->get($uri)
		);
	}

	/**
	 * Delete a Git hook in a repository.
	 *
	 * @param	string  $ownerName	The owner name.
	 * @param	string  $repositoryName	The repository name.
	 * @param	string  $hookId		The Git hook ID.
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function delete(
		string $ownerName,
		string $repositoryName,
		string $hookId
	): string
	{
		// Build the request path.
		$path = '/repos/' . $this->segment($ownerName) . '/' . $this->segment($repositoryName) . '/hooks/git/' . $this->segment((string) $hookId);

		// Send the delete request.
		return $this->response->get(
			$this->http->delete(
				$this->uri->get($path)
			), 204, 'success'
		);
	}

	/**
	 * Edit a Git hook in a repository.
	 *
	 * @param	string  $owner			The owner name.
	 * @param	string  $repo			The repository name.
	 * @param	string  $hookId 		The Git hook ID.
	 * @param	array   $hookOptions	The flat hook options, containing the content script string.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function edit(
		string $owner,
		string $repo,
		string $hookId,
		array $hookOptions
	): ?object
	{
		// Build the request path.
		$path = '/repos/' . $this->segment($owner) . '/' . $this->segment($repo) . '/hooks/git/' . $this->segment((string) $hookId);

		// Set the hook data.
		$data = (object) $hookOptions;

		// Send the PATCH request.
		return $this->response->get(
			$this->http->patch(
				$this->uri->get($path), $this->encode($data)
			)
		);
	}

}

