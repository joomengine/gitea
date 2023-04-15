```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Gpg (Details)
> namespace: **VDM\Joomla\Gitea\User**
```uml
@startuml
class Gpg  #Gold {
  + createGPGKey(string $armoredPublicKey, ?string $armoredSignature = null) : ?object
  + get(int $id) : ?object
  + token() : ?string
  + verify(string $armoredPublicKey) : ?object
  + list(int $page = 1, int $limit = 10) : ?array
  + remove(int $id) : string
}

note right of Gpg::createGPGKey
  Create a GPG key for the authenticated user.

  since: 3.2.0
  return: ?object
end note

note right of Gpg::get
  Get a GPG key for the authenticated user.

  since: 3.2.0
  return: ?object
end note

note right of Gpg::token
  Get a token to verify.

  since: 3.2.0
  return: ?string
end note

note right of Gpg::verify
  Verify a GPG key.

  since: 3.2.0
  return: ?object
end note

note right of Gpg::list
  List the authenticated user's GPG keys.

  since: 3.2.0
  return: ?array
end note

note right of Gpg::remove
  Remove a GPG key for the authenticated user.

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

