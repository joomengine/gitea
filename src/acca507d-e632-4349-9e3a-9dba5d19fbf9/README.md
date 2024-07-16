```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Subscriptions (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**

```uml
@startuml
class Subscriptions  #Gold {
  + get(string $owner, string $repo, ...) : ?object
  + check(string $owner, string $repo, ...) : ?object
  + subscribe(string $owner, string $repo, ...) : string
  + unsubscribe(string $owner, string $repo, ...) : string
}

note right of Subscriptions::get
  Get users who subscribed on an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    ?int $page = null
    ?int $limit = null
end note

note right of Subscriptions::check
  Check if user is subscribed to an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Subscriptions::subscribe
  Subscribe user to issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    string $user
end note

note right of Subscriptions::unsubscribe
  Unsubscribe user from issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    string $user
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---acca507d_e632_4349_9e3a_9dba5d19fbf9---Power
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

