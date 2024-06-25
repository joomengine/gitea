```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class User (Details)
> namespace: **VDM\Joomla\Gitea**
> extends: **Api**
```uml
@startuml
class User  #Gold {
  + authenticate() : ?object
  + search(string $keyword, ?int $uid = null, ...) : ?object
  + get(string $username) : o
  + followers(string $userName, int $page = 1, ...) : ?array
  + following(string $userName, int $page = 1, ...) : ?array
  + check(string $username, string $target) : string
  + gpg(string $userName, int $page = 1, ...) : ?array
  + heatmap(string $username) : ?array
  + keys(string $userName, ?string $fingerprint = null, ...) : ?array
  + repos(string $userName, int $page = 1, ...) : ?array
  + watched(string $userName, int $page = 1, ...) : ?array
}

note right of User::authenticate
  Get the authenticated user.

  since: 3.2.0
  return: ?object
end note

note left of User::search
  Search for users.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $keyword
    ?int $uid = null
    int $page = 1
    int $limit = 10
end note

note right of User::get
  Get a user by their username.

  since: 3.2.0
end note

note left of User::followers
  List the given user's followers.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $userName
    int $page = 1
    int $limit = 10
end note

note right of User::following
  List the users that the given user is following.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $userName
    int $page = 1
    int $limit = 10
end note

note left of User::check
  Check if one user is following another user.

  since: 3.2.0
  return: string
end note

note right of User::gpg
  List the given user's GPG keys.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $userName
    int $page = 1
    int $limit = 10
end note

note left of User::heatmap
  Get a user's heatmap.

  since: 3.2.0
  return: ?array
end note

note right of User::keys
  List the given user's public keys.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $userName
    ?string $fingerprint = null
    int $page = 1
    int $limit = 10
end note

note left of User::repos
  List the repos that the given user has starred.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $userName
    int $page = 1
    int $limit = 10
end note

note right of User::watched
  List the repositories watched by a user.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $userName
    int $page = 1
    int $limit = 10
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

