```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Times (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**

```uml
@startuml
class Times  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + add(string $owner, string $repo, ...) : ?object
  + reset(string $owner, string $repo, ...) : string
  + delete(string $owner, string $repo, ...) : string
}

note right of Times::list
  List an issue's tracked times.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    string $user = null
    string $since = null
    string $before = null
    int $page = null
    int $limit = null
end note

note right of Times::add
  Add tracked time to an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $time
    string $created = null
    string $userName = null
end note

note right of Times::reset
  Reset a tracked time of an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Times::delete
  Delete specific tracked time.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---d273c34e_88c1_438b_98c0_801996f58c29---Power
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

