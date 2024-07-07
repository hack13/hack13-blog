---
title: The Tech Side of Hosting a NeosVR Event
description: So in case you had no idea, I assisted with hosting the back-end of a NeosVR event this past weekend. It was great, but it was a very short notice event, I jumped in and volunteered as I saw the event organizer starting to get overwhelmed with just how big their event got.
tags: [Personal, NeosVR, Resonite]
published: 2022-04-17
url: /2022/04/neosvr-event-hosting/
category: VR
draft: false

---

So in case you had no idea, I assisted with hosting the back-end of a NeosVR event this past weekend. It was great, but it was a very short notice event, I jumped in and volunteered as I saw the event organizer starting to get overwhelmed with just how big their event got. So I came in and offered to host the back-end. Plus it is alway a great experience for me to put my Linux System Administration and Engineering skills to the test. In fact, I did over engineer the back-end of the event... So here is me talking about how we pulled it off for just €2.43 in total cost, for an event that had servers running for 12 hours.

### The Hardware Breakdown

So if you have ever followed me or looked at my work, I am all about bang for the buck. I decided to use the [Hetzner Cloud](https://www.hetzner.com/cloud) for this event with their new Data Center location based in the USA. This is because most of the attendees were based in North America. Also we were able to take advantage of their instance pricing.
<center>
<img src="/post-pics/2022/LGQ2GFbz7D6rntVRTYVqwhwX.webp" alt="pricing screenshot" /> <img src="/post-pics/2022/1MhfuY5BLaDOVHuso0Pw17kZ.webp" alt="pricing screenshot" />
</center>
We used the CPX41 and CPX51 instances for the event. I used the CPX41 instance for the Main Stage of the event which also doubled as the Parent session for the other sessions. The actual break out sessions where we wanted to make sure that people who were building and working on avatars and logix were on the CPX51’s which was probably overkill... 

### NeosVR Headless Configurations

So the documentation for headless client configurations sadly is not quite there, especially when it comes to running events with nested sessions. In fact at the time of writing this, the wiki page for nested sessions doesn’t exist and is a dead link... However, that aside by searching through the NeosVR Discord server and various bug report filings on the GitHub I was able to put together  how to configure the nested sessions configuration. Which is basically parentSessionId is a JSON array... 
<center>
<img src="/post-pics/2022/event-layout.webp" alt="event layout" />
</center>

So as you can see from the above diagram, we used a total of 3 cloud instances. I figured since the Main Stage was simply to be a filter point and simple gathering zone, it could be on a slightly less powerful instance. Then the people with Unity and NeosVR knowledge most likely would be doing some crazy Logix or other funny things, we thought it would be best to have them isolated out on their own system. We then put the Intermediate and New Users onto the same back-end system just because we felt those two worlds shouldn’t be too heavy, as they were going to mainly be doing basic setting up your avatar and showing off the basics of NeosVR.

### OS and Software Stack

For those who know me, I work as my day job managing RHEL(Red Hat Enterprise Linux) systems. In my personal labs and projects I run [AlmaLinux](https://almalinux.org) as my personal choice since the CentOS Stream change over. So we ran the whole event on AlmaLinux 8, that was a custom image that I had built out and configured with [Ansible Playbooks](https://github.com/ansible/ansible) to run [Docker](https://docker.com/).

The Ansible Playbook I wrote logged into the server, setup some basic security benchmarks, added my personal account to login and manage the system, and an unprivileged user named “neosvr” for the containers to be started and managed under.

I utilized the pre-made docker container made by the Neos Community’s own [Shadow Panther](https://github.com/shadowpanther) which you can find [here](https://github.com/shadowpanther/neosvr-headless). It allowed me to focus on having only Docker installed on all the servers, exposing only ports for the containers we used.

### The Event Itself

So in closing the event itself was a bit of a rocky event, it was slapped together in less than a week... However, with [Scars Vorrix](https://www.tiktok.com/@scarvorrix), [Jackie Alexender](https://linktr.ee/CabbitKingJack), nearbyfaraway, myself, and the Mentor’s of NeosVR itself it was a great event for something on such short notice. We worked right up to the event getting things prepared and such.

The biggest take away we learned is to start filtering users into smaller breakout sessions right away as the main session started getting full way to quick and caused multiple people to start lagging as people just piled in. This was something we started doing shortly into the beginning of the event.

As this was an event to get new users into NeosVR, it was amazing to see the system work at getting Mentors who volunteer their time to staff each of the three sessions we had setup and just take off helping new users. I spent a lot of time stopping by the New User session and have to say the Mentors are what really made the event a huge success so if you are a NeosVR Mentor who attended and assisted I thank you all so much, it wouldn’t have been such a success without you all.

Also we cannot forget our wonderful organizer Jackie Alexender who put together the whole event, and be sure to go [check out their Discord](https://discord.gg/x9FKhVrndD) as they do plan to host more events in the future. With everyone coming together in less than a week, it was great to see such a community effort come together and have a great time.

In closing remarks... Jackie... Give more lead time to get stuff planned and built out in the future! (This is a bit of an inside joke as they also agree, they had no idea it would have ballooned into what it did)

Hope to see you all in the [NeosVR Metaverse](https://neos.com/)!