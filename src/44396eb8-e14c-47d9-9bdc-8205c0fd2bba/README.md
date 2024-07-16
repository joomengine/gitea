```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Issue (Details)
> namespace: **VDM\Joomla\Gitea\Service**

```uml
@startuml
class Issue  #Gold {
  + register(Container $container) : void
  + getIssue(Container $container) : Issu
  + getComments(Container $container) : Comments
  + getRepoComments(Container $container) : RepoComments
  + getLabels(Container $container) : Labels
  + getIssueLabels(Container $container) : IssueLabels
  + getMilestones(Container $container) : Milestones
  + getReactions(Container $container) : Reactions
  + getComment(Container $container) : Comment
  + getStopwatch(Container $container) : Stopwatch
  + getSubscriptions(Container $container) : Subscriptions
  + getTimeline(Container $container) : Timeline
  + getTimes(Container $container) : Times
}

note right of Issue::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Issue::getIssue
  Get the Issue class

  since: 3.2.0
  return: Issu
end note

note right of Issue::getComments
  Get the Comments class

  since: 3.2.0
  return: Comments
end note

note left of Issue::getRepoComments
  Get the Repository Comments class

  since: 3.2.0
  return: RepoComments
end note

note right of Issue::getLabels
  Get the Labels class

  since: 3.2.0
  return: Labels
end note

note left of Issue::getIssueLabels
  Get the Issue Labels class

  since: 3.2.0
  return: IssueLabels
end note

note right of Issue::getMilestones
  Get the Milestones class

  since: 3.2.0
  return: Milestones
end note

note left of Issue::getReactions
  Get the Reactions class

  since: 3.2.0
  return: Reactions
end note

note right of Issue::getComment
  Get the Reactions Comment class

  since: 3.2.0
  return: Comment
end note

note left of Issue::getStopwatch
  Get the Stopwatch class

  since: 3.2.0
  return: Stopwatch
end note

note right of Issue::getSubscriptions
  Get the Subscriptions class

  since: 3.2.0
  return: Subscriptions
end note

note left of Issue::getTimeline
  Get the Timeline class

  since: 3.2.0
  return: Timeline
end note

note right of Issue::getTimes
  Get the Times class

  since: 3.2.0
  return: Times
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---44396eb8_e14c_47d9_9bdc_8205c0fd2bba---Power
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

