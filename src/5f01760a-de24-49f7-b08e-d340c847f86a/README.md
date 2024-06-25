```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Statuses (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Statuses  #Gold {
  + get(string $ownerName, string $repoName, ...) : ?array
  + create(string $ownerName, string $repoName, ...) : ?object
}

note right of Statuses::get
  Get a commit's statuses.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $ownerName
    string $repoName
    string $commitSha
    string $sort = 'recentupdate'
    string $state = 'pending'
    int $page = 1
    int $limit = 10
end note

note right of Statuses::create
  Create a commit status.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    string $commitSha
    string $state
    ?string $context = null
    ?string $statusDescription = null
    ?string $targetUrl = null
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

