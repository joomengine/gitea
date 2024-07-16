```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VDM\Joomla\Gitea**
> extends: **Api**

```uml
@startuml
class Repository  #Gold {
  + search(string $q, array $options = [], ...) : ?object
  + get(string $owner, string $repo) : ?object
  + id(string $owner, string $repo) : ?object
  + delete(string $owner, string $repo) : string
  + edit(string $owner, string $repo, ...) : ?object
  + create(string $name, ?string $description = null, ...) : ?object
}

note right of Repository::search
  Search for repositories.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $q
    array $options = []
    int $page = 1
    int $limit = 10
    string $sort = 'alpha'
    string $order = 'asc'
end note

note right of Repository::get
  Get a repository.

  since: 3.2.0
  return: ?object
end note

note right of Repository::id
  Get a repository by owner and repo name.

  since: 3.2.0
  return: ?object
end note

note right of Repository::delete
  Delete a repository.

  since: 3.2.0
  return: string
end note

note right of Repository::edit
  Edit a repository's properties.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    ?string $description = null
    ?string $website = null
    ?bool $private = null
    ?bool $hasIssues = null
    ?bool $hasWiki = null
    ?bool $hasProjects = null
    ?bool $allowManualMerge = null
    ?bool $allowMergeCommits = null
    ?bool $allowRebase = null
    ?bool $allowRebaseExplicit = null
    ?bool $allowRebaseUpdate = null
    ?bool $allowSquashMerge = null
    ?bool $archived = null
    ?bool $autodetectManualMerge = null
    ?string $defaultBranch = null
    ?bool $defaultDeleteBranchAfterMerge = null
    ?string $defaultMergeStyle = null
    ?bool $enablePrune = null
    ?object $externalTracker = null
    ?object $externalWiki = null
    ?bool $hasPullRequests = null
    ?bool $ignoreWhitespaceConflicts = null
    ?object $internalTracker = null
    ?string $mirrorInterval = null
    ?bool $template = null
end note

note right of Repository::create
  Create a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $name
    ?string $description = null
    ?bool $private = null
    ?bool $autoInit = null
    ?string $defaultBranch = null
    ?string $gitignores = null
    ?string $issueLabels = null
    ?string $license = null
    ?string $readme = null
    ?bool $template = null
    ?string $trustModel = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---eb6c050d_7100_42b8_a922_f7e7c78a08c2---Power
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

