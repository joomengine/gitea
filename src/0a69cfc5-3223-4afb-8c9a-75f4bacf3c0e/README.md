```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class User (Details)
> namespace: **VDM\Joomla\Gitea\Service**

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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---0a69cfc5_3223_4afb_8c9a_75f4bacf3c0e---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

