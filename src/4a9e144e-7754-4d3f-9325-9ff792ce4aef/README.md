```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Applications (Details)
> namespace: **VDM\Joomla\Gitea\User**
> extends: **Api**

```uml
@startuml
class Applications  #Gold {
  + get(int $page = 1, int $limit = 10) : ?array
  + id(int $id) : ?object
  + create(string $appName, array $redirectUris, ...) : ?object
  + delete(int $id) : string
  + update(int $appId, string $appName, ...) : ?object
}

note right of Applications::get
  List the authenticated user's oauth2 applications.

  since: 3.2.0
  return: ?array
end note

note right of Applications::id
  Get an OAuth2 application by ID.

  since: 3.2.0
  return: ?object
end note

note right of Applications::create
  Creates a new OAuth2 application.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $appName
    array $redirectUris
    bool $confidentialClient = true
end note

note right of Applications::delete
  Delete an OAuth2 application by ID.

  since: 3.2.0
  return: string
end note

note right of Applications::update
  Update an OAuth2 application by ID, this includes regenerating the client secret.

  since: 3.2.0
  return: ?object
  
  arguments:
    int $appId
    string $appName
    array $redirectUris
    bool $confidentialClient = true
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---4a9e144e_7754_4d3f_9325_9ff792ce4aef---Power
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

