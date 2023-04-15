```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Refs (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
```uml
@startuml
class Refs  #Gold {
  + list(string $owner, string $repo) : ?array
  + get(string $owner, string $repo, ...) : ?array
}

note right of Refs::list
  Get specified ref or filtered repository's refs.

  since: 3.2.0
  return: ?array
end note

note right of Refs::get
  Get specified ref.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    string $ref
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

