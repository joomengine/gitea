```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Miscellaneous (Details)
> namespace: **VDM\Joomla\Gitea\Service**
```uml
@startuml
class Miscellaneous  #Gold {
  + register(Container $container) : void
  + getActivitypub(Container $container) : Activitypub
  + getGpg(Container $container) : Gpg
  + getMarkdown(Container $container) : Markdown
  + getNodeInfo(Container $container) : NodeInfo
  + getVersion(Container $container) : Version
}

note right of Miscellaneous::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Miscellaneous::getActivitypub
  Get the Activitypub class

  since: 3.2.0
  return: Activitypub
end note

note right of Miscellaneous::getGpg
  Get the Gpg class

  since: 3.2.0
  return: Gpg
end note

note right of Miscellaneous::getMarkdown
  Get the Markdown class

  since: 3.2.0
  return: Markdown
end note

note right of Miscellaneous::getNodeInfo
  Get the NodeInfo class

  since: 3.2.0
  return: NodeInfo
end note

note right of Miscellaneous::getVersion
  Get the Version class

  since: 3.2.0
  return: Version
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

