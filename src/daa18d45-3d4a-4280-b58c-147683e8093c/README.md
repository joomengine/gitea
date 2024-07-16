```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Commits (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Commits  #Gold {
  + getList(string $owner, string $repo, ...) : ?object
  + getCommit(string $owner, string $repo, ...) : ?object
  + status(string $owner, string $repo, ...) : ?object
  + statuses(string $owner, string $repo, ...) : ?array
  + diff(string $owner, string $repo, ...) : string
}

note right of Commits::getList
  Get a list of all commits from a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    ?string $sha = null
    ?string $path = null
    ?bool $stat = true
    ?int $page = 1
    ?int $limit = 10
end note

note right of Commits::getCommit
  Get a single commit from a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $sha
end note

note right of Commits::status
  Get a commit's combined status, by branch/tag/commit reference.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $ref
    int $page = 1
    int $limit = 10
end note

note right of Commits::statuses
  Get a commit's statuses, by branch/tag/commit reference.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    string $ref
    string $sort = null
    string $state = null
    int $page = 1
    int $limit = 10
end note

note right of Commits::diff
  Get a commit's diff or patch.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $sha
    string $diffType
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---daa18d45_3d4a_4280_b58c_147683e8093c---Power
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

