# JCB! Super Powers

### What Are JCB Super Powers?
In simple terms, **JCB Super Powers are PHP classes** — but managed entirely from the Joomla Component Builder (JCB) interface.

You can use JCB to create your own:
- **Classes**
- **Interfaces**
- **Abstract classes**
- **Traits**
- **Final classes**

These are full-featured PHP code units that you define visually in the JCB GUI. JCB then takes care of:
- Proper **namespacing**
- Correct **file placement**
- Seamless **project integration**

Every Super Power is treated as a reusable unit of logic. It can be automatically injected into any part of your JCB-powered component, or used in other components or codebases via a **SPK** (Super Power Key).

Even better — you can use **dynamic placeholders** like [[[`NamespacePrefix`]]] or [[[`ComponentNamespace`]]] in your Super Power code Namespace. These automatically adapt when reused in different projects, making your logic portable and future-proof.

> In short: **Super Powers turn JCB into a PHP code factory** — giving you the power of advanced PHP with none of the manual file management.

To learn how to create, manage, and use Super Powers, see the  
[Super Powers Documentation →](https://git.vdm.dev/joomla/super-powers/wiki)

### What Can I Find Here?
This repository acts as a **central registry of approved Super Powers** specific to this JCB instance.  
Only the Super Powers that have been explicitly assigned to this repository are listed here.

In JCB, you can organize your Super Powers across multiple repositories.  
For example, we have separate repositories for:

- [GITEA](https://git.vdm.dev/joomla/gitea)-related classes
- [OpenAI](https://git.vdm.dev/joomla/openai) integrations
- Core [Super Power](https://git.vdm.dev/joomla/super-powers) collection
- and many more...

Each repository maintains its own index, and only the powers assigned to that specific repository will appear in its list.
#### How to Use These Super Powers
If you want to use any of the classes listed here in your own component logic, simply reference their **SPK** (Super Power Key):

```
Super---[unique-guid]---Power
```

> Replace each `---` with `___` when using the key inside your code.

JCB will automatically resolve this SPK during compilation, placing the associated class in the correct location with the correct namespace based on your component context.  
This makes your logic both **reusable** and **component-aware**, without hardcoding anything.

---
# Index of powers

- **Namespace**: [VDM\Joomla\Gitea](#vdm-joomla-gitea)

  - **abstract class Factory** | [Details](src/4612af84-5a42-4ea5-87bf-9d79cc19c330) | [Raw](src/4612af84-5a42-4ea5-87bf-9d79cc19c330/code.power) | [Settings](src/4612af84-5a42-4ea5-87bf-9d79cc19c330/settings.json) | SPK: `Super---4612af84_5a42_4ea5_87bf_9d79cc19c330---Power`
  - **class Issue** | [Details](src/5c8f9038-d6e9-4788-96df-45019eafbadb) | [Raw](src/5c8f9038-d6e9-4788-96df-45019eafbadb/code.power) | [Settings](src/5c8f9038-d6e9-4788-96df-45019eafbadb/settings.json) | SPK: `Super---5c8f9038_d6e9_4788_96df_45019eafbadb---Power`
  - **class Labels** | [Details](src/ca53d4cb-7800-4ea2-b06e-7466ded91e49) | [Raw](src/ca53d4cb-7800-4ea2-b06e-7466ded91e49/code.power) | [Settings](src/ca53d4cb-7800-4ea2-b06e-7466ded91e49/settings.json) | SPK: `Super---ca53d4cb_7800_4ea2_b06e_7466ded91e49---Power`
  - **class Notifications** | [Details](src/c8cbc9bd-ee91-403a-8633-0e8b59619a49) | [Raw](src/c8cbc9bd-ee91-403a-8633-0e8b59619a49/code.power) | [Settings](src/c8cbc9bd-ee91-403a-8633-0e8b59619a49/settings.json) | SPK: `Super---c8cbc9bd_ee91_403a_8633_0e8b59619a49---Power`
  - **class Organization** | [Details](src/8efd9070-7110-4b8e-bb76-cb1a286d5af2) | [Raw](src/8efd9070-7110-4b8e-bb76-cb1a286d5af2/code.power) | [Settings](src/8efd9070-7110-4b8e-bb76-cb1a286d5af2/settings.json) | SPK: `Super---8efd9070_7110_4b8e_bb76_cb1a286d5af2---Power`
  - **class Package** | [Details](src/b7ec675d-3197-4458-89d6-ca5d4303af8a) | [Raw](src/b7ec675d-3197-4458-89d6-ca5d4303af8a/code.power) | [Settings](src/b7ec675d-3197-4458-89d6-ca5d4303af8a/settings.json) | SPK: `Super---b7ec675d_3197_4458_89d6_ca5d4303af8a---Power`
  - **class Repository** | [Details](src/eb6c050d-7100-42b8-a922-f7e7c78a08c2) | [Raw](src/eb6c050d-7100-42b8-a922-f7e7c78a08c2/code.power) | [Settings](src/eb6c050d-7100-42b8-a922-f7e7c78a08c2/settings.json) | SPK: `Super---eb6c050d_7100_42b8_a922_f7e7c78a08c2---Power`
  - **class User** | [Details](src/4a5694db-bf3c-439b-bf9c-36a487828787) | [Raw](src/4a5694db-bf3c-439b-bf9c-36a487828787/code.power) | [Settings](src/4a5694db-bf3c-439b-bf9c-36a487828787/settings.json) | SPK: `Super---4a5694db_bf3c_439b_bf9c_36a487828787---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Service](#vdm-joomla-componentbuilder-service)

  - **class Gitea** | [Details](src/71acf8d6-32b8-4173-8277-eb9cda29fd64) | [Raw](src/71acf8d6-32b8-4173-8277-eb9cda29fd64/code.power) | [Settings](src/71acf8d6-32b8-4173-8277-eb9cda29fd64/settings.json) | SPK: `Super---71acf8d6_32b8_4173_8277_eb9cda29fd64---Power`
- **Namespace**: [VDM\Joomla\Gitea\Abstraction](#vdm-joomla-gitea-abstraction)

  - **abstract class Api** | [Details](src/3d7af7a2-dabe-4111-b5fd-c5bfa8755469) | [Raw](src/3d7af7a2-dabe-4111-b5fd-c5bfa8755469/code.power) | [Settings](src/3d7af7a2-dabe-4111-b5fd-c5bfa8755469/settings.json) | SPK: `Super---3d7af7a2_dabe_4111_b5fd_c5bfa8755469---Power`
- **Namespace**: [VDM\Joomla\Gitea\Admin](#vdm-joomla-gitea-admin)

  - **class Cron** | [Details](src/6e1a6731-2587-4ad5-8e70-ca83eba65ee0) | [Raw](src/6e1a6731-2587-4ad5-8e70-ca83eba65ee0/code.power) | [Settings](src/6e1a6731-2587-4ad5-8e70-ca83eba65ee0/settings.json) | SPK: `Super---6e1a6731_2587_4ad5_8e70_ca83eba65ee0---Power`
  - **class Organizations** | [Details](src/5d42c91a-6e4d-4c26-80d7-1b1d27cb35e0) | [Raw](src/5d42c91a-6e4d-4c26-80d7-1b1d27cb35e0/code.power) | [Settings](src/5d42c91a-6e4d-4c26-80d7-1b1d27cb35e0/settings.json) | SPK: `Super---5d42c91a_6e4d_4c26_80d7_1b1d27cb35e0---Power`
  - **class Unadopted** | [Details](src/3aba9610-cb22-48e0-b2d7-2a9e708c82e2) | [Raw](src/3aba9610-cb22-48e0-b2d7-2a9e708c82e2/code.power) | [Settings](src/3aba9610-cb22-48e0-b2d7-2a9e708c82e2/settings.json) | SPK: `Super---3aba9610_cb22_48e0_b2d7_2a9e708c82e2---Power`
  - **class Users** | [Details](src/e7c810a1-3d6a-42e4-b45f-bee554f259b3) | [Raw](src/e7c810a1-3d6a-42e4-b45f-bee554f259b3/code.power) | [Settings](src/e7c810a1-3d6a-42e4-b45f-bee554f259b3/settings.json) | SPK: `Super---e7c810a1_3d6a_42e4_b45f_bee554f259b3---Power`
- **Namespace**: [VDM\Joomla\Gitea\Issue](#vdm-joomla-gitea-issue)

  - **class Comments** | [Details](src/22d65693-917d-47c7-ba5c-8e1f354dc713) | [Raw](src/22d65693-917d-47c7-ba5c-8e1f354dc713/code.power) | [Settings](src/22d65693-917d-47c7-ba5c-8e1f354dc713/settings.json) | SPK: `Super---22d65693_917d_47c7_ba5c_8e1f354dc713---Power`
  - **class Deadline** | [Details](src/61ddd1b9-4b74-44bd-a7ee-f743cd4c2f69) | [Raw](src/61ddd1b9-4b74-44bd-a7ee-f743cd4c2f69/code.power) | [Settings](src/61ddd1b9-4b74-44bd-a7ee-f743cd4c2f69/settings.json) | SPK: `Super---61ddd1b9_4b74_44bd_a7ee_f743cd4c2f69---Power`
  - **class Labels** | [Details](src/e819d1a2-4390-432d-be36-3421f2fa861c) | [Raw](src/e819d1a2-4390-432d-be36-3421f2fa861c/code.power) | [Settings](src/e819d1a2-4390-432d-be36-3421f2fa861c/settings.json) | SPK: `Super---e819d1a2_4390_432d_be36_3421f2fa861c---Power`
  - **class Milestones** | [Details](src/f428beab-10f4-4c0d-bb9e-8c797ed7a7c9) | [Raw](src/f428beab-10f4-4c0d-bb9e-8c797ed7a7c9/code.power) | [Settings](src/f428beab-10f4-4c0d-bb9e-8c797ed7a7c9/settings.json) | SPK: `Super---f428beab_10f4_4c0d_bb9e_8c797ed7a7c9---Power`
  - **class Reactions** | [Details](src/e6c2dee6-54b9-4476-8896-2bfa14a87650) | [Raw](src/e6c2dee6-54b9-4476-8896-2bfa14a87650/code.power) | [Settings](src/e6c2dee6-54b9-4476-8896-2bfa14a87650/settings.json) | SPK: `Super---e6c2dee6_54b9_4476_8896_2bfa14a87650---Power`
  - **class Stopwatch** | [Details](src/a68d1841-65bb-41c8-ac09-cfddf73bb822) | [Raw](src/a68d1841-65bb-41c8-ac09-cfddf73bb822/code.power) | [Settings](src/a68d1841-65bb-41c8-ac09-cfddf73bb822/settings.json) | SPK: `Super---a68d1841_65bb_41c8_ac09_cfddf73bb822---Power`
  - **class Subscriptions** | [Details](src/acca507d-e632-4349-9e3a-9dba5d19fbf9) | [Raw](src/acca507d-e632-4349-9e3a-9dba5d19fbf9/code.power) | [Settings](src/acca507d-e632-4349-9e3a-9dba5d19fbf9/settings.json) | SPK: `Super---acca507d_e632_4349_9e3a_9dba5d19fbf9---Power`
  - **class Timeline** | [Details](src/83bb983b-80d8-44d5-917b-03d3c13742b9) | [Raw](src/83bb983b-80d8-44d5-917b-03d3c13742b9/code.power) | [Settings](src/83bb983b-80d8-44d5-917b-03d3c13742b9/settings.json) | SPK: `Super---83bb983b_80d8_44d5_917b_03d3c13742b9---Power`
  - **class Times** | [Details](src/d273c34e-88c1-438b-98c0-801996f58c29) | [Raw](src/d273c34e-88c1-438b-98c0-801996f58c29/code.power) | [Settings](src/d273c34e-88c1-438b-98c0-801996f58c29/settings.json) | SPK: `Super---d273c34e_88c1_438b_98c0_801996f58c29---Power`
- **Namespace**: [VDM\Joomla\Gitea\Miscellaneous](#vdm-joomla-gitea-miscellaneous)

  - **class Activitypub** | [Details](src/9ae44ddd-9d69-4298-a50b-05129cbebb76) | [Raw](src/9ae44ddd-9d69-4298-a50b-05129cbebb76/code.power) | [Settings](src/9ae44ddd-9d69-4298-a50b-05129cbebb76/settings.json) | SPK: `Super---9ae44ddd_9d69_4298_a50b_05129cbebb76---Power`
  - **class Gpg** | [Details](src/5974503e-e56c-488b-bee3-f93b90c781df) | [Raw](src/5974503e-e56c-488b-bee3-f93b90c781df/code.power) | [Settings](src/5974503e-e56c-488b-bee3-f93b90c781df/settings.json) | SPK: `Super---5974503e_e56c_488b_bee3_f93b90c781df---Power`
  - **class Markdown** | [Details](src/8f1a0130-e555-4e6a-9fa8-9b99e30b39fa) | [Raw](src/8f1a0130-e555-4e6a-9fa8-9b99e30b39fa/code.power) | [Settings](src/8f1a0130-e555-4e6a-9fa8-9b99e30b39fa/settings.json) | SPK: `Super---8f1a0130_e555_4e6a_9fa8_9b99e30b39fa---Power`
  - **class NodeInfo** | [Details](src/2cc6543d-b8c7-4bb9-8845-bfae2fb7a71f) | [Raw](src/2cc6543d-b8c7-4bb9-8845-bfae2fb7a71f/code.power) | [Settings](src/2cc6543d-b8c7-4bb9-8845-bfae2fb7a71f/settings.json) | SPK: `Super---2cc6543d_b8c7_4bb9_8845_bfae2fb7a71f---Power`
  - **class Version** | [Details](src/7fb2cd98-a87d-4f48-9720-033924c69e34) | [Raw](src/7fb2cd98-a87d-4f48-9720-033924c69e34/code.power) | [Settings](src/7fb2cd98-a87d-4f48-9720-033924c69e34/settings.json) | SPK: `Super---7fb2cd98_a87d_4f48_9720_033924c69e34---Power`
- **Namespace**: [VDM\Joomla\Gitea\Notifications](#vdm-joomla-gitea-notifications)

  - **class Repository** | [Details](src/3a4ce297-4536-45be-b3cc-d93474e55528) | [Raw](src/3a4ce297-4536-45be-b3cc-d93474e55528/code.power) | [Settings](src/3a4ce297-4536-45be-b3cc-d93474e55528/settings.json) | SPK: `Super---3a4ce297_4536_45be_b3cc_d93474e55528---Power`
  - **class Thread** | [Details](src/db14e345-c3d9-4dda-8534-4963cd6ca6f5) | [Raw](src/db14e345-c3d9-4dda-8534-4963cd6ca6f5/code.power) | [Settings](src/db14e345-c3d9-4dda-8534-4963cd6ca6f5/settings.json) | SPK: `Super---db14e345_c3d9_4dda_8534_4963cd6ca6f5---Power`
- **Namespace**: [VDM\Joomla\Gitea\Organization](#vdm-joomla-gitea-organization)

  - **class Hooks** | [Details](src/605d7058-345b-411e-b55d-027edc1ded83) | [Raw](src/605d7058-345b-411e-b55d-027edc1ded83/code.power) | [Settings](src/605d7058-345b-411e-b55d-027edc1ded83/settings.json) | SPK: `Super---605d7058_345b_411e_b55d_027edc1ded83---Power`
  - **class Labels** | [Details](src/9c9ba4c4-2039-4396-9ea2-621e42e04c89) | [Raw](src/9c9ba4c4-2039-4396-9ea2-621e42e04c89/code.power) | [Settings](src/9c9ba4c4-2039-4396-9ea2-621e42e04c89/settings.json) | SPK: `Super---9c9ba4c4_2039_4396_9ea2_621e42e04c89---Power`
  - **class Members** | [Details](src/c1be1e0d-479d-44de-bfe4-cfa4ded7e240) | [Raw](src/c1be1e0d-479d-44de-bfe4-cfa4ded7e240/code.power) | [Settings](src/c1be1e0d-479d-44de-bfe4-cfa4ded7e240/settings.json) | SPK: `Super---c1be1e0d_479d_44de_bfe4_cfa4ded7e240---Power`
  - **class PublicMembers** | [Details](src/2a6f99df-a327-4477-8079-f57133e6ff36) | [Raw](src/2a6f99df-a327-4477-8079-f57133e6ff36/code.power) | [Settings](src/2a6f99df-a327-4477-8079-f57133e6ff36/settings.json) | SPK: `Super---2a6f99df_a327_4477_8079_f57133e6ff36---Power`
  - **class Repository** | [Details](src/aeb42050-90e1-4169-907a-fa6cde20caa4) | [Raw](src/aeb42050-90e1-4169-907a-fa6cde20caa4/code.power) | [Settings](src/aeb42050-90e1-4169-907a-fa6cde20caa4/settings.json) | SPK: `Super---aeb42050_90e1_4169_907a_fa6cde20caa4---Power`
  - **class Teams** | [Details](src/9c886ee5-ff14-44c3-a3dd-6a30ebf32ca3) | [Raw](src/9c886ee5-ff14-44c3-a3dd-6a30ebf32ca3/code.power) | [Settings](src/9c886ee5-ff14-44c3-a3dd-6a30ebf32ca3/settings.json) | SPK: `Super---9c886ee5_ff14_44c3_a3dd_6a30ebf32ca3---Power`
  - **class User** | [Details](src/b3f6728b-8c88-4ee8-9aa0-bcef400a35bf) | [Raw](src/b3f6728b-8c88-4ee8-9aa0-bcef400a35bf/code.power) | [Settings](src/b3f6728b-8c88-4ee8-9aa0-bcef400a35bf/settings.json) | SPK: `Super---b3f6728b_8c88_4ee8_9aa0_bcef400a35bf---Power`
- **Namespace**: [VDM\Joomla\Gitea\Package](#vdm-joomla-gitea-package)

  - **class Files** | [Details](src/4a54c21f-ac3a-4489-b507-636835541a67) | [Raw](src/4a54c21f-ac3a-4489-b507-636835541a67/code.power) | [Settings](src/4a54c21f-ac3a-4489-b507-636835541a67/settings.json) | SPK: `Super---4a54c21f_ac3a_4489_b507_636835541a67---Power`
  - **class Owner** | [Details](src/b5ca512b-f667-4ec6-bc6e-914af41d344a) | [Raw](src/b5ca512b-f667-4ec6-bc6e-914af41d344a/code.power) | [Settings](src/b5ca512b-f667-4ec6-bc6e-914af41d344a/settings.json) | SPK: `Super---b5ca512b_f667_4ec6_bc6e_914af41d344a---Power`
- **Namespace**: [VDM\Joomla\Gitea\Repository](#vdm-joomla-gitea-repository)

  - **class Archive** | [Details](src/8a8fce09-a880-4364-a8c4-4ca337e7e951) | [Raw](src/8a8fce09-a880-4364-a8c4-4ca337e7e951/code.power) | [Settings](src/8a8fce09-a880-4364-a8c4-4ca337e7e951/settings.json) | SPK: `Super---8a8fce09_a880_4364_a8c4_4ca337e7e951---Power`
  - **class Assignees** | [Details](src/66f866a7-f3a0-40ac-ac94-168d60c4a643) | [Raw](src/66f866a7-f3a0-40ac-ac94-168d60c4a643/code.power) | [Settings](src/66f866a7-f3a0-40ac-ac94-168d60c4a643/settings.json) | SPK: `Super---66f866a7_f3a0_40ac_ac94_168d60c4a643---Power`
  - **class Attachments** | [Details](src/68f930bc-d24f-4ade-bcec-576f82c3c13d) | [Raw](src/68f930bc-d24f-4ade-bcec-576f82c3c13d/code.power) | [Settings](src/68f930bc-d24f-4ade-bcec-576f82c3c13d/settings.json) | SPK: `Super---68f930bc_d24f_4ade_bcec_576f82c3c13d---Power`
  - **class Branch** | [Details](src/8fd54ec5-d93e-445c-ae27-80b6052dbddd) | [Raw](src/8fd54ec5-d93e-445c-ae27-80b6052dbddd/code.power) | [Settings](src/8fd54ec5-d93e-445c-ae27-80b6052dbddd/settings.json) | SPK: `Super---8fd54ec5_d93e_445c_ae27_80b6052dbddd---Power`
  - **class Collaborator** | [Details](src/e5d342ee-caf9-4b29-b7b6-2b81a8ef58cf) | [Raw](src/e5d342ee-caf9-4b29-b7b6-2b81a8ef58cf/code.power) | [Settings](src/e5d342ee-caf9-4b29-b7b6-2b81a8ef58cf/settings.json) | SPK: `Super---e5d342ee_caf9_4b29_b7b6_2b81a8ef58cf---Power`
  - **class Commits** | [Details](src/daa18d45-3d4a-4280-b58c-147683e8093c) | [Raw](src/daa18d45-3d4a-4280-b58c-147683e8093c/code.power) | [Settings](src/daa18d45-3d4a-4280-b58c-147683e8093c/settings.json) | SPK: `Super---daa18d45_3d4a_4280_b58c_147683e8093c---Power`
  - **class Contents** | [Details](src/8d1baef6-fcad-49a9-848f-428009cdb989) | [Raw](src/8d1baef6-fcad-49a9-848f-428009cdb989/code.power) | [Settings](src/8d1baef6-fcad-49a9-848f-428009cdb989/settings.json) | SPK: `Super---8d1baef6_fcad_49a9_848f_428009cdb989---Power`
  - **class Forks** | [Details](src/7fbed5f9-54a2-4001-a0d1-4621034166ef) | [Raw](src/7fbed5f9-54a2-4001-a0d1-4621034166ef/code.power) | [Settings](src/7fbed5f9-54a2-4001-a0d1-4621034166ef/settings.json) | SPK: `Super---7fbed5f9_54a2_4001_a0d1_4621034166ef---Power`
  - **class Gpg** | [Details](src/93f4bc91-946d-447a-ab5a-4f76e0e1a9ce) | [Raw](src/93f4bc91-946d-447a-ab5a-4f76e0e1a9ce/code.power) | [Settings](src/93f4bc91-946d-447a-ab5a-4f76e0e1a9ce/settings.json) | SPK: `Super---93f4bc91_946d_447a_ab5a_4f76e0e1a9ce---Power`
  - **class Hooks** | [Details](src/463ce0a3-65e0-4a08-8bd2-e3bd0a058488) | [Raw](src/463ce0a3-65e0-4a08-8bd2-e3bd0a058488/code.power) | [Settings](src/463ce0a3-65e0-4a08-8bd2-e3bd0a058488/settings.json) | SPK: `Super---463ce0a3_65e0_4a08_8bd2_e3bd0a058488---Power`
  - **class Keys** | [Details](src/501fbf08-9f56-4aa0-96d7-5905b511be08) | [Raw](src/501fbf08-9f56-4aa0-96d7-5905b511be08/code.power) | [Settings](src/501fbf08-9f56-4aa0-96d7-5905b511be08/settings.json) | SPK: `Super---501fbf08_9f56_4aa0_96d7_5905b511be08---Power`
  - **class Languages** | [Details](src/c140a62c-ea7b-470f-b8ca-83cfbcdd13ba) | [Raw](src/c140a62c-ea7b-470f-b8ca-83cfbcdd13ba/code.power) | [Settings](src/c140a62c-ea7b-470f-b8ca-83cfbcdd13ba/settings.json) | SPK: `Super---c140a62c_ea7b_470f_b8ca_83cfbcdd13ba---Power`
  - **class Media** | [Details](src/c0ee5592-e49f-4937-9b13-f4352afcb430) | [Raw](src/c0ee5592-e49f-4937-9b13-f4352afcb430/code.power) | [Settings](src/c0ee5592-e49f-4937-9b13-f4352afcb430/settings.json) | SPK: `Super---c0ee5592_e49f_4937_9b13_f4352afcb430---Power`
  - **class Merge** | [Details](src/0f99429a-b517-40ac-a3c1-34c3ef2f36ee) | [Raw](src/0f99429a-b517-40ac-a3c1-34c3ef2f36ee/code.power) | [Settings](src/0f99429a-b517-40ac-a3c1-34c3ef2f36ee/settings.json) | SPK: `Super---0f99429a_b517_40ac_a3c1_34c3ef2f36ee---Power`
  - **class Mirror** | [Details](src/f6249c33-b4bd-4598-8710-0cab230aef94) | [Raw](src/f6249c33-b4bd-4598-8710-0cab230aef94/code.power) | [Settings](src/f6249c33-b4bd-4598-8710-0cab230aef94/settings.json) | SPK: `Super---f6249c33_b4bd_4598_8710_0cab230aef94---Power`
  - **class Mirrors** | [Details](src/403855fb-668d-464a-af45-8e30b198c9d6) | [Raw](src/403855fb-668d-464a-af45-8e30b198c9d6/code.power) | [Settings](src/403855fb-668d-464a-af45-8e30b198c9d6/settings.json) | SPK: `Super---403855fb_668d_464a_af45_8e30b198c9d6---Power`
  - **class Notes** | [Details](src/cf8fa194-9f83-4a2a-b52b-ede069188afe) | [Raw](src/cf8fa194-9f83-4a2a-b52b-ede069188afe/code.power) | [Settings](src/cf8fa194-9f83-4a2a-b52b-ede069188afe/settings.json) | SPK: `Super---cf8fa194_9f83_4a2a_b52b_ede069188afe---Power`
  - **class Patch** | [Details](src/1dda1c2c-1670-4aea-a6b8-49f0bd03b41e) | [Raw](src/1dda1c2c-1670-4aea-a6b8-49f0bd03b41e/code.power) | [Settings](src/1dda1c2c-1670-4aea-a6b8-49f0bd03b41e/settings.json) | SPK: `Super---1dda1c2c_1670_4aea_a6b8_49f0bd03b41e---Power`
  - **class Pulls** | [Details](src/f56114fd-6804-4ce9-8adb-1d521f023c11) | [Raw](src/f56114fd-6804-4ce9-8adb-1d521f023c11/code.power) | [Settings](src/f56114fd-6804-4ce9-8adb-1d521f023c11/settings.json) | SPK: `Super---f56114fd_6804_4ce9_8adb_1d521f023c11---Power`
  - **class Refs** | [Details](src/974d9e4c-beef-4c35-a3c6-92b1dd5b145d) | [Raw](src/974d9e4c-beef-4c35-a3c6-92b1dd5b145d/code.power) | [Settings](src/974d9e4c-beef-4c35-a3c6-92b1dd5b145d/settings.json) | SPK: `Super---974d9e4c_beef_4c35_a3c6_92b1dd5b145d---Power`
  - **class Releases** | [Details](src/754d737c-3b6f-43f0-8974-2e06a3daf41e) | [Raw](src/754d737c-3b6f-43f0-8974-2e06a3daf41e/code.power) | [Settings](src/754d737c-3b6f-43f0-8974-2e06a3daf41e/settings.json) | SPK: `Super---754d737c_3b6f_43f0_8974_2e06a3daf41e---Power`
  - **class Remote** | [Details](src/994f4ffe-6030-4bfd-a0b1-4e1aa54bb8cd) | [Raw](src/994f4ffe-6030-4bfd-a0b1-4e1aa54bb8cd/code.power) | [Settings](src/994f4ffe-6030-4bfd-a0b1-4e1aa54bb8cd/settings.json) | SPK: `Super---994f4ffe_6030_4bfd_a0b1_4e1aa54bb8cd---Power`
  - **class Reviewers** | [Details](src/65288a04-bcac-4067-ae2b-6fda9f1e3fd5) | [Raw](src/65288a04-bcac-4067-ae2b-6fda9f1e3fd5/code.power) | [Settings](src/65288a04-bcac-4067-ae2b-6fda9f1e3fd5/settings.json) | SPK: `Super---65288a04_bcac_4067_ae2b_6fda9f1e3fd5---Power`
  - **class Reviews** | [Details](src/6a2fffb5-63ff-4a96-b458-632a5ff90814) | [Raw](src/6a2fffb5-63ff-4a96-b458-632a5ff90814/code.power) | [Settings](src/6a2fffb5-63ff-4a96-b458-632a5ff90814/settings.json) | SPK: `Super---6a2fffb5_63ff_4a96_b458_632a5ff90814---Power`
  - **class Stargazers** | [Details](src/4b355731-bbcc-430f-a451-f94ff9bb1c20) | [Raw](src/4b355731-bbcc-430f-a451-f94ff9bb1c20/code.power) | [Settings](src/4b355731-bbcc-430f-a451-f94ff9bb1c20/settings.json) | SPK: `Super---4b355731_bbcc_430f_a451_f94ff9bb1c20---Power`
  - **class Statuses** | [Details](src/5f01760a-de24-49f7-b08e-d340c847f86a) | [Raw](src/5f01760a-de24-49f7-b08e-d340c847f86a/code.power) | [Settings](src/5f01760a-de24-49f7-b08e-d340c847f86a/settings.json) | SPK: `Super---5f01760a_de24_49f7_b08e_d340c847f86a---Power`
  - **class Tags** | [Details](src/caf25475-8c9e-4e07-a7f5-f606e98ec880) | [Raw](src/caf25475-8c9e-4e07-a7f5-f606e98ec880/code.power) | [Settings](src/caf25475-8c9e-4e07-a7f5-f606e98ec880/settings.json) | SPK: `Super---caf25475_8c9e_4e07_a7f5_f606e98ec880---Power`
  - **class Teams** | [Details](src/c7b31fc2-892b-4235-beb2-3413e4432839) | [Raw](src/c7b31fc2-892b-4235-beb2-3413e4432839/code.power) | [Settings](src/c7b31fc2-892b-4235-beb2-3413e4432839/settings.json) | SPK: `Super---c7b31fc2_892b_4235_beb2_3413e4432839---Power`
  - **class Templates** | [Details](src/8c82b705-04bb-4bd2-ac09-3f590fdf48c2) | [Raw](src/8c82b705-04bb-4bd2-ac09-3f590fdf48c2/code.power) | [Settings](src/8c82b705-04bb-4bd2-ac09-3f590fdf48c2/settings.json) | SPK: `Super---8c82b705_04bb_4bd2_ac09_3f590fdf48c2---Power`
  - **class Times** | [Details](src/d7b67b1c-f876-4555-9e54-0645cf519d4c) | [Raw](src/d7b67b1c-f876-4555-9e54-0645cf519d4c/code.power) | [Settings](src/d7b67b1c-f876-4555-9e54-0645cf519d4c/settings.json) | SPK: `Super---d7b67b1c_f876_4555_9e54_0645cf519d4c---Power`
  - **class Topics** | [Details](src/7f852309-122b-42fb-b2f3-ea9e2d405a9c) | [Raw](src/7f852309-122b-42fb-b2f3-ea9e2d405a9c/code.power) | [Settings](src/7f852309-122b-42fb-b2f3-ea9e2d405a9c/settings.json) | SPK: `Super---7f852309_122b_42fb_b2f3_ea9e2d405a9c---Power`
  - **class Transfer** | [Details](src/04adb831-c257-4657-a2c3-a17096b6b5cf) | [Raw](src/04adb831-c257-4657-a2c3-a17096b6b5cf/code.power) | [Settings](src/04adb831-c257-4657-a2c3-a17096b6b5cf/settings.json) | SPK: `Super---04adb831_c257_4657_a2c3_a17096b6b5cf---Power`
  - **class Trees** | [Details](src/78b3346f-c4cf-46b3-941c-656e2d510da0) | [Raw](src/78b3346f-c4cf-46b3-941c-656e2d510da0/code.power) | [Settings](src/78b3346f-c4cf-46b3-941c-656e2d510da0/settings.json) | SPK: `Super---78b3346f_c4cf_46b3_941c_656e2d510da0---Power`
  - **class Watchers** | [Details](src/93d704d3-aed8-4ee5-a25e-e7fbfb23b5c7) | [Raw](src/93d704d3-aed8-4ee5-a25e-e7fbfb23b5c7/code.power) | [Settings](src/93d704d3-aed8-4ee5-a25e-e7fbfb23b5c7/settings.json) | SPK: `Super---93d704d3_aed8_4ee5_a25e_e7fbfb23b5c7---Power`
  - **class Wiki** | [Details](src/572b9567-1893-400b-bd34-f1a45ef7e503) | [Raw](src/572b9567-1893-400b-bd34-f1a45ef7e503/code.power) | [Settings](src/572b9567-1893-400b-bd34-f1a45ef7e503/settings.json) | SPK: `Super---572b9567_1893_400b_bd34_f1a45ef7e503---Power`
- **Namespace**: [VDM\Joomla\Gitea\Service](#vdm-joomla-gitea-service)

  - **class Admin** | [Details](src/ddced4c5-667d-4559-873d-d716c17fd85b) | [Raw](src/ddced4c5-667d-4559-873d-d716c17fd85b/code.power) | [Settings](src/ddced4c5-667d-4559-873d-d716c17fd85b/settings.json) | SPK: `Super---ddced4c5_667d_4559_873d_d716c17fd85b---Power`
  - **class Issue** | [Details](src/44396eb8-e14c-47d9-9bdc-8205c0fd2bba) | [Raw](src/44396eb8-e14c-47d9-9bdc-8205c0fd2bba/code.power) | [Settings](src/44396eb8-e14c-47d9-9bdc-8205c0fd2bba/settings.json) | SPK: `Super---44396eb8_e14c_47d9_9bdc_8205c0fd2bba---Power`
  - **class Jcb** | [Details](src/d2e997a1-bbf7-4f28-8a7c-ce5c68061cfe) | [Raw](src/d2e997a1-bbf7-4f28-8a7c-ce5c68061cfe/code.power) | [Settings](src/d2e997a1-bbf7-4f28-8a7c-ce5c68061cfe/settings.json) | SPK: `Super---d2e997a1_bbf7_4f28_8a7c_ce5c68061cfe---Power`
  - **class Miscellaneous** | [Details](src/012af7d0-3436-4cae-b856-be49bdc39a3e) | [Raw](src/012af7d0-3436-4cae-b856-be49bdc39a3e/code.power) | [Settings](src/012af7d0-3436-4cae-b856-be49bdc39a3e/settings.json) | SPK: `Super---012af7d0_3436_4cae_b856_be49bdc39a3e---Power`
  - **class Notifications** | [Details](src/be57f70f-1214-4d69-8d33-7cd4e312ff70) | [Raw](src/be57f70f-1214-4d69-8d33-7cd4e312ff70/code.power) | [Settings](src/be57f70f-1214-4d69-8d33-7cd4e312ff70/settings.json) | SPK: `Super---be57f70f_1214_4d69_8d33_7cd4e312ff70---Power`
  - **class Organization** | [Details](src/3d25ea99-4f33-489a-934c-0e42027e6114) | [Raw](src/3d25ea99-4f33-489a-934c-0e42027e6114/code.power) | [Settings](src/3d25ea99-4f33-489a-934c-0e42027e6114/settings.json) | SPK: `Super---3d25ea99_4f33_489a_934c_0e42027e6114---Power`
  - **class Package** | [Details](src/808da4eb-b467-46cf-a767-e7e714f46b5a) | [Raw](src/808da4eb-b467-46cf-a767-e7e714f46b5a/code.power) | [Settings](src/808da4eb-b467-46cf-a767-e7e714f46b5a/settings.json) | SPK: `Super---808da4eb_b467_46cf_a767_e7e714f46b5a---Power`
  - **class Repository** | [Details](src/0bb2b72f-ebcd-46fe-844b-ac5fe715c230) | [Raw](src/0bb2b72f-ebcd-46fe-844b-ac5fe715c230/code.power) | [Settings](src/0bb2b72f-ebcd-46fe-844b-ac5fe715c230/settings.json) | SPK: `Super---0bb2b72f_ebcd_46fe_844b_ac5fe715c230---Power`
  - **class Settings** | [Details](src/f4d00907-c94a-49b7-8727-d64c1fa74cf5) | [Raw](src/f4d00907-c94a-49b7-8727-d64c1fa74cf5/code.power) | [Settings](src/f4d00907-c94a-49b7-8727-d64c1fa74cf5/settings.json) | SPK: `Super---f4d00907_c94a_49b7_8727_d64c1fa74cf5---Power`
  - **class User** | [Details](src/0a69cfc5-3223-4afb-8c9a-75f4bacf3c0e) | [Raw](src/0a69cfc5-3223-4afb-8c9a-75f4bacf3c0e/code.power) | [Settings](src/0a69cfc5-3223-4afb-8c9a-75f4bacf3c0e/settings.json) | SPK: `Super---0a69cfc5_3223_4afb_8c9a_75f4bacf3c0e---Power`
  - **class Utilities** | [Details](src/6edf0cf3-c2b0-45c9-84d2-c6ef1c5d434c) | [Raw](src/6edf0cf3-c2b0-45c9-84d2-c6ef1c5d434c/code.power) | [Settings](src/6edf0cf3-c2b0-45c9-84d2-c6ef1c5d434c/settings.json) | SPK: `Super---6edf0cf3_c2b0_45c9_84d2_c6ef1c5d434c---Power`
- **Namespace**: [VDM\Joomla\Gitea\Settings](#vdm-joomla-gitea-settings)

  - **class Api** | [Details](src/5ca71a00-7b44-4c0d-9955-3af054eed43d) | [Raw](src/5ca71a00-7b44-4c0d-9955-3af054eed43d/code.power) | [Settings](src/5ca71a00-7b44-4c0d-9955-3af054eed43d/settings.json) | SPK: `Super---5ca71a00_7b44_4c0d_9955_3af054eed43d---Power`
  - **class Attachment** | [Details](src/3d4ed24c-8250-4fcf-824f-a5f1597f939e) | [Raw](src/3d4ed24c-8250-4fcf-824f-a5f1597f939e/code.power) | [Settings](src/3d4ed24c-8250-4fcf-824f-a5f1597f939e/settings.json) | SPK: `Super---3d4ed24c_8250_4fcf_824f_a5f1597f939e---Power`
  - **class Repository** | [Details](src/e7c16db5-bb22-421b-8789-180f6a502b62) | [Raw](src/e7c16db5-bb22-421b-8789-180f6a502b62/code.power) | [Settings](src/e7c16db5-bb22-421b-8789-180f6a502b62/settings.json) | SPK: `Super---e7c16db5_bb22_421b_8789_180f6a502b62---Power`
  - **class Ui** | [Details](src/0367ac44-18d6-495d-beae-315794ffa89d) | [Raw](src/0367ac44-18d6-495d-beae-315794ffa89d/code.power) | [Settings](src/0367ac44-18d6-495d-beae-315794ffa89d/settings.json) | SPK: `Super---0367ac44_18d6_495d_beae_315794ffa89d---Power`
- **Namespace**: [VDM\Joomla\Gitea\User](#vdm-joomla-gitea-user)

  - **class Applications** | [Details](src/4a9e144e-7754-4d3f-9325-9ff792ce4aef) | [Raw](src/4a9e144e-7754-4d3f-9325-9ff792ce4aef/code.power) | [Settings](src/4a9e144e-7754-4d3f-9325-9ff792ce4aef/settings.json) | SPK: `Super---4a9e144e_7754_4d3f_9325_9ff792ce4aef---Power`
  - **class Emails** | [Details](src/af4b8b77-d773-42a7-9f54-19de463bc49b) | [Raw](src/af4b8b77-d773-42a7-9f54-19de463bc49b/code.power) | [Settings](src/af4b8b77-d773-42a7-9f54-19de463bc49b/settings.json) | SPK: `Super---af4b8b77_d773_42a7_9f54_19de463bc49b---Power`
  - **class Followers** | [Details](src/13931443-bad7-4742-b64e-c08042e7b306) | [Raw](src/13931443-bad7-4742-b64e-c08042e7b306/code.power) | [Settings](src/13931443-bad7-4742-b64e-c08042e7b306/settings.json) | SPK: `Super---13931443_bad7_4742_b64e_c08042e7b306---Power`
  - **class Following** | [Details](src/b1788488-f557-4746-9929-73e1d049b4a2) | [Raw](src/b1788488-f557-4746-9929-73e1d049b4a2/code.power) | [Settings](src/b1788488-f557-4746-9929-73e1d049b4a2/settings.json) | SPK: `Super---b1788488_f557_4746_9929_73e1d049b4a2---Power`
  - **class Gpg** | [Details](src/f135ca7f-4d50-4480-a15f-feae1a7982ab) | [Raw](src/f135ca7f-4d50-4480-a15f-feae1a7982ab/code.power) | [Settings](src/f135ca7f-4d50-4480-a15f-feae1a7982ab/settings.json) | SPK: `Super---f135ca7f_4d50_4480_a15f_feae1a7982ab---Power`
  - **class Keys** | [Details](src/c521f8c3-4e01-4c1a-8f68-f3e9d967651d) | [Raw](src/c521f8c3-4e01-4c1a-8f68-f3e9d967651d/code.power) | [Settings](src/c521f8c3-4e01-4c1a-8f68-f3e9d967651d/settings.json) | SPK: `Super---c521f8c3_4e01_4c1a_8f68_f3e9d967651d---Power`
  - **class Repos** | [Details](src/fd560f3e-ce19-474f-86ca-1fb1d3af9992) | [Raw](src/fd560f3e-ce19-474f-86ca-1fb1d3af9992/code.power) | [Settings](src/fd560f3e-ce19-474f-86ca-1fb1d3af9992/settings.json) | SPK: `Super---fd560f3e_ce19_474f_86ca_1fb1d3af9992---Power`
  - **class Settings** | [Details](src/553b8fc5-46cc-49b7-95ce-992a3c5708f8) | [Raw](src/553b8fc5-46cc-49b7-95ce-992a3c5708f8/code.power) | [Settings](src/553b8fc5-46cc-49b7-95ce-992a3c5708f8/settings.json) | SPK: `Super---553b8fc5_46cc_49b7_95ce_992a3c5708f8---Power`
  - **class Starred** | [Details](src/884b61d0-1f56-4f5f-a657-acaacdb9634b) | [Raw](src/884b61d0-1f56-4f5f-a657-acaacdb9634b/code.power) | [Settings](src/884b61d0-1f56-4f5f-a657-acaacdb9634b/settings.json) | SPK: `Super---884b61d0_1f56_4f5f_a657_acaacdb9634b---Power`
  - **class Subscriptions** | [Details](src/b6e17249-5afc-4bc0-a4aa-8d2241c1ccaf) | [Raw](src/b6e17249-5afc-4bc0-a4aa-8d2241c1ccaf/code.power) | [Settings](src/b6e17249-5afc-4bc0-a4aa-8d2241c1ccaf/settings.json) | SPK: `Super---b6e17249_5afc_4bc0_a4aa_8d2241c1ccaf---Power`
  - **class Teams** | [Details](src/c3dfbf28-1a28-4fd3-a0b5-12b06ecaadf3) | [Raw](src/c3dfbf28-1a28-4fd3-a0b5-12b06ecaadf3/code.power) | [Settings](src/c3dfbf28-1a28-4fd3-a0b5-12b06ecaadf3/settings.json) | SPK: `Super---c3dfbf28_1a28_4fd3_a0b5_12b06ecaadf3---Power`
  - **class Times** | [Details](src/2ccb303f-b115-45fb-b3ea-08a38259681e) | [Raw](src/2ccb303f-b115-45fb-b3ea-08a38259681e/code.power) | [Settings](src/2ccb303f-b115-45fb-b3ea-08a38259681e/settings.json) | SPK: `Super---2ccb303f_b115_45fb_b3ea_08a38259681e---Power`
  - **class Tokens** | [Details](src/af49b450-78fb-40bd-8165-48466ebd31a9) | [Raw](src/af49b450-78fb-40bd-8165-48466ebd31a9/code.power) | [Settings](src/af49b450-78fb-40bd-8165-48466ebd31a9/settings.json) | SPK: `Super---af49b450_78fb_40bd_8165_48466ebd31a9---Power`
- **Namespace**: [VDM\Joomla\Gitea\Utilities](#vdm-joomla-gitea-utilities)

  - **final class Http** | [Details](src/ce40b3d2-226c-4a64-b116-c19455822be1) | [Raw](src/ce40b3d2-226c-4a64-b116-c19455822be1/code.power) | [Settings](src/ce40b3d2-226c-4a64-b116-c19455822be1/settings.json) | SPK: `Super---ce40b3d2_226c_4a64_b116_c19455822be1---Power`
  - **final class Response** | [Details](src/19eb68d7-1e19-4d14-a0ef-70d719c45e80) | [Raw](src/19eb68d7-1e19-4d14-a0ef-70d719c45e80/code.power) | [Settings](src/19eb68d7-1e19-4d14-a0ef-70d719c45e80/settings.json) | SPK: `Super---19eb68d7_1e19_4d14_a0ef_70d719c45e80---Power`
  - **final class Uri** | [Details](src/61e813c6-a872-4f55-8078-198241170e80) | [Raw](src/61e813c6-a872-4f55-8078-198241170e80/code.power) | [Settings](src/61e813c6-a872-4f55-8078-198241170e80/settings.json) | SPK: `Super---61e813c6_a872_4f55_8078_198241170e80---Power`
- **Namespace**: [VDM\Joomla\Gitea\Admin\Users](#vdm-joomla-gitea-admin-users)

  - **class Keys** | [Details](src/2d29b342-cb4a-45f9-9cf1-a7347fbc0701) | [Raw](src/2d29b342-cb4a-45f9-9cf1-a7347fbc0701/code.power) | [Settings](src/2d29b342-cb4a-45f9-9cf1-a7347fbc0701/settings.json) | SPK: `Super---2d29b342_cb4a_45f9_9cf1_a7347fbc0701---Power`
  - **class Organization** | [Details](src/0039c453-cf6d-468b-9232-fc3fc13ca0c2) | [Raw](src/0039c453-cf6d-468b-9232-fc3fc13ca0c2/code.power) | [Settings](src/0039c453-cf6d-468b-9232-fc3fc13ca0c2/settings.json) | SPK: `Super---0039c453_cf6d_468b_9232_fc3fc13ca0c2---Power`
  - **class Repository** | [Details](src/49ae84dc-4474-468f-bf99-c92433fd1cc4) | [Raw](src/49ae84dc-4474-468f-bf99-c92433fd1cc4/code.power) | [Settings](src/49ae84dc-4474-468f-bf99-c92433fd1cc4/settings.json) | SPK: `Super---49ae84dc_4474_468f_bf99_c92433fd1cc4---Power`
- **Namespace**: [VDM\Joomla\Gitea\Issue\Reactions](#vdm-joomla-gitea-issue-reactions)

  - **class Comment** | [Details](src/73b3ebfa-c52a-4a96-a8de-718ff0bbc155) | [Raw](src/73b3ebfa-c52a-4a96-a8de-718ff0bbc155/code.power) | [Settings](src/73b3ebfa-c52a-4a96-a8de-718ff0bbc155/settings.json) | SPK: `Super---73b3ebfa_c52a_4a96_a8de_718ff0bbc155---Power`
- **Namespace**: [VDM\Joomla\Gitea\Issue\Repository](#vdm-joomla-gitea-issue-repository)

  - **class Comments** | [Details](src/63fbd482-688a-4356-b3e4-a676ef357100) | [Raw](src/63fbd482-688a-4356-b3e4-a676ef357100/code.power) | [Settings](src/63fbd482-688a-4356-b3e4-a676ef357100/settings.json) | SPK: `Super---63fbd482_688a_4356_b3e4_a676ef357100---Power`
- **Namespace**: [VDM\Joomla\Gitea\Organization\Teams](#vdm-joomla-gitea-organization-teams)

  - **class Members** | [Details](src/d9fa532a-dbe8-445f-93dc-398a3cf01c1e) | [Raw](src/d9fa532a-dbe8-445f-93dc-398a3cf01c1e/code.power) | [Settings](src/d9fa532a-dbe8-445f-93dc-398a3cf01c1e/settings.json) | SPK: `Super---d9fa532a_dbe8_445f_93dc_398a3cf01c1e---Power`
  - **class Repository** | [Details](src/07fce5f7-eb13-4dda-8870-77c9ad32a7bf) | [Raw](src/07fce5f7-eb13-4dda-8870-77c9ad32a7bf/code.power) | [Settings](src/07fce5f7-eb13-4dda-8870-77c9ad32a7bf/settings.json) | SPK: `Super---07fce5f7_eb13_4dda_8870_77c9ad32a7bf---Power`
- **Namespace**: [VDM\Joomla\Gitea\Repository\Branch](#vdm-joomla-gitea-repository-branch)

  - **class Protection** | [Details](src/0edb3d51-0a65-443b-883d-3d20325212bb) | [Raw](src/0edb3d51-0a65-443b-883d-3d20325212bb/code.power) | [Settings](src/0edb3d51-0a65-443b-883d-3d20325212bb/settings.json) | SPK: `Super---0edb3d51_0a65_443b_883d_3d20325212bb---Power`
- **Namespace**: [VDM\Joomla\Gitea\Repository\Hooks](#vdm-joomla-gitea-repository-hooks)

  - **class Git** | [Details](src/a11cacb2-c13a-4482-bf71-1b7d99574a98) | [Raw](src/a11cacb2-c13a-4482-bf71-1b7d99574a98/code.power) | [Settings](src/a11cacb2-c13a-4482-bf71-1b7d99574a98/settings.json) | SPK: `Super---a11cacb2_c13a_4482_bf71_1b7d99574a98---Power`
> remember to replace the `---` with `___` in the SPK to activate that Power in your code

### All used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")