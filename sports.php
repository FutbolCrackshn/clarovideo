<style type="text/css">
body {
   margin: 0;
   padding: 0;
}
</style>
ConsoleBan.init({
  redirect: "/TV-en-VIVO"
})
</script>
<script src="https://cdn.jsdelivr.net/npm/console-ban@4.1.0/dist/console-ban.min.js"></script>
<script type="text/javascript">document.oncontextmenu = function(){return false};</script>
<script>
        // default options
        ConsoleBan.init()
        // custom options
        ConsoleBan.init({
            redirect: ''
        })
    </script>
<script type="text/javascript">
function getParameterByName(name) {
	name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
	var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
	results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var id = getParameterByName('id');
if (id == "#") {alert('Vuelve a la pÃ¡gina anterior');}
var getLang = getParameterByName('lang');
</script>
<div id="player"></div>
<script>
if (getLang)
	lang = "&lang="+getLang;
else
	lang = "";

document.write('<iframe allow="encrypted-media" src="https://125154c4.clarovideo-8po.pages.dev/mpd-sports.php?id='+id+lang+'" width="100%" height="100%" scrolling="no" frameBorder="0" allowfullscreen></iframe>');
</script>
