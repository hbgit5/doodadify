var context, dd_canvas, video;
// Put event listeners into place
window.addEventListener("DOMContentLoaded", function () {
    // Grab elements, create settings, etc.
    dd_canvas = document.getElementById("canvas");
    context = dd_canvas.getContext("2d");
   
     = 
    var videoObj = {
            "video": true
        },
        errBack = function (error) {
            console.log("Video capture error: ", error.code);
        };

}, false);

function snapshot() {
    var data = dd_canvas.toDataURL();
    $.post('upload.php', {
        img: data
    }, function (response) {
        console.log('done uploading');
    });
}

//save the image using the save button on the canvas 

$("#canvas-save").click(function() {
    
});