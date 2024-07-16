```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Members (Details)
> namespace: **VDM\Joomla\Gitea\Organization\Teams**
> extends: **Api**

```uml
@startuml
class Members  #Gold {
  + list(int $teamId, int $pageNumber = 1, ...) : ?array
  + get(int $id, string $username) : ?object
  + add(int $id, string $username) : string
  + remove(int $id, string $username) : string
}

note right of Members::list
  List a team's members.

  since: 3.2.0
  return: ?array
  
  arguments:
    int $teamId
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Members::get
  List a particular member of the team.

  since: 3.2.0
  return: ?object
end note

note right of Members::add
  Add a team member.

  since: 3.2.0
  return: string
end note

note right of Members::remove
  Remove a team member.

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
Super---d9fa532a_dbe8_445f_93dc_398a3cf01c1e---Power
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

