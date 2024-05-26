```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Notifications**
> extends: **Api**
```uml
@startuml
class Repository  #Gold {
  + get(string $owner, string $repo, ...) : ?array
  + update(string $owner, string $repo, ...) : ?array
}

note right of Repository::get
  List user's notification threads on a specific repo.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    bool $all = false
    array $statusTypes = []
    array $subjectTypes = []
    string $since = ''
    string $before = ''
    int $page = 1
    int $limit = 10
end note

note right of Repository::update
  Mark notification threads as read, pinned, or unread on a specific repo.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?bool $all = null
    ?array $statusTypes = null
    ?string $toStatus = null
    ?string $lastReadAt = null
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

