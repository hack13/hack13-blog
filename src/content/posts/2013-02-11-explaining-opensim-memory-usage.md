---
title: Explaining OpenSim Memory Usage
description: I have had a couple people ask me to show them some tips and show them how to conserve memory usage in OpenSim. So I am going to be using sim-on-a-stick for today's tips and tricks...
tags: [Resources, OpenSim]
published: 2013-02-11
url: /2013/02/explaining-opensim-memory-usage/
category: Archive
draft: false

---
I have had a couple people ask me to show them some tips and show them how to conserve memory usage in OpenSim. So I am going to be using sim-on-a-stick for today's tips and tricks. Now the reason for this is because now with sim-on-a-stick, we have the database running in MySQL which saves a bit of memory, and the fact it is already setup and ready to go out of the box.</p> 

So out of the box starting everything up, I am now at 95mb of ram:

![alt text](/wp-import/2013/2013-02-11-04_48_56-Task-Manager.png "task-manager")

This is an empty region with absolutely nothing on it. So lets go load an oar on it, and see what it levels out to be. I am going to be loading Linda Kellie's Tropical Oar. It has 1,445 prims on it and well, that is about the standard for one person who just plans on having a region to go and relax on. A place to call home, do small things, etc. you normally don't use more than 2-3k amount of prims.

![alt text](/wp-import/2013/2013-02-11-04_56_31-Task-Manager.png "task-manager")
  
After loading the oar we are now at 166.2mb of ram so that is still pretty good. Now this is with no one on the region, so lets go and login to the region and walk around. See what happens simulator side. This is still the Tropical Oar.

![alt text](/wp-import/2013/2013-02-11-05_12_59-Singularity-Viewer-Timothy-Hoxley.png "timothy vyper")

So I logged in and dressed up in the most prim clothing I have which is some rave gear I made a long time ago. You can see below, and I walked around a bit and open closed a few doors and stuff and we are still only topping out at about 169.0mb. So I figured that means like what 1-3mb per avatar on the region depending on scripts and prims, so not bad. But I am not done, we are going to load Linda Kellie's freebie mall #2 that has 23,620 prims which is about what I see most people top out at building wise. So let's go see what happens.

![alt text](/wp-import/2013/2013-02-11-13_45_23-Task-Manager.png "task manager")

Well after loading the oar and letting probably a thousand scripts load into the region, we are now at 798.0mb of ram usage. Then means that we are using quite a bit of ram, but most of that is scripts, and lets face it not that meany people are going to have THAT many scripts on their region, maybe 25k prims but not that many scripts. But this gives you an idea, if you are building a heavy scripted region and need that much it is best to run 1 region per simulator, and have about a gig per region. But that is just for big regions with tons and tons of scripts like Linda Kellie's freebie mall #2. Now lets see what happens when I turn off all the scripts.

![alt text](/wp-import/2013/2013-02-11-14_01_45-Task-Manager.png "task manager")

Wow same region, just with scripts turned off. Wow major difference huh, well see how much scripts impact sims, however you have to keep in mind that Freebie Mall #2 has about 6 scripts in almost all the furniture where there is tons of that, and several scripts in doors and other things. Way more than even a standard fully built up region, this is a store sim, tons of stuff. But we can see a region after all that 23,620 prims don't use much at all.

Now I am not sure how many people know that you can hook more than one region per simulator instance, to add another region you just type create region Regions.ini and answer the questions like you did for the first region. So let's put up another region on this same instance while scripts are still disabled and load Linda Kellie's Country Cabin OAR.

![alt text](/wp-import/2013/2013-02-11-14_10_18-Task-Manager.png "task manager")

Alright so now we have 2 regions on the same instance, and we are still quite low on memory usage. Now I will say it is normally a good idea if you don't have hugely scripted regions to put more than one region on the same instance but I don't recommend more than 4 per instance, it is a good number to stop at in my opinion, unless you are doing mega regions, but that is another story for another day.

I hope this has given you all some insight to hosting regions on your own servers, or rented servers or hosting from other companies to help you understand what is going on in the back ground.