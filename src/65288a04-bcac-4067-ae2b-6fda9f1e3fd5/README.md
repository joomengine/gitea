```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Reviewers (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Reviewers  #Gold {
  + request(string $owner, string $repo, ...) : ?array
  + cancel(string $owner, string $repo, ...) : string
  + get(string $owner, string $repo) : ?array
}

note right of Reviewers::request
  Create review requests for a pull request.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    array $reviewers
    ?array $teamReviewers = null
end note

note right of Reviewers::cancel
  Cancel review requests for a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    array $reviewers
    ?array $teamReviewers = null
end note

note right of Reviewers::get
  Return all users that can be requested to review in this repo.

  since: 3.2.0
  return: ?array
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

