### JCB! Power
# class Repository (Details)
> namespace: **VDM\Joomla\Gitea\Service**

```uml
@startuml

class Repository  #Gold {
  + register(Container $container) : void
  + getRepository(Container $container) : Repo
  + getArchive(Container $container) : Archive
  + getAssignees(Container $container) : Assignees
  + getAttachments(Container $container) : Attachments
  + getBranch(Container $container) : Branch
  + getProtection(Container $container) : Protection
  + getCollaborator(Container $container) : Collaborator
  + getCommits(Container $container) : Commits
  + getContents(Container $container) : Contents
  + getForks(Container $container) : Forks
  + getGpg(Container $container) : Gpg
  + getHooks(Container $container) : Hooks
  + getGit(Container $container) : Git
  + getKeys(Container $container) : Keys
  + getLanguages(Container $container) : Languages
  + getMedia(Container $container) : Media
  + getMerge(Container $container) : Merge
  + getMirror(Container $container) : Mirror
  + getMirrors(Container $container) : Mirrors
  + getNotes(Container $container) : Notes
  + getPatch(Container $container) : Patch
  + getPulls(Container $container) : Pulls
  + getRefs(Container $container) : Refs
  + getReleases(Container $container) : Releases
  + getRemote(Container $container) : Remote
  + getReviewers(Container $container) : Reviewers
  + getReviews(Container $container) : Reviews
  + getStargazers(Container $container) : Stargazers
  + getStatuses(Container $container) : Statuses
  + getTags(Container $container) : Tags
  + getTeams(Container $container) : Teams
  + getTemplates(Container $container) : Templates
  + getTimes(Container $container) : Times
  + getTopics(Container $container) : Topics
  + getTransfer(Container $container) : Transfer
  + getTrees(Container $container) : Trees
  + getWatchers(Container $container) : Watchers
  + getWiki(Container $container) : Wiki
}

note right of Repository::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Repository::getRepository
  Get the Repository class

  since: 3.2.0
  return: Repo
end note

note right of Repository::getArchive
  Get the Archive class

  since: 3.2.0
  return: Archive
end note

note left of Repository::getAssignees
  Get the Assignees class

  since: 3.2.0
  return: Assignees
end note

note right of Repository::getAttachments
  Get the Attachments class

  since: 3.2.0
  return: Attachments
end note

note left of Repository::getBranch
  Get the Branch class

  since: 3.2.0
  return: Branch
end note

note right of Repository::getProtection
  Get the Branch Protection class

  since: 3.2.0
  return: Protection
end note

note left of Repository::getCollaborator
  Get the Collaborator class

  since: 3.2.0
  return: Collaborator
end note

note right of Repository::getCommits
  Get the Commits class

  since: 3.2.0
  return: Commits
end note

note left of Repository::getContents
  Get the Contents class

  since: 3.2.0
  return: Contents
end note

note right of Repository::getForks
  Get the Forks class

  since: 3.2.0
  return: Forks
end note

note left of Repository::getGpg
  Get the Gpg class

  since: 3.2.0
  return: Gpg
end note

note right of Repository::getHooks
  Get the Hooks class

  since: 3.2.0
  return: Hooks
end note

note left of Repository::getGit
  Get the Hooks Git class

  since: 3.2.0
  return: Git
end note

note right of Repository::getKeys
  Get the Keys class

  since: 3.2.0
  return: Keys
end note

note left of Repository::getLanguages
  Get the Languages class

  since: 3.2.0
  return: Languages
end note

note right of Repository::getMedia
  Get the Media class

  since: 3.2.0
  return: Media
end note

note left of Repository::getMerge
  Get the Merge class

  since: 3.2.0
  return: Merge
end note

note right of Repository::getMirror
  Get the Mirror class

  since: 3.2.0
  return: Mirror
end note

note left of Repository::getMirrors
  Get the Mirrors class

  since: 3.2.0
  return: Mirrors
end note

note right of Repository::getNotes
  Get the Notes class

  since: 3.2.0
  return: Notes
end note

note left of Repository::getPatch
  Get the Patch class

  since: 3.2.0
  return: Patch
end note

note right of Repository::getPulls
  Get the Pulls class

  since: 3.2.0
  return: Pulls
end note

note left of Repository::getRefs
  Get the Refs class

  since: 3.2.0
  return: Refs
end note

note right of Repository::getReleases
  Get the Releases class

  since: 3.2.0
  return: Releases
end note

note left of Repository::getRemote
  Get the Remote class

  since: 3.2.0
  return: Remote
end note

note right of Repository::getReviewers
  Get the Reviewers class

  since: 3.2.0
  return: Reviewers
end note

note left of Repository::getReviews
  Get the Reviews class

  since: 3.2.0
  return: Reviews
end note

note right of Repository::getStargazers
  Get the Stargazers class

  since: 3.2.0
  return: Stargazers
end note

note left of Repository::getStatuses
  Get the Statuses class

  since: 3.2.0
  return: Statuses
end note

note right of Repository::getTags
  Get the Tags class

  since: 3.2.0
  return: Tags
end note

note left of Repository::getTeams
  Get the Teams class

  since: 3.2.0
  return: Teams
end note

note right of Repository::getTemplates
  Get the Templates class

  since: 3.2.0
  return: Templates
end note

note left of Repository::getTimes
  Get the Times class

  since: 3.2.0
  return: Times
end note

note right of Repository::getTopics
  Get the Topics class

  since: 3.2.0
  return: Topics
end note

note left of Repository::getTransfer
  Get the Transfer class

  since: 3.2.0
  return: Transfer
end note

note right of Repository::getTrees
  Get the Trees class

  since: 3.2.0
  return: Trees
end note

note left of Repository::getWatchers
  Get the Watchers class

  since: 3.2.0
  return: Watchers
end note

note right of Repository::getWiki
  Get the Wiki class

  since: 3.2.0
  return: Wiki
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
Super---0bb2b72f_ebcd_46fe_844b_ac5fe715c230---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")