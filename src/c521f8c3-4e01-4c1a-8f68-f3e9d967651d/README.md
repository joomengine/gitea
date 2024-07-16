```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Keys (Details)
> namespace: **VDM\Joomla\Gitea\User**
> extends: **Api**

```uml
@startuml
class Keys  #Gold {
  + create(string $title, string $key, ...) : ?object
  + list(?string $fingerprint = null, int $page = 1, ...) : ?array
  + get(int $id) : ?object
  + delete(int $id) : string
}

note right of Keys::create
  Create a public key for the authenticated user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $title
    string $key
    bool $readOnly = false
end note

note right of Keys::list
  List the authenticated user's public keys.

  since: 3.2.0
  return: ?array
  
  arguments:
    ?string $fingerprint = null
    int $page = 1
    int $limit = 10
end note

note right of Keys::get
  Get a public key for the authenticated user.

  since: 3.2.0
  return: ?object
end note

note right of Keys::delete
  Delete a public key for the authenticated user.

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
Super---c521f8c3_4e01_4c1a_8f68_f3e9d967651d---Power
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

