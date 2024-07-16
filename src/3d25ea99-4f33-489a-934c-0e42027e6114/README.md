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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---3d25ea99_4f33_489a_934c_0e42027e6114---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

