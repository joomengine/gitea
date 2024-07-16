```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Teams (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Teams  #Gold {
  + list(string $ownerOfRepo, string $nameOfRepo) : ?array
  + check(string $ownerOfRepo, string $nameOfRepo, ...) : ?object
  + add(string $ownerName, string $repoName, ...) : string
  + delete(string $ownerName, string $repoName, ...) : string
}

note right of Teams::list
  List a repository's teams.

  since: 3.2.0
  return: ?array
end note

note right of Teams::check
  Check if a team is assigned to a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerOfRepo
    string $nameOfRepo
    string $teamName
end note

note right of Teams::add
  Add a team to a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $teamName
end note

note right of Teams::delete
  Delete a team from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $teamName
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---c7b31fc2_892b_4235_beb2_3413e4432839---Power
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

