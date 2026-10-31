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

namespace VDM\Joomla\Gitea\Utilities;


use Joomla\Http\Http as JoomlaHttp;
use Joomla\Http\TransportInterface;
use Joomla\Http\Transport\Curl;
use Joomla\Http\Transport\Stream;
use Joomla\Registry\Registry;


/**
 * The Gitea Http
 * 
 * @since 3.2.0
 */
final class Http extends JoomlaHttp
{
	/**
	 * The token
	 *
	 * @var    string|null
	 * @since 3.2.0
	 */
	protected ?string $_token_ = null; // to avoid collisions (but allow swapping)

	/**
	 * Constructor.
	 *
	 * @param   string|null          $token      The Gitea API token.
	 * @param   TransportInterface|null  $transport  An optional Joomla transport.
	 *
	 * @since   3.2.0
	 * @throws  \InvalidArgumentException
	 **/
	public function __construct(?string $token = null, ?TransportInterface $transport = null)
	{
		// setup config
		$config = [
			'userAgent' => 'JoomlaGitea/3.0',
			'follow_location' => false,
			'headers' => [
				'Content-Type' => 'application/json'
			]
		];

		$options = new Registry($config);

		// Use transports that honor redirect policy and share the mutable options.
		// Joomla's Socket transport follows redirects unconditionally, including
		// authorization headers, so it is not a safe fallback for an API token.
		if ($transport === null)
		{
			if (Curl::isSupported())
			{
				$transport = new Curl($options);
			}
			elseif (Stream::isSupported())
			{
				$transport = new Stream($options);
			}
			else
			{
				throw new \RuntimeException('Gitea HTTP requires cURL or URL-aware streams, or an explicitly configured transport.');
			}
		}

		parent::__construct($options, $transport);
		$this->setToken($token ?? '');
	}

	/**
	 * Change the Token.
	 *
	 * @param   string     $token     The Gitea API token.
	 *
	 * @since   3.2.0
	 **/
	public function setToken(string $token): void
	{
		// get the current headers
		$headers = (array) $this->getOption('headers', [
				'Content-Type' => 'application/json'
			]
		);

		// Header names are case-insensitive. Remove every old authorization value.
		foreach (array_keys($headers) as $name)
		{
			if (strcasecmp((string) $name, 'Authorization') === 0)
			{
				unset($headers[$name]);
			}
		}

		$this->_token_ = $token === '' ? null : $token;

		if ($this->_token_ !== null)
		{
			$headers['Authorization'] = 'token ' . $this->_token_;
		}

		$this->setOption('headers', $headers);
	}

	/**
	 * Get the Token.
	 *
	 * @return  string|null
	 * @since   3.2.0
	 **/
	public function getToken(): ?string
	{
		return $this->_token_ ?? null;
	}
}

