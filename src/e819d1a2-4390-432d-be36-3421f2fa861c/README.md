```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Labels (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**

```uml
@startuml
class Labels  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?array
  + replace(string $owner, string $repo, ...) : object
  + add(string $owner, string $repo, ...) : ?array
  + remove(string $owner, string $repo, ...) : string
  + clear(string $owner, string $repo, ...) : string
}

note right of Labels::list
  Get all of a repository's labels.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Labels::get
  Get an issue's labels.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Labels::replace
  Replace an issue's labels.

  since: 3.2.0
  return: object
  
  arguments:
    string $owner
    string $repo
    int $index
    array $labels
end note

note right of Labels::add
  Add a label to an issue.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    array $labels
end note

note right of Labels::remove
  Remove a label from an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    int $labelId
end note

note right of Labels::clear
  Remove all labels from an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---e819d1a2_4390_432d_be36_3421f2fa861c---Power
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

