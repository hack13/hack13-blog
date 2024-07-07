---
title: Speeding Up Zadaroo Files
description: As some people may know, I host Zadaroo from an agreement with the original owner that I would continue to host it for as long as I can. Which I believe will be a long time, as it isn't that expensive to host.
tags: [CDN, Cloudflare, Wasabi]
published: 2019-01-28
url: /2019/01/speeding-up-zadaroo-files/
category: Archive
draft: false

---
As some people may know, I host Zadaroo from an agreement with the original owner that I would continue to host it for as long as I can. Which I believe will be a long time, as it isn't that expensive to host. I have up till a few months ago hosted all the files on OVH Object Storage in their Canadian datacenters. Doing that costed me around 5-6/month just in bandwidth fees, as believe it or not Zadaroo continues to this day consuming around 500-600gb of bandwidth a month, which would be too expensive to host on a provider like AWS. Also, keep in mind this is only for all the files behind Zadaroo, not the site itself as the files are hosted separately because I wanted to ensure the best downloads I could.

Recently I wanted to try and move away from OVH, not because it is really bad or anything... just they tend to have some network abuse from people using their datacenters for things like seed boxes and such. That said, I moved everything from OVH already but files.zadaroo.com files back-end. The site had been moved to where it is now, on a Linode instance in Newark, NJ behind Cloudflare for caching, as it always had so the move was seamless. Next was to find a place to move the files too. Which I was already using Backblaze B2 as a backup location for everything, but at the time I started using them their costs were a bit higher than they are now. But during the last month I heard about Wasabi from a few furry friends on Mastodon, their pricing and speed seemed like a great fit.

So I moved everything to Wasabi, but then realized that we were going to lose the ability to let people keep using the original files.zadaroo.com domain that I know many people still rely on for loading OARs and such from the site. So I came up with using the Linode box as a proxy server to pass the requests back to Wasabi using the old domain to mask the Wasabi address and it worked! However, this meant I was using my Linode bandwidth to reserve the files, but that was fine for now. Below is configuration I used to mask the Wasabi address.

<script src="https://gitlab.com/snippets/1802178.js"></script>

So I was forced to stop using Wasabi due to 2 outages, and this latest one from them lasting over 48 hours... I found this to be unacceptable. I quickly in the first 12 hours switched Zadaroo Files over to Backblaze B2 because I didn't want to stop people from being able to download all the files from Zadaroo. 

<center><blockquote class="twitter-tweet" data-partner="tweetdeck"><p lang="en" dir="ltr">Due to the Wasabi outage, Zadaroo Files back-end has been seamlessly failed over to <a href="https://twitter.com/backblaze?ref_src=twsrc%5Etfw">@backblaze</a> B2 to ensure you can keep downloading those OAR files :)</p>— kite552🦊 (@kite552) <a href="https://twitter.com/kite552/status/1088987607604826112?ref_src=twsrc%5Etfw">January 26, 2019</a></blockquote>
<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></center>

In my haste switching over to Backblaze's B2 Zadaroo Files backup, I didn't realize that even though I had set it up exactly the same way as Wasabi reverse proxy... it was redirecting instead to the B2 address. I tried editing it to force files.zadaroo.com to stay but it was triggering Cloudflare's security back-end and preventing the site from loading. So I decided to use my last page rule, because I was already taking advantage of Backblaze and Cloudflare's partnership for free unlimited bandwidth. So with switched to a page rule from Cloudflare's settings, I tested and confirmed it was working at rewriting files.zadaroo.com to the correct path for b2.zadaroo.com/file/zadaroo-backup/ and as an added benefit no more going through Linode and I noticed that downloads were even faster now.

![alt text](/wp-import/2019/Screenshot-2019-01-27-at-11.18.25-AM.png)

So Zadaroo Files are now hosted by Backblaze B2, using Cloudflare to take advantage of the free unlimited traffic to the files, while now making the downloads even faster by using Cloudflare's edge caching and Page Rules to transfer you to the correct link at the edge layer making the download happen directly through Cloudflare.

I hope this article was helpful for those wanting/needing to do the same.