```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Contents (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Contents  #Gold {
  + get(string $owner, string $repo, ...) : mixed
  + metadata(string $owner, string $repo, ...) : ?object
  + create(string $owner, string $repo, ...) : ?object
  + root(string $owner, string $repo, ...) : ?array
  + update(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : ?object
  + editor(string $owner, string $repo, ...) : ?string
  + blob(string $owner, string $repo, ...) : ?object
}

note right of Contents::get
  Get a file from a repository.
Default the repository's default branch (usually master).

  since: 3.2.0
  return: mixed
  
  arguments:
    string $owner
    string $repo
    string $filepath
    ?string $ref = null
end note

note left of Contents::metadata
  Get the metadata and contents (if a file) of an entry in a repository,
or a list of entries if a directory.
Default the repository's default branch (usually master).

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    ?string $ref = null
end note

note right of Contents::create
  Create a file in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $content
    string $message
    string $branch = 'master'
    ?string $authorName = null
    ?string $authorEmail = null
    ?string $committerName = null
    ?string $committerEmail = null
    ?bool $newBranch = false
    ?string $authorDate = null
    ?string $committerDate = null
    ?bool $signoff = null
end note

note left of Contents::root
  Get the metadata of all the entries of the root directory.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?string $ref = null
end note

note right of Contents::update
  Update a file in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $content
    string $message
    string $sha
    string $branch = 'master'
    ?string $authorName = null
    ?string $authorEmail = null
    ?string $committerName = null
    ?string $committerEmail = null
    ?string $authorDate = null
    ?string $committerDate = null
    ?string $fromPath = null
    ?string $newBranch = null
    ?bool $signoff = null
end note

note left of Contents::delete
  Delete a file in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $message
    string $sha
    ?string $branch = null
    ?string $authorName = null
    ?string $authorEmail = null
    ?string $committerName = null
    ?string $committerEmail = null
    ?string $authorDate = null
    ?string $committerDate = null
    ?string $newBranch = null
    ?bool $signoff = null
end note

note right of Contents::editor
  Get the EditorConfig definitions of a file in a repository.

  since: 3.2.0
  return: ?string
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $ref = null
end note

note left of Contents::blob
  Get the blob of a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $sha
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

