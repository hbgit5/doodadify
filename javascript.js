var sausages = [
    "dog_bacon.png",
    "dog_beefhot.png",
    "dog_chicago.png",
    "dog_corndog.png",
    "dog_dodger.png",
    "dog_mustard.png",
    "dog_pink.png",
    "dog_pretzel.png",
    "dog_stick.png",
    "dog_wrap.png",
    "pig.png"
];

var eggs = [
    "egg_1.png",
    "egg_2.png",
    "egg_3.png",
    "egg_4.png",
    "egg_5.png",
    "egg_6.png"
];

var tomatoes = [
    "tomatoes_1.png",
    "tomatoes_2.png",
    "tomatoes_3.png",
    "tomatoes_4.png",
    "tomatoes_5.png",
    "tomatoes_6.png",
    "tomatoes_7.png"
];

var canvas;

$(function () {
    /* Modal auth tabs */
    $('#tabs a').click(function (event) {
        event.preventDefault()
        $(this).tab('show')
    });
    
    /* Fabric Canvas */
    canvas = new fabric.Canvas('c');
    
    $('#sausage-fest').click(canvas_sausages);
    $('#egg-splat').click(canvas_eggs);
    $('#tomato-toss').click(canvas_tomatoes);
    
    $('#canvas-del').click(function() {
        canvas.getActiveObject().remove();
    });
    
    $('#canvas-clear').click(function() {
        canvas.clear().renderAll();
    });
    
    $('#canvas-save').click(function() {
        var fabric_json = JSON.stringify(canvas.toJSON());
        var img_data = canvas.toDataURL();
        var params = {
            fabric_data: fabric_json,
            img: img_data
        }
        $.post('save.php', params, function(response) {
            var canvas_id = response.data.canvas_id;
            window.location = 'index.php?id='+canvas_id;
        }, 'json');
    });
    
    $('.doodad-boxes img').click(function () {
        var url = $(this).attr('data-img');
        fabric.Image.fromURL(url, function (oImg) {
            oImg.set({
                left: fabric.util.getRandomInt(0, 730),
                top: fabric.util.getRandomInt(0, 380),
                angle: fabric.util.getRandomInt(-360, 360)
            });
            canvas.add(oImg);
        });
    });
    
    /**  DANGER DROPZONE */
    Dropzone.autoDiscover = false;
    var bg_upload = new Dropzone("#bg-dropzone-container", {url: 'dropzone_upload.php', paramName: 'background_file'});

    bg_upload.on('success', function(file, response) {
        $('#canvas-upload').parent().removeClass('open');
       canvas.setBackgroundImage(response, canvas.renderAll.bind(canvas));
    });
    
});

function canvas_sausages() {
   
    for(var i = 0; i < sausages.length; i++) {
        var url = 'img/doodads_sausage/'+ sausages[i];
        fabric.Image.fromURL(url, function (oImg) {
            oImg.set({
                left: fabric.util.getRandomInt(0, 730),
                top: fabric.util.getRandomInt(0, 380),
                angle: fabric.util.getRandomInt(-360, 360)
            });
            canvas.add(oImg);
        });
    }
}

function canvas_eggs() {
   
    for(var i = 0; i < eggs.length; i++) {
        var url = 'img/doodads_eggs/'+ eggs[i];
        fabric.Image.fromURL(url, function (oImg) {
            oImg.set({
                left: fabric.util.getRandomInt(0, 730),
                top: fabric.util.getRandomInt(0, 380),
                angle: fabric.util.getRandomInt(-360, 360)
            });
            canvas.add(oImg);
        });
    }
}

function canvas_tomatoes() {
   
    for(var i = 0; i < tomatoes.length; i++) {
        var url = 'img/doodads_tomatoes/'+ tomatoes[i];
        fabric.Image.fromURL(url, function (oImg) {
            oImg.set({
                left: fabric.util.getRandomInt(0, 730),
                top: fabric.util.getRandomInt(0, 380),
                angle: fabric.util.getRandomInt(-360, 360)
            });
            canvas.add(oImg);
        });
    }
}

//facebook share required JS
/*
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
*/