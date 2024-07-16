```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Wiki (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Wiki  #Gold {
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + pages(string $owner, string $repo, ...) : ?array
  + delete(string $owner, string $repo, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
  + revisions(string $owner, string $repo, ...) : ?object
}

note right of Wiki::create
  Create a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $title
    string $contentBase64
    ?string $message = null
end note

note right of Wiki::get
  Get a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $pageName
end note

note right of Wiki::pages
  Get all wiki pages.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Wiki::delete
  Delete a wiki page.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    string $pageName
end note

note right of Wiki::edit
  Edit a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $pageName
    string $title
    string $content
    string $message = null
end note

note right of Wiki::revisions
  Get revisions of a wiki page.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $pageName
    int $page = 1
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---572b9567_1893_400b_bd34_f1a45ef7e503---Power
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

