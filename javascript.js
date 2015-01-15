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