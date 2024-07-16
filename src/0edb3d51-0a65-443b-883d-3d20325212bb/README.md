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
> extends: **Api**

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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---0edb3d51_0a65_443b_883d_3d20325212bb---Power
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

