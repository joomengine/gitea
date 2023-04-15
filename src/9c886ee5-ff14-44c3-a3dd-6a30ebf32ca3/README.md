```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Teams (Details)
> namespace: **VDM\Joomla\Gitea\Organization**
```uml
@startuml
class Teams  #Gold {
  + list(string $organization, int $pageNumber = 1, ...) : ?array
  + get(int $id) : ?object
  + create(string $organization, string $name, ...) : ?object
  + search(string $organization, string $keywords, ...) : ?object
  + delete(int $id) : string
  + edit(int $teamId, ?string $teamName = null, ...) : ?object
}

note right of Teams::list
  List an organization's teams.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $organization
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Teams::get
  Get a team.

  since: 3.2.0
  return: ?object
end note

note right of Teams::create
  Create a team.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $organization
    string $name
    string $description
    array $repoNames = []
    string $permission = 'read'
    array $units = []
    array $unitsMap = []
    bool $canCreateOrgRepo = null
    bool $includesAllRepositories = null
end note

note right of Teams::search
  Search for teams within an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $organization
    string $keywords
    bool $includeDesc = true
    int $page = 1
    int $limit = 10
end note

note right of Teams::delete
  Delete a team.

  since: 3.2.0
  return: string
end note

note right of Teams::edit
  Edit a team.

  since: 3.2.0
  return: ?object
  
  arguments:
    int $teamId
    ?string $teamName = null
    ?string $teamDescription = null
    ?string $teamPermission = null
    ?bool $canCreateOrgRepo = null
    ?bool $includesAllRepositories = null
    ?array $units = null
    ?array $unitsMap = null
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

