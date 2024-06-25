```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Teams (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Teams  #Gold {
  + list(string $ownerOfRepo, string $nameOfRepo) : ?array
  + check(string $ownerOfRepo, string $nameOfRepo, ...) : ?object
  + add(string $ownerName, string $repoName, ...) : string
  + delete(string $ownerName, string $repoName, ...) : string
}

note right of Teams::list
  List a repository's teams.

  since: 3.2.0
  return: ?array
end note

note right of Teams::check
  Check if a team is assigned to a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerOfRepo
    string $nameOfRepo
    string $teamName
end note

note right of Teams::add
  Add a team to a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $teamName
end note

note right of Teams::delete
  Delete a team from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $teamName
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

