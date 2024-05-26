```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Subscriptions (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Issue**
> extends: **Api**
```uml
@startuml
class Subscriptions  #Gold {
  + get(string $owner, string $repo, ...) : ?object
  + check(string $owner, string $repo, ...) : ?object
  + subscribe(string $owner, string $repo, ...) : string
  + unsubscribe(string $owner, string $repo, ...) : string
}

note right of Subscriptions::get
  Get users who subscribed on an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    ?int $page = null
    ?int $limit = null
end note

note right of Subscriptions::check
  Check if user is subscribed to an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Subscriptions::subscribe
  Subscribe user to issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    string $user
end note

note right of Subscriptions::unsubscribe
  Unsubscribe user from issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
    string $user
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

