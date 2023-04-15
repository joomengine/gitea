```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
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

