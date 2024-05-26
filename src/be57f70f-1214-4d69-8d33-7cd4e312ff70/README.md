```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Notifications (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Service**
```uml
@startuml
class Notifications  #Gold {
  + register(Container $container) : void
  + getNotifications(Container $container) : Notifi
  + getRepository(Container $container) : Repository
  + getThread(Container $container) : Thread
}

note right of Notifications::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Notifications::getNotifications
  Get the Notifications class

  since: 3.2.0
  return: Notifi
end note

note right of Notifications::getRepository
  Get the Repository class

  since: 3.2.0
  return: Repository
end note

note right of Notifications::getThread
  Get the Thread class

  since: 3.2.0
  return: Thread
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

