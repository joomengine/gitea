```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Releases (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Releases  #Gold {
  + list(string $ownerName, string $repoName, ...) : ?array
  + create(string $ownerName, string $repoName, ...) : ?object
  + get(string $ownerName, string $repoName, ...) : ?object
  + delete(string $ownerName, string $repoName, ...) : string
  + update(string $ownerName, string $repoName, ...) : ?object
  + getByTag(string $ownerName, string $repoName, ...) : ?object
  + deleteByTag(string $ownerName, string $repoName, ...) : string
}

note right of Releases::list
  List a repo's releases.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $ownerName
    string $repoName
    ?bool $draft = null
    ?bool $preRelease = null
    int $page = 1
    int $limit = 10
end note

note right of Releases::create
  Create a release.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    string $tagName
    string $targetCommitish
    string $releaseName
    string $releaseBody
    bool $isDraft = false
    bool $isPrerelease = false
end note

note right of Releases::get
  Get a release by ID.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    int $releaseId
end note

note right of Releases::delete
  Delete a release by ID.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    int $releaseId
end note

note right of Releases::update
  Update a release.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    int $releaseId
    ?string $tagName = null
    ?string $targetCommitish = null
    ?string $releaseName = null
    ?string $description = null
    ?bool $isDraft = null
    ?bool $isPrerelease = null
end note

note right of Releases::getByTag
  Get a release by tag name.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    string $tagName
end note

note right of Releases::deleteByTag
  Delete a release by tag name.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $tagName
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---754d737c_3b6f_43f0_8974_2e06a3daf41e---Power
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

