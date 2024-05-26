```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Markdown (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Miscellaneous**
> extends: **Api**
```uml
@startuml
class Markdown  #Gold {
  + render(string $markdownText, bool $isWikiPage = false, ...) : ?string
  + raw(string $rawMarkdown) : ?string
}

note right of Markdown::render
  Render a markdown document as HTML.

  since: 3.2.0
  return: ?string
  
  arguments:
    string $markdownText
    bool $isWikiPage = false
    string $context = 'string'
    string $mode = 'string'
end note

note right of Markdown::raw
  Render raw markdown as HTML.

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

