```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Watchers (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Watchers  #Gold {
  + list(string $ownerName, string $repoName, ...) : ?array
  + check(string $ownerName, string $repoName) : ?object
  + watch(string $ownerName, string $repoName, ...) : ?object
  + unwatch(string $ownerName, string $repoName) : string
}

note right of Watchers::list
  List a repo's watchers.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $ownerName
    string $repoName
    int $page = 1
    int $limit = 10
end note

note right of Watchers::check
  Check if the current user is watching a repo.

  since: 3.2.0
  return: ?object
end note

note right of Watchers::watch
  Watch a repo.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    bool $subscribed = true
    bool $ignored = false
end note

note right of Watchers::unwatch
  Unwatch a repo.

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---93d704d3_aed8_4ee5_a25e_e7fbfb23b5c7---Power
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

