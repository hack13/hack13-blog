---
title: Ownsership of Data
description: It's been a bit since I have written anything. This is an excellent opportunity to talk about the stuff I have been doing lately. That being switching away from using things like pCloud, Microsoft365/OneDrive, and iCloud. 
tags: [Cloud, Storage]
published: 2023-01-22
url: /2023/01/ownership-of-data/
category: Thoughts
draft: false

---

It's been a bit since I have written anything. This is an excellent opportunity to talk about the stuff I have been doing lately. That being switching away from using things like pCloud, Microsoft365/OneDrive, and iCloud. That isn't all; I have also started Cyberfurz service for Mastodon and Matrix.
 
### Files and Photos
 
So what caused me to go on this journey is the fact of hearing and seeing companies starting to introduce scanning of my data… and it scares me. I have nothing to hide, but because I don't fully trust even AI making the decisions as if something I took a picture of is something that should be flagged. So during the last Prime Day sale, I picked up a Synology 4 Disk bay NAS. I filled it with 4x 18 TB drives in RAID to protect my data. This way, I could immediately replace all my cloud storage, and yeah… NextCloud, yes, I have used it… but patching and updates are not always smooth and simple. This is why I decided to go with something I don't have to be as concerned with me managing and low energy costs to run.
So with my new Synology, I rolled out a few of their apps for managing my files. Their Drive, Photos, and Documents apps. This allowed me to easily install them on my mobile devices. Now they offer an excellent easy NAT service that proxies to your NAS through their servers… However, I didn't want that! I like having my data go through the path I set up. That said, I used my opnsense firewall to set up WireGuard server on my home network. I provisioned an affordable VPS to connect to it. I then rolled a Caddy proxy in front so I could have SSL certs auto-generated for my back-end. So Internet → VPS → WireGuard Router → Firewall → Server DMZ Network → Synology NAS. This allows me to safely expose and monitor my traffic flow and own my network traffic.
That said, I practice good backup hygiene, set up local encryption, and then upload to both Backblaze B2 and iDrive nightly. So, if something happens to my NAS, I can still recover my data.
 
### Social Media
 
I also want to take back my social media; I was on Mastodon in 2018, but I took a break from it. I have never really been active on Twitter or others… I deleted my Facebook way back in 2010… So I went back to the Fediverse, setting up my instance because I enjoy having something outside work to keep me on my toes.
So why the Fediverse? Well, it lets me own my data, even if I was on someone else's server… I can back up my posts, migrate my account, and if I ever wanted to… I can even go back to hosting my Single User instance… I will probably write another post on my thoughts on the Fediverse.