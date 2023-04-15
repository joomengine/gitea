```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Organization (Details)
> namespace: **VDM\Joomla\Gitea**
```uml
@startuml
class Organization  #Gold {
  + create(string $login, string $fullName, ...) : ?object
  + get(string $org) : ?object
  + list(int $page = 1, int $limit = 10) : ?array
  + delete(string $org) : string
  + edit(string $org, ?string $fullName = null, ...) : ?object
}

note right of Organization::create
  Create an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $login
    string $fullName
    string $email
    string $description = ''
    bool $repoAdmin = false
    bool $teamAdmin = false
end note

note right of Organization::get
  Get an organization.

  since: 3.2.0
  return: ?object
end note

note right of Organization::list
  Get a list of organizations.

  since: 3.2.0
  return: ?array
end note

note right of Organization::delete
  Delete an organization.

  since: 3.2.0
  return: string
end note

note right of Organization::edit
  Edit an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    ?string $fullName = null
    ?string $email = null
    ?string $location = null
    ?string $description = null
    ?bool $repoAdmin = null
    ?string $visibility = null
    ?string $website = null
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

