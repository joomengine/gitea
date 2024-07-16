```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Reviews (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Reviews  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + submit(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + comments(string $owner, string $repo, ...) : ?array
  + dismiss(string $owner, string $repo, ...) : ?object
  + undismiss(string $owner, string $repo, ...) : ?object
}

note right of Reviews::list
  List all reviews for a pull request.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    int $page = 1
    int $limit = 10
end note

note left of Reviews::create
  Create a review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    string $body
    string $event
    ?array $comments = null
    ?string $commitId = null
end note

note right of Reviews::get
  Get a specific review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note

note left of Reviews::submit
  Submit a pending review to a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
    string $body
    string $event
end note

note right of Reviews::delete
  Delete a specific review from a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note

note left of Reviews::comments
  Get the comments of a specific review for a pull request.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note

note right of Reviews::dismiss
  Dismiss a review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
    string $message
    bool $priors = false
end note

note left of Reviews::undismiss
  Cancel the dismissal of a review for a pull request.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    int $id
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---6a2fffb5_63ff_4a96_b458_632a5ff90814---Power
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

