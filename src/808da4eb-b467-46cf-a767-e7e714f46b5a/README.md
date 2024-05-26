```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Package (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Service**
```uml
@startuml
class Package  #Gold {
  + register(Container $container) : void
  + getPackage(Container $container) : Pack
  + getFiles(Container $container) : Files
  + getOwner(Container $container) : Owner
}

note right of Package::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Package::getPackage
  Get the Package class

  since: 3.2.0
  return: Pack
end note

note right of Package::getFiles
  Get the Files class

  since: 3.2.0
  return: Files
end note

note right of Package::getOwner
  Get the Owner class

  since: 3.2.0
  return: Owner
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

