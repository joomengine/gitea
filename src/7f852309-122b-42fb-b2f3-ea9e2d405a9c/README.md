```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Topics (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
```uml
@startuml
class Topics  #Gold {
  + get(string $owner, string $repo, ...) : ?object
  + replace(string $ownerName, string $repoName, ...) : string
  + add(string $ownerName, string $repoName, ...) : string
  + delete(string $ownerName, string $repoName, ...) : string
  + search(string $searchKeyword, int $page = 1, ...) : ?array
}

note right of Topics::get
  Get the list of topics that a repository has.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Topics::replace
  Replace the list of topics for a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    array $topicNames
end note

note right of Topics::add
  Add a topic to a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $topicName
end note

note right of Topics::delete
  Delete a topic from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $topicName
end note

note right of Topics::search
  Search topics via keyword.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $searchKeyword
    int $page = 1
    int $limit = 10
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

