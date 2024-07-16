```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Labels (Details)
> namespace: **VDM\Joomla\Gitea\Organization**
> extends: **Api**

```uml
@startuml
class Labels  #Gold {
  + list(string $orgName, int $pageNum = 1, ...) : ?array
  + create(string $org, string $name, ...) : ?object
  + get(string $org, int $id) : ?object
  + delete(string $org, int $id) : string
  + update(string $org, int $id, ...) : ?object
}

note right of Labels::list
  List an organization's labels.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $orgName
    int $pageNum = 1
    int $pageSize = 10
end note

note right of Labels::create
  Create a label for an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    string $name
    string $color
    string $description = ''
end note

note right of Labels::get
  Get a single label for an organization.

  since: 3.2.0
  return: ?object
end note

note right of Labels::delete
  Delete a label for an organization.

  since: 3.2.0
  return: string
end note

note right of Labels::update
  Update a label for an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    int $id
    string $name = ''
    string $color = ''
    string $description = ''
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---9c9ba4c4_2039_4396_9ea2_621e42e04c89---Power
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

