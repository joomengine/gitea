```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Keys (Details)
> namespace: **VDM\Joomla\Gitea\User**
```uml
@startuml
class Keys  #Gold {
  + create(string $title, string $key, ...) : ?object
  + list(?string $fingerprint = null, int $page = 1, ...) : ?array
  + get(int $id) : ?object
  + delete(int $id) : string
}

note right of Keys::create
  Create a public key for the authenticated user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $title
    string $key
    bool $readOnly = false
end note

note right of Keys::list
  List the authenticated user's public keys.

  since: 3.2.0
  return: ?array
  
  arguments:
    ?string $fingerprint = null
    int $page = 1
    int $limit = 10
end note

note right of Keys::get
  Get a public key for the authenticated user.

  since: 3.2.0
  return: ?object
end note

note right of Keys::delete
  Delete a public key for the authenticated user.

  since: 3.2.0
  return: string
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

