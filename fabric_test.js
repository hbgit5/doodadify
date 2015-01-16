// reference canvas element (with id="c")
var canvasEl = document.getElementById('doodad-canvas');

// get 2d context to draw on (the "bitmap" mentioned earlier)
var ctx = canvasEl.getContext('2d');

// set fill color of context
ctx.fillStyle = 'red';

// create rectangle at a 100,100 point, with 20x20 dimensions
ctx.fillRect(200, 200, 20, 20);



function snapshot() {
    alert('hi');
    var data = canvasEl.toDataURL();
    $.post('upload.php', {
        img: data
    }, function (response) {
        console.log('done uploading');
    });
}

//save the image using the save button on the canvas 
$("#canvas-save").click(snapshot);