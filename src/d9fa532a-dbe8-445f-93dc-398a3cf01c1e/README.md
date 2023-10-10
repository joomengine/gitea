```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Members (Details)
> namespace: **VDM\Joomla\Gitea\Organization\Teams**
> extends: **Api**
```uml
@startuml
class Members  #Gold {
  + list(int $teamId, int $pageNumber = 1, ...) : ?array
  + get(int $id, string $username) : ?object
  + add(int $id, string $username) : string
  + remove(int $id, string $username) : string
}

note right of Members::list
  List a team's members.

  since: 3.2.0
  return: ?array
  
  arguments:
    int $teamId
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Members::get
  List a particular member of the team.

  since: 3.2.0
  return: ?object
end note

note right of Members::add
  Add a team member.

  since: 3.2.0
  return: string
end note

note right of Members::remove
  Remove a team member.

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

