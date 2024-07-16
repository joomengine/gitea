```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Keys (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Keys  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + add(string $owner, string $repo, ...) : ?object
  + id(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Keys::list
  List a repository's keys.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?int $keyId = null
    ?string $fingerprint = null
    int $page = 1
    int $limit = 10
end note

note right of Keys::add
  Add a key to a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $key
    string $title
    bool $readOnly
end note

note right of Keys::id
  Get a repository's key by id.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
end note

note right of Keys::delete
  Delete a key from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $id
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---501fbf08_9f56_4aa0_96d7_5905b511be08---Power
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

