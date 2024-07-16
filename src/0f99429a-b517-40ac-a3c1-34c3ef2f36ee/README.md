```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Merge (Details)
> namespace: **VDM\Joomla\Gitea\Repository**
> extends: **Api**

```uml
@startuml
class Merge  #Gold {
  + check(string $owner, string $repo, ...) : string
  + pull(string $owner, string $repo, ...) : string
  + cancel(string $owner, string $repo, ...) : string
}

note right of Merge::check
  Check if a pull request has been merged.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Merge::pull
  Merge a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $mergeMethod = null
    ?string $mergeCommitId = null
    ?string $mergeMessageField = null
    ?string $mergeTitleField = null
    ?bool $deleteBranchAfterMerge = null
    ?bool $forceMerge = null
    ?string $headCommitId = null
    ?bool $mergeWhenChecksSucceed = null
end note

note right of Merge::cancel
  Cancel the scheduled auto merge for a pull request.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---0f99429a_b517_40ac_a3c1_34c3ef2f36ee---Power
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

