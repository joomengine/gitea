```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Admin (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Service**
```uml
@startuml
class Admin  #Gold {
  + register(Container $container) : void
  + getCron(Container $container) : Cron
  + getOrganizations(Container $container) : Organizations
  + getUnadopted(Container $container) : Unadopted
  + getUsers(Container $container) : Users
  + getKeys(Container $container) : Keys
  + getOrganization(Container $container) : Organization
  + getRepository(Container $container) : Repository
}

note right of Admin::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Admin::getCron
  Get the Cron class

  since: 3.2.0
  return: Cron
end note

note right of Admin::getOrganizations
  Get the Organizations class

  since: 3.2.0
  return: Organizations
end note

note left of Admin::getUnadopted
  Get the Unadopted class

  since: 3.2.0
  return: Unadopted
end note

note right of Admin::getUsers
  Get the Users class

  since: 3.2.0
  return: Users
end note

note left of Admin::getKeys
  Get the Keys class

  since: 3.2.0
  return: Keys
end note

note right of Admin::getOrganization
  Get the Organization class

  since: 3.2.0
  return: Organization
end note

note left of Admin::getRepository
  Get the Repository class

  since: 3.2.0
  return: Repository
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

