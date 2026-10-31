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
 * The Gitea Issue
 * 
 * @since 3.2.0
 */
class Issue extends Api
{
	/**
	 * List a repository's issues.
	 *
	 * @param   string      $owner         The owner name.
	 * @param   string      $repo          The repo name.
	 * @param   string      $state         The state of the issues to get, defaults to 'open'.
	 * @param   int         $page          The page to get, defaults to null.
	 * @param   int         $limit         The number of issues per page, defaults to null.
	 * @param   string|null $labels        Comma-separated list of labels, defaults to null.
	 * @param   string|null $q             The search string, defaults to null.
	 * @param   string|null $type          The type to filter by (issues/pulls), defaults to null.
	 * @param   string|null $milestones    Comma-separated list of milestone names or IDs, defaults to null.
	 * @param   string|null $since         Only show items updated after the given time, defaults to null.
	 * @param   string|null $before        Only show items updated before the given time, defaults to null.
	 * @param   string|null $createdBy     Only show items created by the given user, defaults to null.
	 * @param   string|null $assignedBy    Only show items assigned to the given user, defaults to null.
	 * @param   string|null $mentionedBy   Only show items where the given user is mentioned, defaults to null.
	 *
	 * @return  array|null
	 * @since   3.2.0
	 **/
	public function list(
		string $owner,
		string $repo,
		string $state = 'open',
		int $page = 1,
		int $limit = 10,
		?string $labels = null,
		?string $q = null,
		?string $type = null,
		?string $milestones = null,
		?string $since = null,
		?string $before = null,
		?string $createdBy = null,
		?string $assignedBy = null,
		?string $mentionedBy = null
	): ?array
	{
		// Build the request path.
		$owner = $this->segment($owner);
		$repo = $this->segment($repo);
		$path = "/repos/{$owner}/{$repo}/issues";

		// Build the URI.
		$uri = $this->uri->get($path);
		
		// Set the query parameters
		$uri->setVar('state', $state);
		$uri->setVar('page', $page);
		$uri->setVar('limit', $limit);
		$uri->setVar('labels', $labels);
		$uri->setVar('q', $q);
		$uri->setVar('type', $type);
		$uri->setVar('milestones', $milestones);
		$uri->setVar('since', $since);
		$uri->setVar('before', $before);
		$uri->setVar('created_by', $createdBy);
		$uri->setVar('assigned_by', $assignedBy);
		$uri->setVar('mentioned_by', $mentionedBy);

		// Send the get request.
		return $this->response->get(
			$this->http->get($uri)
		);
	}

