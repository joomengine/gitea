```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Organization**
> extends: **Api**
```uml
@startuml
class Repository  #Gold {
  + list(string $org, int $pageNumber = 1, ...) : ?array
  + create(string $org, string $repoName, ...) : ?object
}

note right of Repository::list
  List an organization's repos.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $org
    int $pageNumber = 1
    int $pageSize = 10
end note

note right of Repository::create
  Create a repository in an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    string $repoName
    ?string $description = null
    ?bool $autoInit = null
    ?string $defaultBranch = null
    ?string $gitignores = null
    ?string $issueLabels = null
    ?string $license = null
    ?bool $private = null
    ?string $readme = null
    ?bool $template = null
    ?string $trustModel = null
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

