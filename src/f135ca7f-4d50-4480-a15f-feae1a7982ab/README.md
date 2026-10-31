### JCB! Power
# class Gpg (Details)
> namespace: **VDM\Joomla\Gitea\User**
> extends: **Api**

```uml
@startuml

class Gpg #Gold {
  + createGPGKey(string $armoredPublicKey, ?string $armoredSignature = null) : ?object
  + get(int $id) : ?object
  + token() : ?string
  + verify(string $armoredPublicKey, ?string $armoredSignature = null) : ?object
  + verifyKey(string $keyId, string $armoredSignature) : ?object
  + list(int $page = 1, int $limit = 10) : ?array
  + remove(int $id) : string
}

note right of Gpg::createGPGKey
  return: ?object
  arguments:
    string $armoredPublicKey
    ?string $armoredSignature = null
end note

note right of Gpg::get
  return: ?object
  arguments:
    int $id
end note

note right of Gpg::token
  return: ?string
end note

note right of Gpg::verify
  return: ?object
  arguments:
    string $armoredPublicKey
    ?string $armoredSignature = null
end note

note right of Gpg::verifyKey
  return: ?object
  arguments:
    string $keyId
    string $armoredSignature
end note

note right of Gpg::list
  return: ?array
  arguments:
    int $page = 1
    int $limit = 10
end note

note right of Gpg::remove
  return: string
  arguments:
    int $id
end note

@enduml
```

## Gitea 28.2.0 maintenance

Use `verifyKey($keyId, $armoredSignature)` to verify an existing key: retrieve `token()`, sign it with that GPG key, and provide the armored signature. The old `verify($armoredPublicKey)` could never satisfy Gitea's required body. It remains as a deprecated adapter: its first argument now holds the key ID and the appended signature is required. The handler at Gitea 28.2.0 returns 200 while Swagger advertises 201; both are accepted. Token bytes are returned without JSON conversion.

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
Super---f135ca7f_4d50_4480_a15f_feae1a7982ab---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![GitHub](https://img.shields.io/badge/-Git-181717?logo=git)](https://github.com/joomengine "Build premium Joomla extensions with JoomEngine on GitHub: Help us raise Joomla extension standards!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/r/octoleo/joomengine "JoomEngine on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")