	/**
	 * Get an issue.
	 *
	 * @param   string   $owner      The owner name.
	 * @param   string   $repo       The repo name.
	 * @param   int      $index      The issue index.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function get(string $owner, string $repo, int $index): ?object
	{
		// Build the request path.
		$owner = $this->segment($owner);
		$repo = $this->segment($repo);
		$path = "/repos/{$owner}/{$repo}/issues/{$index}";

		// Send the get request.
		return $this->response->get(
			$this->http->get(
				$this->uri->get($path)
			)
		);
	}

	/**
	 * Create an issue. If using deadline only the date will be taken into account, and time of day ignored.
	 *
	 * @param   string      $owner        The owner name.
	 * @param   string      $repo         The repo name.
	 * @param   string      $issueTitle   The issue title.
	 * @param   array|null  $assignees    The array of assignees, defaults to null.
	 * @param   string|null $issueBody    The issue body, defaults to null.
	 * @param   bool|null   $closed       If the issue is closed, defaults to null.
	 * @param   string|null $dueDate      The deadline for the issue, format: RFC 3339, defaults to null.
	 * @param   array|null  $labelIds     The array of label IDs to attach to the issue, defaults to null.
	 * @param   int|null    $milestoneId  The milestone ID, defaults to null.
	 * @param   array|null  $projects     Project IDs to assign.
	 * @param   string|null $ref          Git reference associated with the issue.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function create(
		string $owner,
		string $repo,
		string $issueTitle,
		?array $assignees = null,
		?string $issueBody = null,
		?bool $closed = null,
		?string $dueDate = null,
		?array $labelIds = null,
		?int $milestoneId = null,
		?array $projects = null,
		?string $ref = null
	): ?object
	{
		// Build the request path.
		$owner = $this->segment($owner);
		$repo = $this->segment($repo);
		$path = "/repos/{$owner}/{$repo}/issues";

		// Build the request data.
		$data = new \stdClass();
		$data->title = $issueTitle;
		$data->body = $issueBody;
		$data->assignees = $assignees;
		$data->closed = $closed;
		$data->due_date = $dueDate;
		$data->labels = $labelIds;
		$data->milestone = $milestoneId;

		if ($projects !== null)
		{
			$data->projects = $projects;
		}

		if ($ref !== null)
		{
			$data->ref = $ref;
		}

		// Send the post request.
		return $this->response->get(
			$this->http->post(
				$this->uri->get($path), $this->encode($data)
			), 201
		);
	}

	/**
	 * Search for issues across the repositories that the user has access to.
	 *
	 * @param   string            $q                  Search query.
	 * @param   int               $page               Page number (default 1).
	 * @param   int               $limit              Page size (default 10, max 50).
	 * @param   string|null       $state              Issue state (default open).
	 * @param   string|null       $labels             Label filter, comma-separated.
	 * @param   string|null       $milestones         Milestone filter, comma-separated.
	 * @param   int|null          $priorityRepoId     Legacy argument retained for compatibility; ignored by the current API.
	 * @param   string|null       $type               Filter by type (issues/pulls).
	 * @param   string|null       $since              Only show notifications updated after the given time (RFC 3339 format).
	 * @param   string|null       $before             Only show notifications updated before the given time (RFC 3339 format).
	 * @param   bool|null         $assigned           Filter assigned to you (default false).
	 * @param   bool|null         $created            Filter created by you (default false).
	 * @param   bool|null         $mentioned          Filter mentioning you (default false).
	 * @param   bool|null         $reviewRequested    Filter pulls requesting your review (default false).
	 * @param   string|null       $owner              Filter by owner.
	 * @param   string|null       $team               Filter by team (requires organization owner parameter).
	 * @param   bool|null         $reviewed           Filter pulls reviewed by you.
	 * @param   string|null       $createdBy          Filter by the issue author username.
	 *
	 * @return  array|null
	 * @since   3.2.0
	 **/
	public function search(
		string $q,
		int $page = 1,
		int $limit = 10,
		?string $state = 'open',
		?string $labels = null,
		?string $milestones = null,
		?int $priorityRepoId = null,
		?string $type = null,
		?string $since = null,
		?string $before = null,
		?bool $assigned = null,
		?bool $created = null,
		?bool $mentioned = null,
		?bool $reviewRequested = null,
		?string $owner = null,
		?string $team = null,
		?bool $reviewed = null,
		?string $createdBy = null
	): ?array
	{
		// Build the request path.
		$path = "/repos/issues/search";

		// Set the URL parameters.
		$uri = $this->uri->get($path);
		$uri->setVar('q', $q);
		$uri->setVar('page', $page);
		$uri->setVar('limit', $limit);
		$uri->setVar('state', $state);

		if ($labels !== null)
		{
			$uri->setVar('labels', $labels);
		}

		if ($milestones !== null)
		{
			$uri->setVar('milestones', $milestones);
		}

		if ($type !== null)
		{
			$uri->setVar('type', $type);
		}

		if ($since !== null)
		{
			$uri->setVar('since', $since);
		}

		if ($before !== null)
		{
			$uri->setVar('before', $before);
		}

		if ($assigned !== null)
		{
			$uri->setVar('assigned', $assigned);
		}

		if ($created !== null)
		{
			$uri->setVar('created', $created);
		}

		if ($mentioned !== null)
		{
			$uri->setVar('mentioned', $mentioned);
		}

		if ($reviewRequested !== null)
		{
			$uri->setVar('review_requested', $reviewRequested);
		}

		if ($owner !== null)
		{
			$uri->setVar('owner', $owner);
		}

		if ($team !== null)
		{
			$uri->setVar('team', $team);
		}

		if ($reviewed !== null)
		{
			$uri->setVar('reviewed', $reviewed);
		}

		if ($createdBy !== null)
		{
			$uri->setVar('created_by', $createdBy);
		}

		// Send the get request.
		return $this->response->get(
			$this->http->get($uri)
		);
	}

