```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Api (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Abstraction**
```uml
@startuml
abstract Api  #Orange {
  # Http $http
  # Uri $uri
  # Response $response
  # ?string $url
  # ?string $token
  + __construct(Http $http, Uri $uri, ...)
  + load_(?string $url = null, ?string $token = null, ...) : void
  + reset_() : void
  + api() : string
}

note right of Api::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Http $http
    Uri $uri
    Response $response
end note

note right of Api::load_
  Load/Reload API.

  since: 3.2.0
  return: void
  
  arguments:
    ?string $url = null
    ?string $token = null
    bool $backup = true
end note

note right of Api::reset_
  Reset to previous toke, url it set

  since: 3.2.0
  return: void
end note

note right of Api::api
  Get the API url

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

