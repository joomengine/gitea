```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VDM\Joomla\Gitea\Organization**
> extends: **Api**

```uml
@startuml
class Repository  #Gold {
  + list(string $org, int $pageNumber = 1, ...) : ?array
  + create(string $org, string $repoName, ...) : ?object
}

note right of Repository::list
  List an organization's repos.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $org
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Repository::create
  Create a repository in an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    string $repoName
    ?string $description = null
    ?bool $autoInit = null
    ?string $defaultBranch = null
    ?string $gitignores = null
    ?string $issueLabels = null
    ?string $license = null
    ?bool $private = null
    ?string $readme = null
    ?bool $template = null
    ?string $trustModel = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---aeb42050_90e1_4169_907a_fa6cde20caa4---Power
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

