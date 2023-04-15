```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Following (Details)
> namespace: **VDM\Joomla\Gitea\User**
```uml
@startuml
class Following  #Gold {
  + list(int $page = 1, int $limit = 10) : ?array
  + check(string $username) : bool
  + follow(string $username) : string
  + unfollow(string $username) : string
}

note right of Following::list
  List the users that the authenticated user is following.

  since: 3.2.0
  return: ?array
end note

note right of Following::check
  Check whether a user is followed by the authenticated user.

  since: 3.2.0
  return: bool
end note

note right of Following::follow
  Follow a user.

  since: 3.2.0
  return: string
end note

note right of Following::unfollow
  Unfollow a user.

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

