```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Notifications (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea**
> extends: **Api**
```uml
@startuml
class Notifications  #Gold {
  + list(?bool $all = null, ?array $statusTypes = null, ...) : ?array
  + update(?string $lastReadAt = null, ?bool $all = null, ...) : ?array
  + check() : ?object
}

note right of Notifications::list
  List user's notification threads.

  since: 3.2.0
  return: ?array
  
  arguments:
    ?bool $all = null
    ?array $statusTypes = null
    ?array $subjectType = null
    ?string $since = null
    ?string $before = null
    int $page = 1
    int $limit = 10
end note

note right of Notifications::update
  Mark notification threads as read, pinned, or unread.

  since: 3.2.0
  return: ?array
  
  arguments:
    ?string $lastReadAt = null
    ?bool $all = null
    ?array $statusTypes = null
    ?string $toStatus = null
end note

note right of Notifications::check
  Check if unread notifications exist.

  since: 3.2.0
  return: ?object
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

