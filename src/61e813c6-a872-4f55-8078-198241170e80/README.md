```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Uri (Details)
> namespace: **VDM\Joomla\Gitea\Utilities**
```uml
@startuml
class Uri << (F,LightGreen) >> #RoyalBlue {
  - string $endpoint
  - string $version
  - string $url
  + __construct(string $url = 'https://git.vdm.dev', string $endpoint = 'api', ...)
  + get(string $path) : JoomlaUri
  + api() : string
  + setUrl(string $url) : void
  + getUrl() : ?string
  - setEndpoint(string $endpoint) : void
  - setVersion(string $version) : void
}

note right of Uri::__construct
  Constructor
example: https://git.vdm.dev

  since: 3.2.0
  
  arguments:
    string $url = 'https://git.vdm.dev'
    string $endpoint = 'api'
    string $version = 'v1'
end note

note right of Uri::get
  Method to build and return a full request URL for the request.  This method will
add appropriate pagination details if necessary and also prepend the API url
to have a complete URL for the request.

  since: 3.2.0
  return: JoomlaUri
end note

note right of Uri::api
  Get the full API URL

  since: 3.2.0
  return: string
end note

note right of Uri::setUrl
  Set the URL of the API
example: https://git.vdm.dev

  since: 3.2.0
  return: void
end note

note right of Uri::getUrl
  Get the URL of the API

  since: 3.2.0
  return: ?string
end note

note right of Uri::setEndpoint
  Set the endpoint of the API

  since: 3.2.0
  return: void
end note

note right of Uri::setVersion
  Set the version of the API

  since: 3.2.0
  return: void
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

