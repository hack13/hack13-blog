---
title: "API"
menu: 
  main:
    weight: 25
---
# API Docs

{{< rawhtml >}}
<div class="container">
    <div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            LastFM - For NeosVR
            </button>
        </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <strong>URI:</strong> <code>https://api.hack13.dev/lastfm/?username=<i>your-lastfm-username</i></code>
            <br />
            <strong>Example Response:</strong>
            <pre><code>
            PUNCHING BAG,blackwinterwells,https://www.last.fm/music/blackwinterwells/_/PUNCHING+BAG,https://lastfm.freetls.fastly.net/i/u/300x300/da1eaf8adf9ad97a7b86fb76e6e1a876.jpg,true
            </code></pre>
            <strong>Response Breakdown:</strong>
            <pre><code>
            <i>Song Name</i>,<i>Artist Name</i>,<i>LastFM Song Page Link</i>,<i>Album Art Link</i>,<i>Now Playing</i>
            </code></pre>
            <ul>
                <li>Song Name <span class="badge badge-info">String</span></li>
                <li>Artist Name <span class="badge badge-info">String</span></li>
                <li>Song LastFM Page Link <span class="badge badge-info">String/URL</span></li>
                <li>Album Art Link <span class="badge badge-info">String/URL</span></li>
                <li>Now Playing <span class="badge badge-info">Bool</span></li>
            </ul>
            <strong>API Source Code:</strong> <a href="https://gist.github.com/hack13/1e6c9340815814e9286b5d2ee566bb50" target="_blank">GitHub Gist</a>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Coming Soon ... 
            </button>
        </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            Nothing here yet...
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Coming Soon ...
            </button>
        </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
            Nothing here yet...
        </div>
        </div>
    </div>
    </div>
</div>
{{< /rawhtml >}}