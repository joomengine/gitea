```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VDM\Joomla\Gitea\Notifications**
> extends: **Api**

```uml
@startuml
class Repository  #Gold {
  + get(string $owner, string $repo, ...) : ?array
  + update(string $owner, string $repo, ...) : ?array
}

note right of Repository::get
  List user's notification threads on a specific repo.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    bool $all = false
    array $statusTypes = []
    array $subjectTypes = []
    string $since = ''
    string $before = ''
    int $page = 1
    int $limit = 10
end note

note right of Repository::update
  Mark notification threads as read, pinned, or unread on a specific repo.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?bool $all = null
    ?array $statusTypes = null
    ?string $toStatus = null
    ?string $lastReadAt = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---3a4ce297_4536_45be_b3cc_d93474e55528---Power
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

