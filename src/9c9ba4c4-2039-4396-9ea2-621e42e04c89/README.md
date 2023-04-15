```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Labels (Details)
> namespace: **VDM\Joomla\Gitea\Organization**
```uml
@startuml
class Labels  #Gold {
  + list(string $orgName, int $pageNum = 1, ...) : ?array
  + create(string $org, string $name, ...) : ?object
  + get(string $org, int $id) : ?object
  + delete(string $org, int $id) : string
  + update(string $org, int $id, ...) : ?object
}

note right of Labels::list
  List an organization's labels.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $orgName
    int $pageNum = 1
    int $pageSize = 10
end note

note right of Labels::create
  Create a label for an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    string $name
    string $color
    string $description = ''
end note

note right of Labels::get
  Get a single label for an organization.

  since: 3.2.0
  return: ?object
end note

note right of Labels::delete
  Delete a label for an organization.

  since: 3.2.0
  return: string
end note

note right of Labels::update
  Update a label for an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    int $id
    string $name = ''
    string $color = ''
    string $description = ''
end note
 
@enduml
```

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

