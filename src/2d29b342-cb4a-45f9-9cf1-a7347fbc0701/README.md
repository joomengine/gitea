```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Keys (Details)
> namespace: **VDM\Joomla\Gitea\Admin\Users**
```uml
@startuml
class Keys  #Gold {
  + add(string $userName, string $publicKey, ...) : ?object
  + delete(string $username, int $id) : string
}

note right of Keys::add
  Add a public key on behalf of a user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $userName
    string $publicKey
    string $keyTitle
    bool $readOnly = false
    ?string $description = null
end note

note right of Keys::delete
  Delete a user's public key.

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

