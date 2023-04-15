```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Pulls (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
```uml
@startuml
class Pulls  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + update(string $owner, string $repo, ...) : ?object
  + diff(string $owner, string $repo, ...) : string
  + commits(string $owner, string $repo, ...) : ?array
  + files(string $owner, string $repo, ...) : ?array
  + merge(string $owner, string $repo, ...) : string
  + update(string $owner, string $repo, ...) : string
}

note right of Pulls::list
  List a repository's pull requests.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?string $state = null
    ?string $sort = null
    ?int $milestone = null
    ?array $labels = null
    int $page = 1
    int $limit = 10
end note

note left of Pulls::create
  Create a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $title
    string $head
    string $base
    ?string $body = null
    ?string $assignee = null
    ?array $assignees = null
    ?array $labels = null
    ?int $milestone = null
    ?string $dueDate = null
end note

note right of Pulls::get
  Get a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note left of Pulls::update
  Update a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $title = null
    ?string $body = null
    ?string $assignee = null
    ?array $assignees = null
    ?string $base = null
    ?string $state = null
    ?array $labels = null
    ?int $milestone = null
    ?string $dueDate = null
    ?bool $unsetDueDate = null
    ?bool $allowMaintainerEdit = null
  Merge PR's baseBranch into headBranch.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $style = null
end note

note right of Pulls::diff
  Get a pull request diff or patch.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    string $diffType
    bool $binary = false
end note

note left of Pulls::commits
  Get commits for a pull request.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    int $page = 1
    int $limit = 10
end note

note right of Pulls::files
  Get changed files for a pull request.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $skipTo = null
    ?string $whitespace = null
    int $page = 1
    int $limit = 10
end note

note left of Pulls::merge
  Merge a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $do = null
    ?string $mergeCommitId = null
    ?string $mergeMessageField = null
    ?string $mergeTitleField = null
    ?bool $deleteBranchAfterMerge = null
    ?bool $forceMerge = null
    ?string $headCommitId = null
    ?bool $mergeWhenChecksSucceed = null
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

