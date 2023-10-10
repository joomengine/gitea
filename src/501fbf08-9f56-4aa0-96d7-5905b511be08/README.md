```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Keys (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Keys  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + add(string $owner, string $repo, ...) : ?object
  + id(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Keys::list
  List a repository's keys.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?int $keyId = null
    ?string $fingerprint = null
    int $page = 1
    int $limit = 10
end note

note right of Keys::add
  Add a key to a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $key
    string $title
    bool $readOnly
end note

note right of Keys::id
  Get a repository's key by id.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
end note

note right of Keys::delete
  Delete a key from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $id
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

