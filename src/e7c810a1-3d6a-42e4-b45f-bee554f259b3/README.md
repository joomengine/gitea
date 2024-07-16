```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Users (Details)
> namespace: **VDM\Joomla\Gitea\Admin**
> extends: **Api**

```uml
@startuml
class Users  #Gold {
  + list(int $page = 1, int $limit = 10) : ?array
  + create(string $loginName, string $email, ...) : ?object
  + delete(string $username) : string
  + edit(string $username, string $loginName, ...) : ?object
}

note right of Users::list
  List all users.

  since: 3.2.0
  return: ?array
end note

note right of Users::create
  Create a user with extended options.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $loginName
    string $email
    string $password
    string $username
    ?string $fullName = null
    ?bool $mustChangePassword = null
    ?bool $restricted = null
    ?bool $sendNotify = null
    ?int $sourceId = null
    ?string $visibility = null
end note

note right of Users::delete
  Delete a user.

  since: 3.2.0
  return: string
end note

note right of Users::edit
  Edit an existing user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $username
    string $loginName
    int $sourceId
    bool $active = false
    bool $admin = false
    bool $allowCreateOrganization = false
    bool $allowGitHook = false
    bool $allowImportLocal = false
    string $description = ''
    string $email = ''
    string $fullName = ''
    string $location = ''
    int $maxRepoCreation
    bool $mustChangePassword = false
    string $password = ''
    bool $prohibitLogin = false
    bool $restricted = false
    string $visibility = ''
    string $website = ''
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---e7c810a1_3d6a_42e4_b45f_bee554f259b3---Power
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

