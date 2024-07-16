```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Milestones (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**

```uml
@startuml
class Milestones  #Gold {
  + create(string $owner, string $repo, ...) : ?object
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + update(string $owner, string $repo, ...) : ?object
}

note right of Milestones::create
  Create a milestone.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $title
    ?string $description = null
    ?string $dueOn = null
    ?string $state = 'open'
end note

note right of Milestones::list
  Get all of a repository's opened milestones.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?string $state = 'open'
    ?string $name = null
    ?int $page = null
    ?int $limit = null
end note

note right of Milestones::get
  Get a milestone.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $milestoneId
end note

note right of Milestones::delete
  Delete a milestone.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $milestoneId
end note

note right of Milestones::update
  Update a milestone.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $milestoneId
    string $title = null
    string $description = null
    string $dueOn = null
    string $state = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f428beab_10f4_4c0d_bb9e_8c797ed7a7c9---Power
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

