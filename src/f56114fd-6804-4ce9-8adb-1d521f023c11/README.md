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
> extends: **Api**

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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f56114fd_6804_4ce9_8adb_1d521f023c11---Power
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

