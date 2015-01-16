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
    canvas = new fabric.Canvas('c', {
        backgroundImage: 'img/under_the_s.jpg'
    });
    
    $('#sausage-fest').click(canvas_sausages);
    $('#egg-splat').click(canvas_eggs);
    $('#tomato-toss').click(canvas_tomatoes);
    
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

