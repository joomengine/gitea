### JCB! Power
# final class Http (Details)
> namespace: **VDM\Joomla\Gitea\Utilities**
> extends: **JoomlaHttp**

```uml
@startuml

class Http << (F,LightGreen) >> #RoyalBlue {
  + __construct(?string $token = null, ?TransportInterface $transport = null)
  + setToken(string $token) : void
  + getToken() : ?string
}

note right of Http::__construct
  Constructor.

  since: 3.2.0
end note

note right of Http::setToken
  Change the Token.

  since: 3.2.0
  return: void
end note

note right of Http::getToken
  Get the Token.

  since: 3.2.0
  return: ?string
end note

@enduml
```

## Transport behavior (Power 1.1.0)

`Http` extends `Joomla\Http\Http`, the Framework HTTP client supported by Joomla 5/6, and uses Joomla's cURL or stream transport with certificate validation and automatic redirects disabled. The Socket fallback is deliberately excluded because it forwards authorization headers across redirects and ignores the redirect option. The first constructor argument remains the API token. An optional second `Joomla\Http\TransportInterface` argument allows a configured transport or test transport to be injected.

The old implicit `UnsafeCurl` dependency and component `allow_selfsigned_certificates` switch are no longer consulted. For a private certificate authority, configure a trusted CA in the environment/transport; applications requiring a custom transport must explicitly inject it. The client no longer depends on a component's global parameters to select its HTTP transport.

`setToken('')` removes authorization headers case-insensitively and `getToken()` returns `null`. Changing tokens preserves unrelated headers.

Injected transports must retain certificate validation and must not automatically follow redirects. Their own configuration is authoritative: arbitrary `TransportInterface` implementations may not share the HTTP client options. The built-in transports share the client Registry so per-request redirect settings take effect. With neither cURL nor URL-aware streams available, construction raises a clear `RuntimeException`.

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
Super---ce40b3d2_226c_4a64_b116_c19455822be1---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![GitHub](https://img.shields.io/badge/-Git-181717?logo=git)](https://github.com/joomengine "Build premium Joomla extensions with JoomEngine on GitHub: Help us raise Joomla extension standards!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/r/octoleo/joomengine "JoomEngine on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")