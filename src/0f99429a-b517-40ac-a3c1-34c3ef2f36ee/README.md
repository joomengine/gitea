```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Merge (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Merge  #Gold {
  + check(string $owner, string $repo, ...) : string
  + pull(string $owner, string $repo, ...) : string
  + cancel(string $owner, string $repo, ...) : string
}

note right of Merge::check
  Check if a pull request has been merged.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Merge::pull
  Merge a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $mergeMethod = null
    ?string $mergeCommitId = null
    ?string $mergeMessageField = null
    ?string $mergeTitleField = null
    ?bool $deleteBranchAfterMerge = null
    ?bool $forceMerge = null
    ?string $headCommitId = null
    ?bool $mergeWhenChecksSucceed = null
end note

note right of Merge::cancel
  Cancel the scheduled auto merge for a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
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

