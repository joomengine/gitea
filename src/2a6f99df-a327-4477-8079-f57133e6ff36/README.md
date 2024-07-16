```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class PublicMembers (Details)
> namespace: **VDM\Joomla\Gitea\Organization**
> extends: **Api**

```uml
@startuml
class PublicMembers  #Gold {
  + list(string $orgName, int $page = 1, ...) : ?array
  + check(string $org, string $username) : ?string
  + publicize(string $org, string $username) : ?string
  + conceal(string $org, string $username) : string
}

note right of PublicMembers::list
  List an organization's public members.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $orgName
    int $page = 1
    int $limit = 10
end note

note right of PublicMembers::check
  Check if a user is a public member of an organization.

  since: 3.2.0
  return: ?string
end note

note right of PublicMembers::publicize
  Publicize a user's membership.

  since: 3.2.0
  return: ?string
end note

note right of PublicMembers::conceal
  Conceal a user's membership.

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
Super---2a6f99df_a327_4477_8079_f57133e6ff36---Power
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

