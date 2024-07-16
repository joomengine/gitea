```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Miscellaneous (Details)
> namespace: **VDM\Joomla\Gitea\Service**

```uml
@startuml
class Miscellaneous  #Gold {
  + register(Container $container) : void
  + getActivitypub(Container $container) : Activitypub
  + getGpg(Container $container) : Gpg
  + getMarkdown(Container $container) : Markdown
  + getNodeInfo(Container $container) : NodeInfo
  + getVersion(Container $container) : Version
}

note right of Miscellaneous::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Miscellaneous::getActivitypub
  Get the Activitypub class

  since: 3.2.0
  return: Activitypub
end note

note right of Miscellaneous::getGpg
  Get the Gpg class

  since: 3.2.0
  return: Gpg
end note

note right of Miscellaneous::getMarkdown
  Get the Markdown class

  since: 3.2.0
  return: Markdown
end note

note right of Miscellaneous::getNodeInfo
  Get the NodeInfo class

  since: 3.2.0
  return: NodeInfo
end note

note right of Miscellaneous::getVersion
  Get the Version class

  since: 3.2.0
  return: Version
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---012af7d0_3436_4cae_b856_be49bdc39a3e---Power
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

