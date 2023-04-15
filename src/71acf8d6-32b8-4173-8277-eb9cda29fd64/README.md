```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Gitea (Details)
> namespace: **VDM\Joomla\Componentbuilder\Service**
```uml
@startuml
class Gitea  #Gold {
  + register(Container $container) : void
  + getUri(Container $container) : Uri
  + getHttp(Container $container) : Http
}

note right of Gitea::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Gitea::getUri
  Get the Dynamic Uri class

  since: 3.2.0
  return: Uri
end note

note right of Gitea::getHttp
  Get the Http class

  since: 3.2.0
  return: Http
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

