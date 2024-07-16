```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Comment (Details)
> namespace: **VDM\Joomla\Gitea\Issue\Reactions**
> extends: **Api**

```uml
@startuml
class Comment  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + add(string $owner, string $repo, ...) : ?object
  + remove(string $owner, string $repo, ...) : string
}

note right of Comment::list
  Get a list of reactions from a comment of an issue.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $commentId
end note

note right of Comment::add
  Add a reaction to a comment of an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $commentId
    string $content
end note

note right of Comment::remove
  Remove a reaction from a comment of an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $commentId
    string $content
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---73b3ebfa_c52a_4a96_a8de_718ff0bbc155---Power
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

