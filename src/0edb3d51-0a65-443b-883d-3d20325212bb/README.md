```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Protection (Details)
> namespace: **VDM\Joomla\Gitea\Repository\Branch**
```uml
@startuml
class Protection  #Gold {
  + list(string $ownerName, string $repositoryName) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $ownerName, string $repoName, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
}

note right of Protection::list
  List branch protections for a repository.

  since: 3.2.0
  return: ?array
end note

note right of Protection::create
  Create a branch protection for a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $branchName
    array $approvalsWhitelistUsernames
    array $approvalsWhitelistTeams
    bool $blockOnOfficialReviewRequests = false
    bool $blockOnOutdatedBranch = false
    bool $blockOnRejectedReviews = false
    bool $dismissStaleApprovals = false
    bool $enableApprovalsWhitelist = false
    bool $enableMergeWhitelist = false
    bool $enablePush = true
    bool $enablePushWhitelist = false
    bool $enableStatusCheck = false
    array $mergeWhitelistUsernames = []
    array $mergeWhitelistTeams = []
    string $protectedFilePatterns = ''
    bool $pushWhitelistDeployKeys = false
    array $pushWhitelistUsernames = []
    array $pushWhitelistTeams = []
    bool $requireSignedCommits = false
    int $requiredApprovals
    array $statusCheckContexts = []
    string $unprotectedFilePatterns = ''
end note

note right of Protection::get
  Get a specific branch protection for the repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $branchName
end note

note right of Protection::delete
  Delete a specific branch protection for the repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $branchName
end note

note right of Protection::edit
  Edit a branch protection for a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $name
    ?array $approvalsWhitelistTeams = null
    ?array $approvalsWhitelistUsernames = null
    ?bool $blockOnOfficialReviewRequests = null
    ?bool $blockOnOutdatedBranch = null
    ?bool $blockOnRejectedReviews = null
    ?bool $dismissStaleApprovals = null
    ?bool $enableApprovalsWhitelist = null
    ?bool $enableMergeWhitelist = null
    ?bool $enablePush = null
    ?bool $enablePushWhitelist = null
    ?bool $enableStatusCheck = null
    ?array $mergeWhitelistTeams = null
    ?array $mergeWhitelistUsernames = null
    ?string $protectedFilePatterns = null
    ?bool $pushWhitelistDeployKeys = null
    ?array $pushWhitelistTeams = null
    ?array $pushWhitelistUsernames = null
    ?bool $requireSignedCommits = null
    ?int $requiredApprovals = null
    ?array $statusCheckContexts = null
    ?string $unprotectedFilePatterns = null
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

