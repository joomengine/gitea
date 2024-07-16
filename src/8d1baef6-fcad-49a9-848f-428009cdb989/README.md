```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Contents (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Contents  #Gold {
  + get(string $owner, string $repo, ...) : mixed
  + metadata(string $owner, string $repo, ...) : null|array|object
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
  return: null|array|object
  
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
    ?string $newBranch = null
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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---8d1baef6_fcad_49a9_848f_428009cdb989---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

