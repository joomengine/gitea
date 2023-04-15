```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Organization (Details)
> namespace: **VDM\Joomla\Gitea\Service**
```uml
@startuml
class Organization  #Gold {
  + register(Container $container) : void
  + getOrganization(Container $container) : Org
  + getHooks(Container $container) : Hooks
  + getLabels(Container $container) : Labels
  + getMembers(Container $container) : Members
  + getPublicMembers(Container $container) : PublicMembers
  + getRepository(Container $container) : Repository
  + getTeams(Container $container) : Teams
  + getTeamsMembers(Container $container) : TeamsMembers
  + getTeamsRepository(Container $container) : TeamsRepository
  + getUser(Container $container) : User
}

note right of Organization::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Organization::getOrganization
  Get the Organization class

  since: 3.2.0
  return: Org
end note

note right of Organization::getHooks
  Get the Hooks class

  since: 3.2.0
  return: Hooks
end note

note left of Organization::getLabels
  Get the Labels class

  since: 3.2.0
  return: Labels
end note

note right of Organization::getMembers
  Get the Members class

  since: 3.2.0
  return: Members
end note

note left of Organization::getPublicMembers
  Get the Public Members class

  since: 3.2.0
  return: PublicMembers
end note

note right of Organization::getRepository
  Get the Repository class

  since: 3.2.0
  return: Repository
end note

note left of Organization::getTeams
  Get the Teams class

  since: 3.2.0
  return: Teams
end note

note right of Organization::getTeamsMembers
  Get the Teams Members class

  since: 3.2.0
  return: TeamsMembers
end note

note left of Organization::getTeamsRepository
  Get the Teams Repository class

  since: 3.2.0
  return: TeamsRepository
end note

note right of Organization::getUser
  Get the User class

  since: 3.2.0
  return: User
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

