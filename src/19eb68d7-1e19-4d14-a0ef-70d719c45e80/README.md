```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Response (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Utilities**
```uml
@startuml
class Response << (F,LightGreen) >> #RoyalBlue {
  + get(JoomlaResponse $response, int $expectedCode = 200, ...) : mixed
  + get_(JoomlaResponse $response, array $validate = [200 => null]) : mixed
  # body(JoomlaResponse $response, mixed $default = null) : mixed
  # error(JoomlaResponse $response) : string
}

note right of Response::get
  Process the response and decode it.

  since: 3.2.0
  return: mixed
  
  arguments:
    JoomlaResponse $response
    int $expectedCode = 200
    mixed $default = null
end note

note right of Response::get_
  Process the response and decode it. (when we have multiple success codes)

  since: 3.2.0
  return: mixed
end note

note right of Response::body
  Return the body from the response

  since: 3.2.0
  return: mixed
end note

note right of Response::error
  Get the error message from the return object

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

