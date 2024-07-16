```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Teams (Details)
> namespace: **VDM\Joomla\Gitea\Organization**
> extends: **Api**

```uml
@startuml
class Teams  #Gold {
  + list(string $organization, int $pageNumber = 1, ...) : ?array
  + get(int $id) : ?object
  + create(string $organization, string $name, ...) : ?object
  + search(string $organization, string $keywords, ...) : ?object
  + delete(int $id) : string
  + edit(int $teamId, ?string $teamName = null, ...) : ?object
}

note right of Teams::list
  List an organization's teams.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $organization
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Teams::get
  Get a team.

  since: 3.2.0
  return: ?object
end note

note right of Teams::create
  Create a team.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $organization
    string $name
    string $description
    array $repoNames = []
    string $permission = 'read'
    array $units = []
    array $unitsMap = []
    bool $canCreateOrgRepo = null
    bool $includesAllRepositories = null
end note

note right of Teams::search
  Search for teams within an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $organization
    string $keywords
    bool $includeDesc = true
    int $page = 1
    int $limit = 10
end note

note right of Teams::delete
  Delete a team.

  since: 3.2.0
  return: string
end note

note right of Teams::edit
  Edit a team.

  since: 3.2.0
  return: ?object
  
  arguments:
    int $teamId
    ?string $teamName = null
    ?string $teamDescription = null
    ?string $teamPermission = null
    ?bool $canCreateOrgRepo = null
    ?bool $includesAllRepositories = null
    ?array $units = null
    ?array $unitsMap = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---9c886ee5_ff14_44c3_a3dd_6a30ebf32ca3---Power
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

