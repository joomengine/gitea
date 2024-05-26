```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Issue (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea**
> extends: **Api**
```uml
@startuml
class Issue  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + create(string $owner, string $repo, ...) : ?object
  + search(string $q, int $page = 1, ...) : ?array
  + edit(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Issue::list
  List a repository's issues.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    string $state = 'open'
    int $page = 1
    int $limit = 10
    ?string $labels = null
    ?string $q = null
    ?string $type = null
    ?string $milestones = null
    ?string $since = null
    ?string $before = null
    ?string $createdBy = null
    ?string $assignedBy = null
    ?string $mentionedBy = null
end note

note right of Issue::get
  Get an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Issue::create
  Create an issue. If using deadline only the date will be taken into account, and time of day ignored.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $issueTitle
    ?array $assignees = null
    ?string $issueBody = null
    ?bool $closed = null
    ?string $dueDate = null
    ?array $labelIds = null
    ?int $milestoneId = null
end note

note right of Issue::search
  Search for issues across the repositories that the user has access to.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $q
    int $page = 1
    int $limit = 10
    ?string $state = 'open'
    ?string $labels = null
    ?string $milestones = null
    ?int $priorityRepoId = null
    ?string $type = null
    ?string $since = null
    ?string $before = null
    ?bool $assigned = null
    ?bool $created = null
    ?bool $mentioned = null
    ?bool $reviewRequested = null
    ?string $owner = null
    ?string $team = null
end note

note right of Issue::edit
  Edit an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $assignee = null
    ?array $assignees = null
    ?string $body = null
    ?string $dueDate = null
    ?int $milestone = null
    ?string $ref = null
    ?string $state = null
    ?string $title = null
    ?bool $unsetDueDate = null
end note

note right of Issue::delete
  Delete an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

