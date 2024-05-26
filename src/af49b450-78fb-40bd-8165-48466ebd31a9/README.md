```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Tokens (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\User**
> extends: **Api**
```uml
@startuml
class Tokens  #Gold {
  + list(string $username, ?int $page = null, ...) : ?array
  + create(string $username, string $name) : ?object
  + delete(string $username, string $token) : string
}

note right of Tokens::list
  List the authenticated user's access tokens.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $username
    ?int $page = null
    ?int $limit = null
end note

note right of Tokens::create
  Create an access token for a user.

  since: 3.2.0
  return: ?object
end note

note right of Tokens::delete
  Delete an access token for a user.

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

