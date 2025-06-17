### JCB! Power
# class Protection (Details)
> namespace: **VDM\Joomla\Gitea\Repository\Branch**
> extends: **Api**

```uml
@startuml

class Protection  #Gold {
  + list(string $ownerName, string $repositoryName) : ?array
  + create(string $owner, string $repo, ...) : ?object
  + get(string $owner, string $repo, ...) : ?object
  + delete(string $ownerName, string $repoName, ...) : string
  + edit(string $owner, string $repo, ...) : ?object
}

note right of Protection::list
  List branch protections for a repository.

  since: 3.2.0
  return: ?array
end note

note right of Protection::create
  Create a branch protection for a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $branchName
    array $approvalsWhitelistUsernames
    array $approvalsWhitelistTeams
    bool $blockOnOfficialReviewRequests = false
    bool $blockOnOutdatedBranch = false
    bool $blockOnRejectedReviews = false
    bool $dismissStaleApprovals = false
    bool $enableApprovalsWhitelist = false
    bool $enableMergeWhitelist = false
    bool $enablePush = true
    bool $enablePushWhitelist = false
    bool $enableStatusCheck = false
    array $mergeWhitelistUsernames = []
    array $mergeWhitelistTeams = []
    string $protectedFilePatterns = ''
    bool $pushWhitelistDeployKeys = false
    array $pushWhitelistUsernames = []
    array $pushWhitelistTeams = []
    bool $requireSignedCommits = false
    int $requiredApprovals
    array $statusCheckContexts = []
    string $unprotectedFilePatterns = ''
end note

note right of Protection::get
  Get a specific branch protection for the repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $branchName
end note

note right of Protection::delete
  Delete a specific branch protection for the repository.

  since: 3.2.0
  return: string
  
  arguments:
    string $ownerName
    string $repoName
    string $branchName
end note

note right of Protection::edit
  Edit a branch protection for a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $name
    ?array $approvalsWhitelistTeams = null
    ?array $approvalsWhitelistUsernames = null
    ?bool $blockOnOfficialReviewRequests = null
    ?bool $blockOnOutdatedBranch = null
    ?bool $blockOnRejectedReviews = null
    ?bool $dismissStaleApprovals = null
    ?bool $enableApprovalsWhitelist = null
    ?bool $enableMergeWhitelist = null
    ?bool $enablePush = null
    ?bool $enablePushWhitelist = null
    ?bool $enableStatusCheck = null
    ?array $mergeWhitelistTeams = null
    ?array $mergeWhitelistUsernames = null
    ?string $protectedFilePatterns = null
    ?bool $pushWhitelistDeployKeys = null
    ?array $pushWhitelistTeams = null
    ?array $pushWhitelistUsernames = null
    ?bool $requireSignedCommits = null
    ?int $requiredApprovals = null
    ?array $statusCheckContexts = null
    ?string $unprotectedFilePatterns = null
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
Super---0edb3d51_0a65_443b_883d_3d20325212bb---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")