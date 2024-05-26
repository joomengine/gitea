```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Reviews (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Reviews  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + submit(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + comments(string $owner, string $repo, ...) : ?array
  + dismiss(string $owner, string $repo, ...) : ?object
  + undismiss(string $owner, string $repo, ...) : ?object
}

note right of Reviews::list
  List all reviews for a pull request.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    int $page = 1
    int $limit = 10
end note

note left of Reviews::create
  Create a review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    string $body
    string $event
    ?array $comments = null
    ?string $commitId = null
end note

note right of Reviews::get
  Get a specific review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note

note left of Reviews::submit
  Submit a pending review to a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
    string $body
    string $event
end note

note right of Reviews::delete
  Delete a specific review from a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note

note left of Reviews::comments
  Get the comments of a specific review for a pull request.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note

note right of Reviews::dismiss
  Dismiss a review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
    string $message
    bool $priors = false
end note

note left of Reviews::undismiss
  Cancel the dismissal of a review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
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

