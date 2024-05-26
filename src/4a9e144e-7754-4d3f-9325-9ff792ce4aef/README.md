```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Applications (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\User**
> extends: **Api**
```uml
@startuml
class Applications  #Gold {
  + get(int $page = 1, int $limit = 10) : ?array
  + id(int $id) : ?object
  + create(string $appName, array $redirectUris, ...) : ?object
  + delete(int $id) : string
  + update(int $appId, string $appName, ...) : ?object
}

note right of Applications::get
  List the authenticated user's oauth2 applications.

  since: 3.2.0
  return: ?array
end note

note right of Applications::id
  Get an OAuth2 application by ID.

  since: 3.2.0
  return: ?object
end note

note right of Applications::create
  Creates a new OAuth2 application.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $appName
    array $redirectUris
    bool $confidentialClient = true
end note

note right of Applications::delete
  Delete an OAuth2 application by ID.

  since: 3.2.0
  return: string
end note

note right of Applications::update
  Update an OAuth2 application by ID, this includes regenerating the client secret.

  since: 3.2.0
  return: ?object
  
  arguments:
    int $appId
    string $appName
    array $redirectUris
    bool $confidentialClient = true
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

