```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Labels (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea**
> extends: **Api**
```uml
@startuml
class Labels  #Gold {
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + update(string $owner, string $repo, ...) : ?object
}

note right of Labels::create
  Create a label.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $labelName
    string $labelColor
    string $labelDescription = ''
end note

note right of Labels::get
  Get a single label.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $id
end note

note right of Labels::delete
  Delete a label.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $id
end note

note right of Labels::update
  Update a label.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $id
    string $labelName = ''
    string $labelColor = ''
    string $labelDescription = ''
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

