```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Users (Details)
> namespace: **VDM\Joomla\Gitea\Admin**
> extends: **Api**
```uml
@startuml
class Users  #Gold {
  + list(int $page = 1, int $limit = 10) : ?array
  + create(string $loginName, string $email, ...) : ?object
  + delete(string $username) : string
  + edit(string $username, string $loginName, ...) : ?object
}

note right of Users::list
  List all users.

  since: 3.2.0
  return: ?array
end note

note right of Users::create
  Create a user with extended options.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $loginName
    string $email
    string $password
    string $username
    ?string $fullName = null
    ?bool $mustChangePassword = null
    ?bool $restricted = null
    ?bool $sendNotify = null
    ?int $sourceId = null
    ?string $visibility = null
end note

note right of Users::delete
  Delete a user.

  since: 3.2.0
  return: string
end note

note right of Users::edit
  Edit an existing user.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $username
    string $loginName
    int $sourceId
    bool $active = false
    bool $admin = false
    bool $allowCreateOrganization = false
    bool $allowGitHook = false
    bool $allowImportLocal = false
    string $description = ''
    string $email = ''
    string $fullName = ''
    string $location = ''
    int $maxRepoCreation
    bool $mustChangePassword = false
    string $password = ''
    bool $prohibitLogin = false
    bool $restricted = false
    string $visibility = ''
    string $website = ''
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

