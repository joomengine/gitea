```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Comment (Details)
> namespace: **VDM\Joomla\Gitea\Issue\Reactions**
> extends: **Api**
```uml
@startuml
class Comment  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + add(string $owner, string $repo, ...) : ?object
  + remove(string $owner, string $repo, ...) : string
}

note right of Comment::list
  Get a list of reactions from a comment of an issue.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $commentId
end note

note right of Comment::add
  Add a reaction to a comment of an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $commentId
    string $content
end note

note right of Comment::remove
  Remove a reaction from a comment of an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $commentId
    string $content
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

