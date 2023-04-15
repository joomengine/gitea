```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Commits (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
```uml
@startuml
class Commits  #Gold {
  + getList(string $owner, string $repo, ...) : ?object
  + getCommit(string $owner, string $repo, ...) : ?object
  + status(string $owner, string $repo, ...) : ?object
  + statuses(string $owner, string $repo, ...) : ?array
  + diff(string $owner, string $repo, ...) : string
}

note right of Commits::getList
  Get a list of all commits from a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    ?string $sha = null
    ?string $path = null
    ?bool $stat = true
    ?int $page = 1
    ?int $limit = 10
end note

note right of Commits::getCommit
  Get a single commit from a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $sha
end note

note right of Commits::status
  Get a commit's combined status, by branch/tag/commit reference.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $ref
    int $page = 1
    int $limit = 10
end note

note right of Commits::statuses
  Get a commit's statuses, by branch/tag/commit reference.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    string $ref
    string $sort = null
    string $state = null
    int $page = 1
    int $limit = 10
end note

note right of Commits::diff
  Get a commit's diff or patch.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $sha
    string $diffType
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

