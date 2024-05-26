```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Hooks (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Repository**
> extends: **Api**
```uml
@startuml
class Hooks  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + edit(string $owner, string $repo, ...) : ?object
  + test(string $owner, string $repo, ...) : string
}

note right of Hooks::list
  List the hooks in a repository.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    int $page = 1
    int $limit = 10
end note

note right of Hooks::create
  Create a hook in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $type
    array $config
    bool $active = false
    ?array $events = null
    string $branchFilter = ''
end note

note right of Hooks::get
  Get a hook.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $hookId
end note

note right of Hooks::edit
  Edit a hook in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $id
    array $config
    array $events
    bool $active
end note

note right of Hooks::test
  Test a push webhook.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $hookId
    string $ref = ''
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

