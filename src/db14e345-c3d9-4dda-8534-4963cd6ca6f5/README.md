```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Thread (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Notifications**
> extends: **Api**
```uml
@startuml
class Thread  #Gold {
  + get(int $id) : ?object
  + mark(int $id, ?string $lastReadAt = null, ...) : ?object
}

note right of Thread::get
  Get notification thread by ID.

  since: 3.2.0
  return: ?object
end note

note right of Thread::mark
  Mark notification threads as read, pinned, or unread by ID.

  since: 3.2.0
  return: ?object
  
  arguments:
    int $id
    ?string $lastReadAt = null
    ?bool $all = null
    ?array $statusTypes = null
    ?string $toStatus = null
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

