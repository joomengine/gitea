```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Git (Details)
> namespace: **VDM\Joomla\Gitea\Repository\Hooks**
```uml
@startuml
class Git  #Gold {
  + list(string $ownerName, string $repoName) : ?array
  + get(string $ownerName, string $repoName, ...) : ?object
  + delete(string $ownerName, string $repositoryName, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
}

note right of Git::list
  List the Git hooks in a repository.

  since: 3.2.0
  return: ?array
end note

note right of Git::get
  Get a Git hook.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    int $hookId
end note

note right of Git::delete
  Delete a Git hook in a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repositoryName
    string $hookId
end note

note right of Git::edit
  Edit a Git hook in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $hookId
    array $hookOptions
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

