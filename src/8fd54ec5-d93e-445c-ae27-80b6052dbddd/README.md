```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Branch (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
```uml
@startuml
class Branch  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Branch::list
  List a repository's branches.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Branch::create
  Create a branch.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $branch_name
    string $old_branch
end note

note right of Branch::get
  Retrieve a specific branch from a repository, including its effective branch protection.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $branch
end note

note right of Branch::delete
  Delete a specific branch from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $branch
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

