```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Attachments (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Attachments  #Gold {
  + list(string $ownerName, string $repoName, ...) : ?array
  + create(string $ownerName, string $repoName, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
}

note right of Attachments::list
  List release's attachments.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $ownerName
    string $repoName
    int $releaseId
end note

note right of Attachments::create
  Create a release attachment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $ownerName
    string $repoName
    int $releaseId
    string $attachmentFile
    string $attachmentName
    string $contentType
end note

note right of Attachments::get
  Get a release attachment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
    int $attachmentId
end note

note right of Attachments::delete
  Delete a release attachment.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $id
    int $attachmentId
end note

note right of Attachments::edit
  Edit a release attachment.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
    int $attachmentId
    ?string $name = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---68f930bc_d24f_4ade_bcec_576f82c3c13d---Power
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

