var canvas = new fabric.Canvas('c');
//canvas.setWidth(1000);
//canvas.setHeight(1000);
//fabric.Image.formURL(put the imag add function in here){}
fabric.Image.fromURL("images/sunflower.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.25).set({
            left: 150,
            top: 150,
            angle: -15
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
    
}); 