	/**
	 * Edit an issue.
	 *
	 * @param   string      $owner          The owner name.
	 * @param   string      $repo           The repo name.
	 * @param   int         $index          The issue index.
	 * @param   string|null $assignee       The assignee, defaults to null.
	 * @param   array|null  $assignees      The assignees, defaults to null.
	 * @param   string|null $body           The issue body, defaults to null.
	 * @param   string|null $dueDate        The due date, defaults to null.
	 * @param   int|null    $milestone      The milestone, defaults to null.
	 * @param   string|null $ref            The reference, defaults to null.
	 * @param   string|null $state          The issue state, defaults to null.
	 * @param   string|null $title          The issue title, defaults to null.
	 * @param   bool|null   $unsetDueDate   The flag to unset due date, defaults to null.
	 * @param   array|null  $projects       Project IDs replacing the current assignment; [] clears it.
	 * @param   int|null    $contentVersion Current content version for conflict detection.
	 *
	 * @return  object|null
	 * @since   3.2.0
	 **/
	public function edit(
		string $owner,
		string $repo,
		int $index,
		?string $assignee = null,
		?array $assignees = null,
		?string $body = null,
		?string $dueDate = null,
		?int $milestone = null,
		?string $ref = null,
		?string $state = null,
		?string $title = null,
		?bool $unsetDueDate = null,
		?array $projects = null,
		?int $contentVersion = null
	): ?object
	{
		// Build the request path.
		$owner = $this->segment($owner);
		$repo = $this->segment($repo);
		$path = "/repos/{$owner}/{$repo}/issues/{$index}";

		// Prepare the issue data.
		$editIssueData = new \stdClass();

		if ($assignee !== null)
		{
			$editIssueData->assignee = $assignee;
		}

		if ($assignees !== null)
		{
			$editIssueData->assignees = $assignees;
		}

		if ($body !== null)
		{
			$editIssueData->body = $body;
		}

		if ($dueDate !== null)
		{
			$editIssueData->due_date = $dueDate;
		}

		if ($unsetDueDate !== null)
		{
			$editIssueData->unset_due_date = $unsetDueDate;
		}

		if ($projects !== null)
		{
			$editIssueData->projects = $projects;
		}

		if ($contentVersion !== null)
		{
			$editIssueData->content_version = $contentVersion;
		}

		if ($milestone !== null)
		{
			$editIssueData->milestone = $milestone;
		}

		if ($ref !== null)
		{
			$editIssueData->ref = $ref;
		}

		if ($state !== null)
		{
			$editIssueData->state = $state;
		}

		if ($title !== null)
		{
			$editIssueData->title = $title;
		}

		// Send the patch request.
		return $this->response->get(
			$this->http->patch(
				$this->uri->get($path), $this->encode($editIssueData)
			), 201
		);
	}

	/**
	 * Delete an issue.
	 *
	 * @param   string   $owner      The owner name.
	 * @param   string   $repo       The repo name.
	 * @param   int      $index      The issue index.
	 *
	 * @return  string
	 * @since   3.2.0
	 **/
	public function delete(string $owner, string $repo, int $index): string
	{
		// Build the request path.
		$owner = $this->segment($owner);
		$repo = $this->segment($repo);
		$path = "/repos/{$owner}/{$repo}/issues/{$index}";

		// Send the delete request.
		return $this->response->get(
			$this->http->delete(
				$this->uri->get($path)
			), 204, 'success'
		);
	}

}

