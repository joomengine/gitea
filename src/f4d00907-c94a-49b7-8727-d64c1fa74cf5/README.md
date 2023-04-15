```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Settings (Details)
> namespace: **VDM\Joomla\Gitea\Service**
```uml
@startuml
class Settings  #Gold {
  + register(Container $container) : void
  + getApi(Container $container) : Api
  + getAttachment(Container $container) : Attachment
  + getRepository(Container $container) : Repository
  + getUi(Container $container) : Ui
}

note right of Settings::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Settings::getApi
  Get the Api class

  since: 3.2.0
  return: Api
end note

note right of Settings::getAttachment
  Get the Attachment class

  since: 3.2.0
  return: Attachment
end note

note right of Settings::getRepository
  Get the Repository class

  since: 3.2.0
  return: Repository
end note

note right of Settings::getUi
  Get the Ui class

  since: 3.2.0
  return: Ui
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

