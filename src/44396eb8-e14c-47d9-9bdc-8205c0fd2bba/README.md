### JCB! Power
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

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---44396eb8_e14c_47d9_9bdc_8205c0fd2bba---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")