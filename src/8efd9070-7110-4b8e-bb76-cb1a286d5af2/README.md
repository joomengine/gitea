```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Organization (Details)
> namespace: **VDM\Joomla\Gitea**
> extends: **Api**

```uml
@startuml
class Organization  #Gold {
  + create(string $login, string $fullName, ...) : ?object
  + get(string $org) : ?object
  + list(int $page = 1, int $limit = 10) : ?array
  + delete(string $org) : string
  + edit(string $org, ?string $fullName = null, ...) : ?object
}

note right of Organization::create
  Create an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $login
    string $fullName
    string $email
    string $description = ''
    bool $repoAdmin = false
    bool $teamAdmin = false
end note

note right of Organization::get
  Get an organization.

  since: 3.2.0
  return: ?object
end note

note right of Organization::list
  Get a list of organizations.

  since: 3.2.0
  return: ?array
end note

note right of Organization::delete
  Delete an organization.

  since: 3.2.0
  return: string
end note

note right of Organization::edit
  Edit an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    ?string $fullName = null
    ?string $email = null
    ?string $location = null
    ?string $description = null
    ?bool $repoAdmin = null
    ?string $visibility = null
    ?string $website = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---8efd9070_7110_4b8e_bb76_cb1a286d5af2---Power
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

