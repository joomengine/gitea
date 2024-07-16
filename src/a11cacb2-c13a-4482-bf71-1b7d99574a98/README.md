```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Git (Details)
> namespace: **VDM\Joomla\Gitea\Repository\Hooks**
> extends: **Api**

```uml
@startuml
class Git  #Gold {
  + list(string $ownerName, string $repoName) : ?array
  + get(string $ownerName, string $repoName, ...) : ?object
  + delete(string $ownerName, string $repositoryName, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
}

note right of Git::list
  List the Git hooks in a repository.

  since: 3.2.0
  return: ?array
end note

note right of Git::get
  Get a Git hook.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    int $hookId
end note

note right of Git::delete
  Delete a Git hook in a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repositoryName
    string $hookId
end note

note right of Git::edit
  Edit a Git hook in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $hookId
    array $hookOptions
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---a11cacb2_c13a_4482_bf71_1b7d99574a98---Power
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

