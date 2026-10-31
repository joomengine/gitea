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
 * The Gitea Repository Archive
 * 
 * @since 3.2.0
 */
class Archive extends Api
{
	/**
	 * Get an archive of a repository.
	 *
	 * @param   string  $owner     The owner name.
	 * @param   string  $repo      The repository name.
	 * @param   string  $archive   The ref and archive format, e.g., "main.zip" or "v1.0.tar.gz".
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function get(
		string $owner,
		string $repo,
		string $archive
	): string
	{
		// Build the request path.
		$path = '/repos/' . $this->segment($owner) . '/' . $this->segment($repo) . '/archive/' . $this->segment($archive);

		// Set the required variables to the URI.
		$uri = $this->uri->get($path);

		// Send the get request.
		return $this->response->raw($this->http->get($uri), 200, '');
	}


}

