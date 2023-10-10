```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Hooks (Details)
> namespace: **VDM\Joomla\Gitea\Organization**
> extends: **Api**
```uml
@startuml
class Hooks  #Gold {
  + list(string $orgName, int $page = 1, ...) : ?array
  + create(string $org, string $type, ...) : ?object
  + get(string $org, int $id) : ?object
  + delete(string $org, int $id) : string
  + update(string $orgName, int $hookId, ...) : ?object
}

note right of Hooks::list
  List an organization's webhooks.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $orgName
    int $page = 1
    int $limit = 10
end note

note right of Hooks::create
  Create a hook for an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $org
    string $type
    string $url
    string $secret = ''
    bool $events = true
    bool $active = true
end note

note right of Hooks::get
  Get a hook for an organization.

  since: 3.2.0
  return: ?object
end note

note right of Hooks::delete
  Delete a hook for an organization.

  since: 3.2.0
  return: string
end note

note right of Hooks::update
  Update a hook for an organization.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $orgName
    int $hookId
    ?bool $active = null
    ?string $branchFilter = null
    ?array $config = null
    ?array $events = null
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

