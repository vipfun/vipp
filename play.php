
<html lang="es">
<head>
	
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K97HVWY69V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K97HVWY69V');
</script>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0"/>
<script type="text/javascript" charset="utf-8" async="" src="//ssl.p.jwpcdn.com/player/v/8.25.6/jwpsrv.js"></script>
<meta name="robots" content="noindex">
<style type="text/css">

body {
   margin: 0;
   padding: 0;
   overflow-y: hidden;
}
</style>
<script type="text/javascript" charset="utf-8" async="" src="//ssl.p.jwpcdn.com/player/v/8.26.0/jwpsrv.js"></script>
<script src="//ssl.p.jwpcdn.com/player/v/8.26.0/jwplayer.js"></script>
<script> jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';
</script>
<script type="text/javascript">
function getParameterByName(name) {
	name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
	var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
	results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var getURL = getParameterByName('get');
var getIMG = getParameterByName('img');
var getKEY  = getParameterByName('key');
var getKEY2  = getParameterByName('key2');
if (getURL == "#") {alert('Vuelve a la pÃƒÂ¡gina anterior');}
</script>
<script>
var play = getParameterByName('play');

if (play == "1") {
play = "true"
}else{
	play = "false"
	}
</script>
</head>

</div>
<div id="player"></div>


<script type="text/javascript">
var playerInstance=jwplayer("player");

playerInstance.setup({

    playlist: [{
    
    "image": "https://sfntv.xyz/opa.webp",
      "sources": [
        {
          "default": true,
          "type": "dash",
          "file": atob(getURL),
          "drm": {
            "clearkey": {"keyId": atob(getKEY), "key": atob(getKEY2)}
          },
          "label": "0"
        }
      ]
    }],
    logo: { file: "https://sfntv.xyz/opa2.webp", position: 'top-right' },
    width: "100%",
    height: "100%",
    aspectratio: "16:9",
    autostart: true,
    mute: false,
    cast: {},
    sharing: {
            link: "https://sfntv.xyz"
},
});
</script>
</body>

</html>
