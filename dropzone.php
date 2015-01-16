<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="dropzone.css">
    <style>
        #c {
        border: 2px dotted blue;
    }
    
    </style>
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="dropzone.js"></script>
    <script src="fabric.min.js"></script>
</head>

<body>
    <div id="test" class="dropzone"></div>
    <canvas id="c" width="600" height="600"></canvas>
    <script>
        var canvas = new fabric.Canvas('c', {
            backgroundImage: 'img/under_the_s.jpg'
        });
        
        Dropzone.autoDiscover = false;
        var tester = new Dropzone("#test", {url: 'dropzone_upload.php', paramName: 'background_file'});
        
        tester.on('success', function(file, response) {
           canvas.setBackgroundImage(response, canvas.renderAll.bind(canvas));
        });
        
        
        
    </script>
</body>

</html>
