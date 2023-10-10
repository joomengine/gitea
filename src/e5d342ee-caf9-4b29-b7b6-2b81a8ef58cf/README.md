```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Collaborator (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Collaborator  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + check(string $owner, string $repo, ...) : string
  + add(string $owner, string $repo, ...) : string
  + delete(string $owner, string $repo, ...) : string
  + permission(string $owner, string $repo, ...) : ?object
}

note right of Collaborator::list
  List a repository's collaborators.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Collaborator::check
  Check if a user is a collaborator of a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $collaborator
end note

note right of Collaborator::add
  Add a collaborator to a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $collaborator
    string $permission = null
end note

note right of Collaborator::delete
  Delete a collaborator from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $collaborator
end note

note right of Collaborator::permission
  Get repository permissions for a user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $collaborator
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

