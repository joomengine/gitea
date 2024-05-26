```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Admin\Users**
> extends: **Api**
```uml
@startuml
class Repository  #Gold {
  + create(string $username, string $repoName, ...) : ?object
}

note right of Repository::create
  Create a repository on behalf of a user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $username
    string $repoName
    ?string $description = null
    bool $auto_init = false
    ?string $default_branch = null
    ?string $gitignores = null
    ?string $issue_labels = null
    ?string $license = null
    bool $private = false
    ?string $readme = null
    bool $template = false
    ?string $trust_model = null
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

