---
title: Why I Don’t Use The Cloud
description: I have been asked a couple times why I don't want to build Zetamex off the cloud, and well the biggest answer is that the cloud is not really right for the old fashioned and classic usage of opensimulator. 
tags: [OpenSim, Opinion]
published: 2013-11-03
url: /2013/11/why-i-dont-use-the-cloud/
category: Archive
draft: false

---
I have been asked a couple times why I don't want to build Zetamex off the cloud, and well the biggest answer is that the cloud is not really right for the old fashioned and classic usage of opensimulator. The second reason is that it is much more cost efficient to avoid using the cloud, and using dedicated hardware.
  
So to break this down, I went in search of numbers and these numbers may differ for some people, but this is based off Zetamex's usage statistics of our clients averaged out. So this should give you an idea of the difference.

So to start out we are going to just study how much it would cost to run one instance of opensimulator with your average usage which is about 1 to 1.5 gb of ram. That with mysql, mono, and operating system we are going to say on average 15-25 gb of disk space.

With Amazon Web Services, you have the following pricing for the small instance with is 1.5 gb of ram which is perfect for our demonstration.

Small Instance ... $0.060 which is about $43.20/month

Then we need to calculate EBS storage cost, and disk usage costs with amazon. That is about roughly another $4 to $6/month.

Then we have to calculate the bandwidth charges, that turns into about $2 to $3/month.

So all together that is about $48.20 per instance per month, if you ran it all month long. Now if we took advantage of the market price which does change and flux every 5 minutes, but using the average market price would be about $12.20 per instance per month. But market pricing is not accurate and your instance gets lower priority, as it is service not being used at the moment so they rent it out cheaper at market based pricing.

So now let us look at a common server, and since we are only wanting to do for this sake of argument 1 instance just like the one above, since it is not common to find a server with less than 4gb of ram on the market. We are going to go with the average dedicated server price for 4gb ram and 1tb disk-space and 1tb of bandwidth. That is about 40 usd, now that is about enough to fit 3-4 instances, and plenty of space.

So now we just put the instance on there, and well... now we are done. 40 bucks... plus add 3 more... still 40 bucks.

Scaling, is the next thing people are going to bring up, and while people believe the cloud is the easiest place to scale, well I disagree. I am going to be using the technology I am been working with Postgres but this can also be done working with MySQL instead of Postgres.

We can do what is called pooling, and load balancing, so unlike MySQL, Postgres uses less overhead even on heavy usage as it is designed for Enterprise class data. We take advantage of the earlier spoke about 1TB storage and let's add 10 bucks more for RAID storage so if one drive fails we have a secondary drive so acts like nothing ever happened. So now 50 bucks, and that can take a very big hit, but then we realize that we want assets to be more robust and faster for people across the world, in other geographical locations, we can just order another 50 buck server with the 1TB of storage and setup a pool.

What a pool will do is clone all the data and keep it synchronized between both locations, and on top of that can both load balance and/or query together to find data quicker. Then the worry of growing storage cost is not so much of a problem as most people think, especially with NAS(Network Accessed Storage) to expand the size storage. Postgres can allow us to do this and on top of that, we can start telling Postgres to cache assets that are used more often than others because we know NAS is a bit slower than locally stored data but if it is cached and on hand it is not a problem.

So total estimated cost of up to say 2 TB of storage in 2 locations pooling, is only about 175usd/month

Now let's look at the cloud, and say we use one small instance on EC2 to mount S3 as a drive so that we don't have to pay the higher EBS storage costs. That is 0.095/per gb per month so that is not to awful bad, seems pretty cheap. but then we got to keep in mind we need a instance that has a bit more power than the small so lets go with the medium which lets say since you know your going to use a lot of data going to go with a reserved instance for cheaper price to 227 deposit that cost would be $30.24/month still not to bad if your willing to make that deposit, if not $86.40/month for standard instance. But let's not forget you need two of those instances, so we can play fair and give the same results. But for sake of argument i will do both one or two depending on use case.

So now the cost of the storage lets go up to the 2 tb we were talking about before, now that is cheaper because more than 1 tb making it 0.080/per gb so now we are at 160usd/month just for the storage.

Now luckily there is no cost for instances to talk to each other in aws, but still got to communicate with viewers and connections, so about 10usd in bandwidth charges.

1 instance with 2tb storage = $190.24/month with reserved | $246.40/month on demand

2 instance in different locations = $220.48/month with reserved | $336.80/month on demand

The reason the price is not double, due to aws is actually shared data in a bucket as amazon calls it unlike how it is replicated completely on dedicated hardware.

I hope this explains my stance on why I choose to use dedicated services over cloud based services. I am not trying to say cloud based services are bad, just saying average use cases are not great option for them.