```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VDM\Joomla\Gitea\Organization\Teams**
> extends: **Api**

```uml
@startuml
class Repository  #Gold {
  + list(int $teamId, int $pageNumber = 1, ...) : ?array
  + get(int $teamId, string $organization, ...) : ?object
  + add(int $id, string $org, ...) : string
  + remove(int $id, string $org, ...) : string
}

note right of Repository::list
  List a team's repos.

  since: 3.2.0
  return: ?array
  
  arguments:
    int $teamId
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Repository::get
  List a particular repo of the team.

  since: 3.2.0
  return: ?object
  
  arguments:
    int $teamId
    string $organization
    string $repository
end note

note right of Repository::add
  Add a repository to a team.

  since: 3.2.0
  return: string
  
  arguments:
    int $id
    string $org
    string $repo
end note

note right of Repository::remove
  Remove a repository from a team.

  since: 3.2.0
  return: string
  
  arguments:
    int $id
    string $org
    string $repo
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---07fce5f7_eb13_4dda_8870_77c9ad32a7bf---Power
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

