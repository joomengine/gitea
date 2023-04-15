```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Unadopted (Details)
> namespace: **VDM\Joomla\Gitea\Admin**
```uml
@startuml
class Unadopted  #Gold {
  + list(int $page = 1, int $limit = 10, ...) : ?array
  + adopt(string $owner, string $repo) : string
  + delete(string $owner, string $repo) : string
}

note right of Unadopted::list
  List unadopted repositories.

  since: 3.2.0
  return: ?array
  
  arguments:
    int $page = 1
    int $limit = 10
    string $pattern = ''
end note

note right of Unadopted::adopt
  Adopt unadopted files as a repository.

  since: 3.2.0
  return: string
end note

note right of Unadopted::delete
  Delete unadopted files.

  since: 3.2.0
  return: string
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

