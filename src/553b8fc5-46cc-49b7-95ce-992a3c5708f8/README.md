```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Settings (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\User**
> extends: **Api**
```uml
@startuml
class Settings  #Gold {
  + get() : ?object
  + update(?string $description = null, ?string $diffViewStyle = null, ...) : ?array
}

note right of Settings::get
  Get user settings for the authenticated user.

  since: 3.2.0
  return: ?object
end note

note right of Settings::update
  Update user settings for the authenticated user.

  since: 3.2.0
  return: ?array
  
  arguments:
    ?string $description = null
    ?string $diffViewStyle = null
    ?string $fullName = null
    ?bool $hideActivity = null
    ?bool $hideEmail = null
    ?string $language = null
    ?string $location = null
    ?string $theme = null
    ?string $website = null
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

