```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Http (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Utilities**
> extends: **JoomlaHttp**
```uml
@startuml
class Http << (F,LightGreen) >> #RoyalBlue {
  + __construct(?string $token)
  + setToken(string $token) : void
  + getToken() : ?string
}

note right of Http::__construct
  Constructor.

  since: 3.2.0
end note

note right of Http::setToken
  Change the Token.

  since: 3.2.0
  return: void
end note

note right of Http::getToken
  Get the Token.

  since: 3.2.0
  return: ?string
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

