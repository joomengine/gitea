### JCB! Power
# class Issue (Details)
> namespace: **VDM\Joomla\Gitea**
> extends: **Api**

```uml
@startuml

class Issue  #Gold {
  + list(string $owner, string $repo, ...) : ?array
  + get(string $owner, string $repo, ...) : ?object
  + create(string $owner, string $repo, ...) : ?object
  + search(string $q, int $page = 1, ...) : ?array
  + edit(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : string
}

note right of Issue::list
  List a repository's issues.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    string $state = 'open'
    int $page = 1
    int $limit = 10
    ?string $labels = null
    ?string $q = null
    ?string $type = null
    ?string $milestones = null
    ?string $since = null
    ?string $before = null
    ?string $createdBy = null
    ?string $assignedBy = null
    ?string $mentionedBy = null
end note

note right of Issue::get
  Get an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
end note

note right of Issue::create
  Create an issue. If using deadline only the date will be taken into account, and time of day ignored.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $issueTitle
    ?array $assignees = null
    ?string $issueBody = null
    ?bool $closed = null
    ?string $dueDate = null
    ?array $labelIds = null
    ?int $milestoneId = null
end note

note right of Issue::search
  Search for issues across the repositories that the user has access to.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $q
    int $page = 1
    int $limit = 10
    ?string $state = 'open'
    ?string $labels = null
    ?string $milestones = null
    ?int $priorityRepoId = null
    ?string $type = null
    ?string $since = null
    ?string $before = null
    ?bool $assigned = null
    ?bool $created = null
    ?bool $mentioned = null
    ?bool $reviewRequested = null
    ?string $owner = null
    ?string $team = null
end note

note right of Issue::edit
  Edit an issue.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    int $index
    ?string $assignee = null
    ?array $assignees = null
    ?string $body = null
    ?string $dueDate = null
    ?int $milestone = null
    ?string $ref = null
    ?string $state = null
    ?string $title = null
    ?bool $unsetDueDate = null
end note

note right of Issue::delete
  Delete an issue.

  since: 3.2.0
  return: string
  
  arguments:
    string $owner
    string $repo
    int $index
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
Super---5c8f9038_d6e9_4788_96df_45019eafbadb---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")