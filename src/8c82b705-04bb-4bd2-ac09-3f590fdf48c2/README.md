```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Templates (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
```uml
@startuml
class Templates  #Gold {
  + issue(string $owner, string $repo) : ?array
  + repo(string $templateOwner, string $templateRepo, ...) : ?object
}

note right of Templates::issue
  Get available issue templates for a repository.

  since: 3.2.0
  return: ?array
end note

note right of Templates::repo
  Create a repository using a template.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $templateOwner
    string $templateRepo
    string $name
    array $options = []
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

