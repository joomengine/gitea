```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Labels (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**
```uml
@startuml
class Labels  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?array
  + replace(string $owner, string $repo, ...) : object
  + add(string $owner, string $repo, ...) : ?array
  + remove(string $owner, string $repo, ...) : string
  + clear(string $owner, string $repo, ...) : string
}

note right of Labels::list
  Get all of a repository's labels.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Labels::get
  Get an issue's labels.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Labels::replace
  Replace an issue's labels.

  since: 3.2.0
  return: object
  
  arguments:
    string $owner
    string $repo
    int $index
    array $labels
end note

note right of Labels::add
  Add a label to an issue.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    array $labels
end note

note right of Labels::remove
  Remove a label from an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    int $labelId
end note

note right of Labels::clear
  Remove all labels from an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
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

