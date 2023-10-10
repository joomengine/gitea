```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Stopwatch (Details)
> namespace: **VDM\Joomla\Gitea\Issue**
> extends: **Api**
```uml
@startuml
class Stopwatch  #Gold {
  + start(string $owner, string $repo, ...) : string
  + stop(string $owner, string $repo, ...) : string
  + delete(string $owner, string $repo, ...) : string
}

note right of Stopwatch::start
  Start stopwatch on an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Stopwatch::stop
  Stop an issue's existing stopwatch.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Stopwatch::delete
  Delete an issue's existing stopwatch.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
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

