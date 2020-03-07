<?php include('../views/https.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HACK13 Site</title>
        <link rel="stylesheet" type="text/css" href="/assets/bootstrap.min.css"/>
    </head>
    <body>
        <?php include('../views/navbar.php'); ?>
        <main role="main">
        <div class="container">
        <h1 class="mt-5">Tier 2 Virginia OpenNIC Resolvers</h1>
        <hr>
        <div class="container">
            <div class="row">
                <h3>What is OpenNIC?</h3>
                <p>OpenNIC is an open and democratic alternative to DNS root. The project is ran by hobbyists who work together to operate a decentralized DNS resolver to ensure DNS Neutrality. OpenNIC also provides its own set to TLDs that operators are all free registration. OpenNIC is also peered with other networks such as Emercoin, New Nations, and FurNIC. More information about the project as a whole can be found out from the official site.</p>
                <p><a href="https://opennic.org/" class="btn btn-primary" target="_blank">Learn More</a></p>
            </div>
            <div class="row">
                <h3>DNS over HTTPS Service</h3>
                <p>I provide a free DoH service that load balances between my two OpenNIC Recursive Resolvers. You can add it to your Firefox browser by going into your preferences, or to any other DoH capable system/browser.</p>
                <p><strong>DoH Address:</strong> https://doh.hack13.me/dns-query </p>
                <h4>Instructions to Add to DoH to Firefox</h4>
                <ol>
                    <li>Open your preferences by click on the hamburger menu on the top right, and select Preferences. <br/> <img src="/assets/firefox-1.jpg" /></li>
                    <li>Scroll down to the bottom second labled "Network Settings" and click "Settings". <br/> <img src="/assets/firefox-2.jpg" /></li>
                    <li>Check the box at the bottom labeled "Enable DNS over HTTPS" and select "Custom" and enter "https://doh.hack13.me/dns-query" and click OK. <br/> <img src="/assets/firefox-3.jpg" /></li>
                </ol>
            </div>
            <div class="row">
                <h3>DNS Servers</h3>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <h5 class="card-header">OpenNIC Virginia USA NS1</h5>
                        <div class="card-body">
                            <strong>Hostname:</strong> ns1.va.us.dns.opennic.glue <br/>
                            <strong>A Record:</strong> 147.135.113.37 <br/>
                            <strong>AAAA Record:</strong> 2604:2dc0:101:200::3de <br/>
                            <strong>Location:</strong> Vint Hill, Virginia <br/>
                            <strong>Logging Policy:</strong> No logs kept, routed to /dev/null <br/>
                            <a href="https://servers.opennicproject.org/edit.php?srv=ns1.va.us.dns.opennic.glue" class="btn btn-primary" target="_blank">OpenNIC Servers Report</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <h5 class="card-header">OpenNIC Virginia USA NS2</h5>
                        <div class="card-body">
                            <strong>Hostname:</strong> ns2.va.us.dns.opennic.glue <br/>
                            <strong>A Record:</strong> 147.135.115.88 <br/>
                            <strong>AAAA Record:</strong> 2604:2dc0:101:200::465 <br/>
                            <strong>Location:</strong> Vint Hill, Virginia <br/>
                            <strong>Logging Policy:</strong> No logs kept, routed to /dev/null <br/>
                            <a href="https://servers.opennicproject.org/edit.php?srv=ns2.va.us.dns.opennic.glue" class="btn btn-primary" target="_blank">OpenNIC Servers Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    </body>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted"><i class="far fa-copyright"></i>HACK13<i>(Timothy Rogers)</i></span>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    </footer>
</html>