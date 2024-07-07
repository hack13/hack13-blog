---
title: Finding My Linux Distro
description: I have been on a bit of a journey looking for the right Linux distribution for myself. It has been a bit of a challenge, because I have been bouncing around a lot over the past couple months trying to find the one that fits me best.
tags: [Personal, Opinion]
published: 2018-04-26
draft: true
url: /2018/04/finding-my-linux-distro
category: Archive

---
I have been on a bit of a journey looking for the right Linux distribution for myself. It has been a bit of a challenge, because I have been bouncing around a lot over the past couple months trying to find the one that fits me best. There are the LTS(Long Term Support), standard release cycles, and of course the rolling release ones out there.

While using the various ones out there, I have come to realize I do prefer the rolling release model more than the others. Mainly because I enjoy being able to use the latest and greatest that is currently available to be used rather than waiting for a distro to deem that it is stable for me to use. However, I have learned that it does come at the price of the occasional breakage. Being a Linux System Administrator for my day job does help with the occasional breakage not being too difficult to deal with.

So I wanted to go over the distro's that I tried and my opinions on them. Note these are my personal opinions and shouldn't be used to sway your opinions of them, I encourage you to go out and test them all for yourself as well.

**Arch**

This is where this whole thing began at. I have been an Arch user a long time ago and left because graphics drivers were a horrible headache to keep updated with the system. I switched back a few months ago because they made it easier to manage nvidia drivers, as they are are now maintaining the drivers in the main repositories which is nice. However, I was getting annoyed with the constant kernel updates, meaning updates to drivers, and vitalization tools constantly. However, I learned recently you can install the LTS kernel that makes those updates come way less often and I get to also keep the latest and greatest software as well.

The ability to configure myself to have only what I want from the point of install is very nice, being able to choose what goes in and what doesn't get installed. I also loving having access to the AUR to install large variety of software where it is easier to get the third party applications in a central place.

My last bit on loving Arch is the wiki. I honestly just love reading the wiki, it doesn't just tell you how to fix something or install something. The wiki is a trove of knowledge teaching you what everything you do on your system does, and honestly as a SysAdmin who didn't go to college it where I am always learning more about my system. Just as a bonus, lots of the articles can translate to other distributions as the articles cover in detail how things work not just how they work Arch but Linux in general.

**Fedora**

I really wanted to fall in love with Fedora because I manage Red Hat at work and started using CentOS on my personal servers because it is so nice and stable in my opinion more secure out of the box than Ubuntu boxes I have setup. However, there was just too many small things that I found kinda annoying or just that I couldn't figure out what was wrong.

Firstly I would install programs, but they would not run when I launched them from the menu.. but they would if I executed them from the command line. I verified I was executing them exactly the same way the menu was programmed to launch them. I checked every log I could, but I still couldn't figure this one out.

I was getting some odd graphical glitches with apps with both my laptop which uses the intel free drivers and my desktop using the nvidia drivers... I asked in the IRC and all I got was that I shouldn't have used the minimal install media... But I don't see how or why that would be the issue for my graphical glitches. So it was just all these small things that just caused me to just move away from considering Fedora.

**openSUSE**

This one was a really awesome one, I used the net installer just like I have for all the distributions in this list. I just for some reason enjoy the level customization their installer gives you and at the end editing the software configuration. The only complaint is I am not a fan of the default choice to use btrfs as I just have had so many friends who have ran into issues on btrfs. So I just switched it to ext4 which was a very easy change.

I will say as from a newbie perspective, I think openSUSE might seem a bit intimidating but it really just an intimidation. The system is very easy to manage with zypper and their 1-click installer scripts all over their website and software search system. It is also very easy to add repositories to the system and it usually fetches the GPG Key for you, all you have to do is accept it.

Overall, as a System Administrator I find it to be kinda a SysOps delight to manage with YaST which just makes everything very simple to manage. It makes me sad to see it is not offered by many providers like Digital Ocean and such because it would be my default option in a heartbeat. It really has all the tools you need to manage your system in one place that is not too confusing for someone who has used Linux for a while.

There are some small things on this system I am not completely happy with, is that some of the desktop applications I like to use are not available as openSUSE is not normally considered on places like RHEL and Debian based distros are so missing dependencies are quite common.

**Solus**

This is a pretty awesome distro, and I think it has a lot of potential. My biggest issue with it right now is that its still so new that there is just a lack of documentation on things when I want to install certain programs without going into the forums and asking for help. Also the fact that its young, I am not saying it is going away... but I do want to revisit it in a maybe another year.

**Ubuntu**

So I was on Ubuntu for quite a long time, and I don't have anything particularly bad to say about it. I really enjoy using Ubuntu, however after going back to rolling releases it just started to feel a bit to stale for my personal taste. I also was starting to suffer a few programs I compile requiring a bit more effort under Ubuntu vs other platforms like Arch.

**Manjaro**

Lastly, I have tried Manjaro and I found it was a great way to dip your foot into the Arch scene with easier management. The few things I didn't like was I couldn't use the tools that were native to the desktop without issues, I was stuck using octipi software manager instead of using Discover software center. The good thing was it did include native snap support I didn't have to install it from the AUR.

Again, these are my personal opinions and experiences. I am sure others have their own feelings and I am a strong believer that people should find what works for them. I don't believe there is ever one solution that works for everyone, why I encourage people to use whatever works best for them. But I also believe it is important for people to share their opinions to help people consider what else is out there that might work best for them.