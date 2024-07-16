```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Topics (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Topics  #Gold {
  + get(string $owner, string $repo, ...) : ?object
  + replace(string $ownerName, string $repoName, ...) : string
  + add(string $ownerName, string $repoName, ...) : string
  + delete(string $ownerName, string $repoName, ...) : string
  + search(string $searchKeyword, int $page = 1, ...) : ?array
}

note right of Topics::get
  Get the list of topics that a repository has.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Topics::replace
  Replace the list of topics for a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    array $topicNames
end note

note right of Topics::add
  Add a topic to a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $topicName
end note

note right of Topics::delete
  Delete a topic from a repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $topicName
end note

note right of Topics::search
  Search topics via keyword.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $searchKeyword
    int $page = 1
    int $limit = 10
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---7f852309_122b_42fb_b2f3_ea9e2d405a9c---Power
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

