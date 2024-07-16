```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Api (Details)
> namespace: **VDM\Joomla\Gitea\Abstraction**

```uml
@startuml
abstract Api  #Orange {
  # Http $http
  # Uri $uri
  # Response $response
  # ?string $url
  # ?string $token
  + __construct(Http $http, Uri $uri, ...)
  + load_(?string $url = null, ?string $token = null, ...) : void
  + reset_() : void
  + api() : string
}

note right of Api::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Http $http
    Uri $uri
    Response $response
end note

note right of Api::load_
  Load/Reload API.

  since: 3.2.0
  return: void
  
  arguments:
    ?string $url = null
    ?string $token = null
    bool $backup = true
end note

note right of Api::reset_
  Reset to previous toke, url it set

  since: 3.2.0
  return: void
end note

note right of Api::api
  Get the API url

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
Super---3d7af7a2_dabe_4111_b5fd_c5bfa8755469---Power
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

