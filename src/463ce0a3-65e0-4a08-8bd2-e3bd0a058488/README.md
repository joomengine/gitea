```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Hooks (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Hooks  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + edit(string $owner, string $repo, ...) : ?object
  + test(string $owner, string $repo, ...) : string
}

note right of Hooks::list
  List the hooks in a repository.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Hooks::create
  Create a hook in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $type
    array $config
    bool $active = false
    ?array $events = null
    string $branchFilter = ''
end note

note right of Hooks::get
  Get a hook.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $hookId
end note

note right of Hooks::edit
  Edit a hook in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
    array $config
    array $events
    bool $active
end note

note right of Hooks::test
  Test a push webhook.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $hookId
    string $ref = ''
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---463ce0a3_65e0_4a08_8bd2_e3bd0a058488---Power
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

