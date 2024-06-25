```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Transfer (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Transfer  #Gold {
  + create(string $owner, string $repo, ...) : ?object
  + accept(string $owner, string $repo) : ?object
  + reject(string $owner, string $repo) : ?object
}

note right of Transfer::create
  Transfer a repo ownership.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $newOwner
    ?array $teamIDs = null
end note

note right of Transfer::accept
  Accept a repo transfer.

  since: 3.2.0
  return: ?object
end note

note right of Transfer::reject
  Reject a repo transfer.

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

