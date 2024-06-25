```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Times (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**
```uml
@startuml
class Times  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + add(string $owner, string $repo, ...) : ?object
  + reset(string $owner, string $repo, ...) : string
  + delete(string $owner, string $repo, ...) : string
}

note right of Times::list
  List an issue's tracked times.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    string $user = null
    string $since = null
    string $before = null
    int $page = null
    int $limit = null
end note

note right of Times::add
  Add tracked time to an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $time
    string $created = null
    string $userName = null
end note

note right of Times::reset
  Reset a tracked time of an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Times::delete
  Delete specific tracked time.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
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

