```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Utilities (Details)
> namespace: **VDM\Joomla\Gitea\Service**
> extends: ****
```uml
@startuml
class Utilities  #Gold {
  + register(Container $container) : void
  + getUri(Container $container) : Uri
  + getResponse(Container $container) : Response
}

note right of Utilities::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Utilities::getUri
  Get the Uri class

  since: 3.2.0
  return: Uri
end note

note right of Utilities::getResponse
  Get the Response class

  since: 3.2.0
  return: Response
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

