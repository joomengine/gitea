```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Members (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Organization**
> extends: **Api**
```uml
@startuml
class Members  #Gold {
  + list(string $orgName, int $page = 1, ...) : ?array
  + check(string $org, string $username) : string
  + remove(string $org, string $username) : string
}

note right of Members::list
  Get a list of members of an organization.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $orgName
    int $page = 1
    int $limit = 10
end note

note right of Members::check
  Check if a user is a member of an organization.

  since: 3.2.0
  return: string
end note

note right of Members::remove
  Remove a member from an organization.

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

