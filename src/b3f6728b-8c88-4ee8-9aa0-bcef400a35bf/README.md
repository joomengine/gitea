```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class User (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Organization**
> extends: **Api**
```uml
@startuml
class User  #Gold {
  + list(int $pageNumber = 1, int $pageSize = 10) : ?array
  + get(string $username, int $pageNumber = 1, ...) : ?array
  + permissions(string $username, string $org) : ?object
}

note right of User::list
  List the current user's organizations.

  since: 3.2.0
  return: ?array
end note

note right of User::get
  List a user's organizations.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $username
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of User::permissions
  Get user permissions in an organization.

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

