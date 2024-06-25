```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Attachments (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Attachments  #Gold {
  + list(string $ownerName, string $repoName, ...) : ?array
  + create(string $ownerName, string $repoName, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
}

note right of Attachments::list
  List release's attachments.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $ownerName
    string $repoName
    int $releaseId
end note

note right of Attachments::create
  Create a release attachment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    int $releaseId
    string $attachmentFile
    string $attachmentName
    string $contentType
end note

note right of Attachments::get
  Get a release attachment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
    int $attachmentId
end note

note right of Attachments::delete
  Delete a release attachment.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $id
    int $attachmentId
end note

note right of Attachments::edit
  Edit a release attachment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
    int $attachmentId
    ?string $name = null
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

