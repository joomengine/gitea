```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Wiki (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Wiki  #Gold {
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + pages(string $owner, string $repo, ...) : ?array
  + delete(string $owner, string $repo, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
  + revisions(string $owner, string $repo, ...) : ?object
}

note right of Wiki::create
  Create a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $title
    string $contentBase64
    ?string $message = null
end note

note right of Wiki::get
  Get a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $pageName
end note

note right of Wiki::pages
  Get all wiki pages.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Wiki::delete
  Delete a wiki page.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $pageName
end note

note right of Wiki::edit
  Edit a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $pageName
    string $title
    string $content
    string $message = null
end note

note right of Wiki::revisions
  Get revisions of a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $pageName
    int $page = 1
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

