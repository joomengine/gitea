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

namespace VDM\Joomla\Gitea\Repository;


use VDM\Joomla\Gitea\Abstraction\Api;


/**
 * The Gitea Repository Patch
 * 
 * @since 3.2.0
 */
class Patch extends Api
{
	/**
	 * Apply a diff patch to a repository.
	 *
	 * @param string $owner The owner of the repo.
	 * @param string $repo The name of the repo.
	 * @param array $option Flat ApplyDiffPatchFileOptions body. Required content is a base64-encoded diff;
	 *                      optional branch, new_branch, message, author, committer, dates, signoff and force_push.
	 *
	 * @return object|null
	 * @since 3.2.0
	 */
	public function applyDiffPatch(
		string $owner,
		string $repo,
		array $option
	): ?object
	{
		// Build the request path.
		$uriPath = '/repos/' . $this->segment($owner) . '/' . $this->segment($repo) . '/diffpatch';

		// Send the post request.
		return $this->response->get(
			$this->http->post(
				$this->uri->get($uriPath),
				$this->encode($option)
			)
		);
	}

}

