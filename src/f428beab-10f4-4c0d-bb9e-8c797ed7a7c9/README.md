```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Milestones (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Issue**
> extends: **Api**
```uml
@startuml
class Milestones  #Gold {
  + create(string $owner, string $repo, ...) : ?object
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + update(string $owner, string $repo, ...) : ?object
}

note right of Milestones::create
  Create a milestone.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $title
    ?string $description = null
    ?string $dueOn = null
    ?string $state = 'open'
end note

note right of Milestones::list
  Get all of a repository's opened milestones.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?string $state = 'open'
    ?string $name = null
    ?int $page = null
    ?int $limit = null
end note

note right of Milestones::get
  Get a milestone.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $milestoneId
end note

note right of Milestones::delete
  Delete a milestone.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $milestoneId
end note

note right of Milestones::update
  Update a milestone.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $milestoneId
    string $title = null
    string $description = null
    string $dueOn = null
    string $state = null
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

