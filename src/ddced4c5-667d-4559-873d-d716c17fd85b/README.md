```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Admin (Details)
> namespace: **VDM\Joomla\Gitea\Service**

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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---ddced4c5_667d_4559_873d_d716c17fd85b---Power
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

