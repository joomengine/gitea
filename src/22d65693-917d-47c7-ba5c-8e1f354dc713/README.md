```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Comments (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**
```uml
@startuml
class Comments  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
  + add(string $owner, string $repo, ...) : ?object
}

note right of Comments::list
  List all comments on an issue.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    int $page = 1
    int $limit = 10
    ?string $since = null
    ?string $before = null
end note

note right of Comments::get
  Get a comment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $commentId
end note

note right of Comments::delete
  Delete a comment.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $commentId
end note

note right of Comments::edit
  Edit a comment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $commentId
    string $commentBody
end note

note right of Comments::add
  Add a comment to an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $issueIndex
    string $commentBody
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

