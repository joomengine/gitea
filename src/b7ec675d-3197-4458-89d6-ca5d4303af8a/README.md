```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Package (Details)
> namespace: **VDM\Joomla\Gitea**
```uml
@startuml
class Package  #Gold {
  + get(string $owner, string $type, ...) : ?object
  + delete(string $owner, string $type, ...) : string
}

note right of Package::get
  Gets a package.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $type
    string $name
    string $version
end note

note right of Package::delete
  Delete a package.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $type
    string $name
    string $version
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

