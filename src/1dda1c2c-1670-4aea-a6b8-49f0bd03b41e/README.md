```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Patch (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Patch  #Gold {
  + applyDiffPatch(string $owner, string $repo, ...) : ?object
}

note right of Patch::applyDiffPatch
  Apply a diff patch to a repository.
$options = [
'description' => 'UpdateFileOptions',
'body' => [
'content' => 'string', // Content must be base64 encoded.
'sha' => 'string', // The SHA for the file that already exists.
'branch' => 'string', // Branch (optional) to base this file from. If not given, the default branch is used.
'new_branch' => 'string', // New branch (optional) will make a new branch from branch before creating the file.
'from_path' => 'string', // From_path (optional) is the path of the original file which will be moved/renamed to the path in the URL.
'message' => 'string', // Message (optional) for the commit of this file. If not supplied, a default message will be used.
'author' => [ // Identity for a person's identity like an author or committer.
'name' => 'string',
'email' => 'string($email)'
],
'committer' => [ // Identity for a person's identity like an author or committer.
'name' => 'string',
'email' => 'string($email)'
],
'dates' => [ // Store dates for GIT_AUTHOR_DATE and GIT_COMMITTER_DATE.
'author' => 'string($date-time)',
'committer' => 'string($date-time)'
],
'signoff' => 'boolean' // Add a Signed-off-by trailer by the committer at the end of the commit log message.
]
]

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    array $option
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1dda1c2c_1670_4aea_a6b8_49f0bd03b41e---Power
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

