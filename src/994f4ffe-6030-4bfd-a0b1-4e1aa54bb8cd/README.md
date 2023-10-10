```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Remote (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Remote  #Gold {
  + migrate(string $cloneAddr, string $repoName, ...) : ?object
}

note right of Remote::migrate
  Migrate a remote git repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $cloneAddr
    string $repoName
    string $repoOwner
    string $uid
    string $description = ''
    bool $private = false
    ?string $authToken = null
    ?string $authUsername = null
    ?string $authPassword = null
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

