```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea**
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

