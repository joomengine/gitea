```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Comments (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**

```uml
@startuml
class Comments  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
  + add(string $owner, string $repo, ...) : ?object
}

note right of Comments::list
  List all comments on an issue.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    int $page = 1
    int $limit = 10
    ?string $since = null
    ?string $before = null
end note

note right of Comments::get
  Get a comment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $commentId
end note

note right of Comments::delete
  Delete a comment.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $commentId
end note

note right of Comments::edit
  Edit a comment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $commentId
    string $commentBody
end note

note right of Comments::add
  Add a comment to an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $issueIndex
    string $commentBody
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---22d65693_917d_47c7_ba5c_8e1f354dc713---Power
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

