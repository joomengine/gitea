```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VDM\Joomla\Gitea\Organization\Teams**
> extends: **Api**
```uml
@startuml
class Repository  #Gold {
  + list(int $teamId, int $pageNumber = 1, ...) : ?array
  + get(int $teamId, string $organization, ...) : ?object
  + add(int $id, string $org, ...) : string
  + remove(int $id, string $org, ...) : string
}

note right of Repository::list
  List a team's repos.

  since: 3.2.0
  return: ?array
  
  arguments:
    int $teamId
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Repository::get
  List a particular repo of the team.

  since: 3.2.0
  return: ?object
  
  arguments:
    int $teamId
    string $organization
    string $repository
end note

note right of Repository::add
  Add a repository to a team.

  since: 3.2.0
  return: string
  
  arguments:
    int $id
    string $org
    string $repo
end note

note right of Repository::remove
  Remove a repository from a team.

  since: 3.2.0
  return: string
  
  arguments:
    int $id
    string $org
    string $repo
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

