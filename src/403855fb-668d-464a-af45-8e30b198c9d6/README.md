```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Mirrors (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
```uml
@startuml
class Mirrors  #Gold {
  + get(string $owner, string $repo, ...) : ?array
  + add(string $owner, string $repo, ...) : ?object
  + sync(string $owner, string $repo) : string
  + name(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Mirrors::get
  Get all push mirrors of the repository.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Mirrors::add
  Add a push mirror to the repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $remoteAddress
    ?string $remoteUsername = null
    ?string $remotePassword = null
    string $interval
    bool $syncOnCommit
end note

note right of Mirrors::sync
  Sync all push mirrored repositories.

  since: 3.2.0
  return: string
end note

note right of Mirrors::name
  Get push mirror of the repository by remoteName.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $name
end note

note right of Mirrors::delete
  Delete a push mirror from a repository by remoteName.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $name
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

