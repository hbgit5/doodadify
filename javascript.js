var canvas;

$(function() {
    /* Modal auth tabs */
    $('#tabs a').click(function (event) {
        event.preventDefault()
        $(this).tab('show')
    });
    
    /* Fabric Canvas */
    var canvas = new fabric.Canvas('doodad-canvas', {
        backgroundImage: 'img/under_the_s.jpg'
    });
});


//facebook share required JS

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));