<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{margin:0px}
</style>    
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="pragma" content="no-cache">
    <title>REPRODUCTOR</title>
</head>
<body>
    <div id="player"></div>
    <script src="//ssl.p.jwpcdn.com/player/v/8.22.0/jwplayer.js" type="text/javascript"></script>
    <script type="text/javascript">
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        jwplayer.key = "XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";
        
        var data = jwplayer("player");

        var idParameter = getParameterByName('id');

        data.setup({
            playlist: [{
                "title": "",
                "sources": [{
                    "default": false,
                    "type": "dash",
                    "file": `https://dcf-ak-livewwdazn.akamaized.net/dashrdm/dazn-linear-${idParameter}/stream.mpd?p=web&dazm-token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9eyJleHAiOjE3MDU4ODg1ODIsImtpZCI6IjIwMjIxMTIzIiwicGF0aF9kIjoyLCJwYXRoIjoiNzE1N2E4Yzc3M2FlZTNhMDQyNTIyZWU5NGYxZWQ5MzZhMGYxMzg3NCIsImdlbyI6InB0IiwiaWF0IjoxNzA1ODQ1MzgyfQ`,
                    "drm": {
                        "clearkey": { "keyId": "82f8e2a17dac44c0a18f660479349c59", "key": "1b144f73e6fefe91cd05f850e2b589d0" }
                    },
                }]
            }],
            width: "100%",
            height: "100%",
            aspectratio: "16:9",
            autostart: true,
            cast: {},
            sharing: {}
        });

        data.on("play", function (e) {
            data.setCurrentAudioTrack(1);
        });
    </script>
       
</body>
</html>
