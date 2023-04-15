```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Times (Details)
> namespace: **VDM\Joomla\Gitea\User**
```uml
@startuml
class Times  #Gold {
  + list(int $page = 1, int $limit = 10, ...) : ?array
  + stopwatches(int $page = 1, int $limit = 10) : ?array
}

note right of Times::list
  List the current user's tracked times.

  since: 3.2.0
  return: ?array
  
  arguments:
    int $page = 1
    int $limit = 10
    ?string $since = null
    ?string $before = null
end note

note right of Times::stopwatches
  Get list of all existing stopwatches for the authenticated user.

  since: 3.2.0
  return: ?array
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

