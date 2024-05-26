```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Watchers (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Watchers  #Gold {
  + list(string $ownerName, string $repoName, ...) : ?array
  + check(string $ownerName, string $repoName) : ?object
  + watch(string $ownerName, string $repoName, ...) : ?object
  + unwatch(string $ownerName, string $repoName) : string
}

note right of Watchers::list
  List a repo's watchers.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $ownerName
    string $repoName
    int $page = 1
    int $limit = 10
end note

note right of Watchers::check
  Check if the current user is watching a repo.

  since: 3.2.0
  return: ?object
end note

note right of Watchers::watch
  Watch a repo.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    bool $subscribed = true
    bool $ignored = false
end note

note right of Watchers::unwatch
  Unwatch a repo.

  since: 3.2.0
  return: string
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

