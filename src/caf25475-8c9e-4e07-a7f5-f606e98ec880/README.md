```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Tags (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Tags  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + sha(string $owner, string $repo, ...) : ?object
  + create(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Tags::list
  List a repository's tags

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?int $page = 1
    ?int $limit = 10
end note

note right of Tags::get
  Get the tag of a repository by tag name.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $tag
end note

note right of Tags::sha
  Get the tag object of an annotated tag (not lightweight tags).

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $sha
end note

note right of Tags::create
  Create a new git tag in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $tagName
    string $target
    string $message
end note

note right of Tags::delete
  Delete a repository's tag by name.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $tag
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---caf25475_8c9e_4e07_a7f5_f606e98ec880---Power
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

