---
title: Cloudflare Workers and Pages
description: It sure has been a while since I have posted anything here on my blog... that said you might have realized that the site has changed and maybe even noticed it might be a tad bit faster for you.
tags: [Resources, Personal, Cloudflare]
published: 2021-10-29
url: /2021/10/cloudflare-workers-and-pages/
category: Archive
draft: false

---
It sure has been a while since I have posted anything here on my blog... that said you might have realized that the site has changed and maybe even noticed it might be a tad bit faster for you. Well that is because I have started to pick back up coding, because I really do wanna get back into DevOps. That said, I am back to my old shinigans of trying to build things and host them as cheap as possible while not compromising on performance.

## Back to Cloudflare

Some of you may know I have been a long time fan of Cloudflare and its amazing feature set of giving so much value for free to users. I know there is a tabu of using it, but I have always felt based off what I have seen and personally follow (I am also a stock holder now as well)... that they offer too many amazing services for developers and small companies that are just too cost prohibitive to do with anyone else.

That said, their latest service they have released public called [Pages](https://pages.cloudlfare.com/) is what I am using now for this site and will be migrating Zadaroo over to it as soon as I finish up the new version of the site. I have also been using their [Workers](https://workers.cloudflare.com/) service as well for my personal API that does some small cool things for myself and others in [NeosVR](https://neos.com/) to see what we are playing live for others to see.

## Pages A Free CI/CD Dream

So the big reason why I have migrated to Cloudflare Pages for my site, is because it is so much easier to work on my site, test changes before they go public. I am able to push my changes to my GitHub repo for my site, and it kicks off a job immediately to update the site. It also builds the other branches on the fly as well, but gives them a unique link that isn't mapped to the regular live link so you can see the development builds of your site beside your live site.

![Screen Shot 2021-10-29 at 8.24.55 AM.webp](/post-pics/2021/Screen_Shot_2021-10-29_at_8.24.55_AM.webp)

As you can see from the image above you can see how it pulls, builds, and generates a unique site link for each commit. So as you can see, it on the back-end remaps your domain to the deployment link of the latest build. All the previous build hang around as well, so if I mess up on a build I can click the dots next to the build I need to go back to and the site will immediately roll back to that version of the site.

So I know you might be asking why I don't just use GitHub's built in Pages service. Well there are a couple reasons, and there are two big ones. The first one is that Cloudflare Pages push your site to all their edge nodes, so no matter where in the world someone visits the site, it will be loaded from the closest Cloudflare edge node. The second big feature is the extra features of ability to have custom error pages, routes, and more to your site.

## Workers Saving Me Money

So as I stated earlier, I also have been hosting an API server for people to use that uses my key to check against the [LastFM API](https://last.fm/) to get their Now Playing data and able to use it inside of NeosVR. I have to parse it into something not JSON or XML so that it is more easy to parse the data in game. So I was using a PHP script, but looking at the Cloudflare Workers... I am able to allow 100,000 requests every 24 hours. I haven't gotten over 45% usage yet. But even when I do the pricing is very affordable and there is no cold starts. All I had to do was teach myself JavaScript... which only took a day.

<center>

![Screen Shot 2021-10-29 at 9.19.44 AM.webp](/post-pics/2021/Screen_Shot_2021-10-29_at_9.19.44_AM.webp)

</center>

The image above shows the weekly report of my workers usage data. You also see, I have setup a lastfm-legacy that maps overtop of the old link for the lastfm system some people are still pointing at but has been re-written on the back-end to JavaScript on a Worker so that it gives them time to update to the new one.

So long story short, I am very happy to be back and learning JavaScript and doing new things. I am working on a Discord Bot right now for CyberFurz a small project I operate. I will be writing up on that soon once I finish everything on that front. Anyways, thank you for reading!