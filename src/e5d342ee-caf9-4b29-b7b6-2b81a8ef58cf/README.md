```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Collaborator (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Collaborator  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + check(string $owner, string $repo, ...) : string
  + add(string $owner, string $repo, ...) : string
  + delete(string $owner, string $repo, ...) : string
  + permission(string $owner, string $repo, ...) : ?object
}

note right of Collaborator::list
  List a repository's collaborators.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Collaborator::check
  Check if a user is a collaborator of a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $collaborator
end note

note right of Collaborator::add
  Add a collaborator to a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $collaborator
    string $permission = null
end note

note right of Collaborator::delete
  Delete a collaborator from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $collaborator
end note

note right of Collaborator::permission
  Get repository permissions for a user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $collaborator
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---e5d342ee_caf9_4b29_b7b6_2b81a8ef58cf---Power
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

