```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repos (Details)
> namespace: **VDM\Joomla\Gitea\User**
```uml
@startuml
class Repos  #Gold {
  + create(string $name, ?string $description = null, ...) : ?object
  + list(int $page = 1, int $limit = 10) : ?array
  + star(string $owner, string $repo) : string
  + unstar(string $owner, string $repo) : string
}

note right of Repos::create
  Create a repository for the authenticated user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $name
    ?string $description = null
    bool $private = false
    bool $autoInit = false
    ?string $defaultBranch = null
    ?string $gitignores = null
    ?string $issueLabels = null
    ?string $license = null
    ?string $readme = null
    ?bool $template = null
    ?string $trustModel = null
end note

note right of Repos::list
  List the repos that the authenticated user owns.

  since: 3.2.0
  return: ?array
end note

note right of Repos::star
  Star the given repo for the authenticated user.

  since: 3.2.0
  return: string
end note

note right of Repos::unstar
  Unstar the given repo for the authenticated user.

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

