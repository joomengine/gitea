```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Notifications (Details)
> namespace: **VDM\Joomla\Gitea**
> extends: **Api**

```uml
@startuml
class Notifications  #Gold {
  + list(?bool $all = null, ?array $statusTypes = null, ...) : ?array
  + update(?string $lastReadAt = null, ?bool $all = null, ...) : ?array
  + check() : ?object
}

note right of Notifications::list
  List user's notification threads.

  since: 3.2.0
  return: ?array
  
  arguments:
    ?bool $all = null
    ?array $statusTypes = null
    ?array $subjectType = null
    ?string $since = null
    ?string $before = null
    int $page = 1
    int $limit = 10
end note

note right of Notifications::update
  Mark notification threads as read, pinned, or unread.

  since: 3.2.0
  return: ?array
  
  arguments:
    ?string $lastReadAt = null
    ?bool $all = null
    ?array $statusTypes = null
    ?string $toStatus = null
end note

note right of Notifications::check
  Check if unread notifications exist.

  since: 3.2.0
  return: ?object
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---c8cbc9bd_ee91_403a_8633_0e8b59619a49---Power
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

