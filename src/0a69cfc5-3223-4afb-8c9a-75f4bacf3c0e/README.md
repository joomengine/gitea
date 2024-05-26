```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class User (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Service**
```uml
@startuml
class User  #Gold {
  + register(Container $container) : void
  + getUser(Container $container) : Usr
  + getApplications(Container $container) : Applications
  + getEmails(Container $container) : Emails
  + getFollowers(Container $container) : Followers
  + getFollowing(Container $container) : Following
  + getGpg(Container $container) : Gpg
  + getKeys(Container $container) : Keys
  + getRepos(Container $container) : Repos
  + getSettings(Container $container) : Settings
  + getStarred(Container $container) : Starred
  + getSubscriptions(Container $container) : Subscriptions
  + getTeams(Container $container) : Teams
  + getTimes(Container $container) : Times
  + getTokens(Container $container) : Tokens
}

note right of User::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of User::getUser
  Get the User class

  since: 3.2.0
  return: Usr
end note

note right of User::getApplications
  Get the Applications class

  since: 3.2.0
  return: Applications
end note

note left of User::getEmails
  Get the Emails class

  since: 3.2.0
  return: Emails
end note

note right of User::getFollowers
  Get the Followers class

  since: 3.2.0
  return: Followers
end note

note left of User::getFollowing
  Get the Following class

  since: 3.2.0
  return: Following
end note

note right of User::getGpg
  Get the Gpg class

  since: 3.2.0
  return: Gpg
end note

note left of User::getKeys
  Get the Keys class

  since: 3.2.0
  return: Keys
end note

note right of User::getRepos
  Get the Repos class

  since: 3.2.0
  return: Repos
end note

note left of User::getSettings
  Get the Settings class

  since: 3.2.0
  return: Settings
end note

note right of User::getStarred
  Get the Starred class

  since: 3.2.0
  return: Starred
end note

note left of User::getSubscriptions
  Get the Subscriptions class

  since: 3.2.0
  return: Subscriptions
end note

note right of User::getTeams
  Get the Teams class

  since: 3.2.0
  return: Teams
end note

note left of User::getTimes
  Get the Times class

  since: 3.2.0
  return: Times
end note

note right of User::getTokens
  Get the Tokens class

  since: 3.2.0
  return: Tokens
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

