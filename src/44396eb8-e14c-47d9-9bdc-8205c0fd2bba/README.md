```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Issue (Details)
> namespace: **VastDevelopmentMethod\Joomla\Gitea\Service**
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

