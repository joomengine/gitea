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

