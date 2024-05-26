```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class PublicMembers (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Organization**
> extends: **Api**
```uml
@startuml
class PublicMembers  #Gold {
  + list(string $orgName, int $page = 1, ...) : ?array
  + check(string $org, string $username) : ?string
  + publicize(string $org, string $username) : ?string
  + conceal(string $org, string $username) : string
}

note right of PublicMembers::list
  List an organization's public members.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $orgName
    int $page = 1
    int $limit = 10
end note

note right of PublicMembers::check
  Check if a user is a public member of an organization.

  since: 3.2.0
  return: ?string
end note

note right of PublicMembers::publicize
  Publicize a user's membership.

  since: 3.2.0
  return: ?string
end note

note right of PublicMembers::conceal
  Conceal a user's membership.

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

