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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f4d00907_c94a_49b7_8727_d64c1fa74cf5---Power
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

