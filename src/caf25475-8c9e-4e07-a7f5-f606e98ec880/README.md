```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Tags (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Tags  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + sha(string $owner, string $repo, ...) : ?object
  + create(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Tags::list
  List a repository's tags

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?int $page = 1
    ?int $limit = 10
end note

note right of Tags::get
  Get the tag of a repository by tag name.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $tag
end note

note right of Tags::sha
  Get the tag object of an annotated tag (not lightweight tags).

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $sha
end note

note right of Tags::create
  Create a new git tag in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $tagName
    string $target
    string $message
end note

note right of Tags::delete
  Delete a repository's tag by name.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $tag
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

