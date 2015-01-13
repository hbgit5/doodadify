var canvas = new fabric.Canvas('c');
//canvas.setWidth(1000);
//canvas.setHeight(1000);
//fabric.Image.formURL(put the imag add function in here){}
fabric.Image.fromURL("images/doodas_sausage/dog_bacon.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.25).set({
            left: 150,
            top: 150,
            angle: -15
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
}); 

fabric.Image.fromURL("images/doodas_sausage/dog_corndog.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.25).set({
            left: 550,
            top: 150,
            angle: -35
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
}); 

fabric.Image.fromURL("images/doodas_sausage/dog_beefhot.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.15).set({
            left: 50,
            top: 250,
            angle: -35
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
        
         oImg.animate('left', 600, {
            onChange: canvas.renderAll.bind(canvas)
         });
}); 

fabric.Image.fromURL("images/doodas_sausage/dog_chicago.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.25).set({
            left: 250,
            top: 50,
            angle: -15
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
    
}); 

fabric.Image.fromURL("images/doodas_sausage/dog_stick.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.25).set({
            left: 350,
            top: 25,
            angle: 25
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
    
         oImg.animate('top', 200, {
            onChange: canvas.renderAll.bind(canvas)
         });
}); 

fabric.Image.fromURL("images/doodas_sausage/dog_dodger.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.1).set({
            left: 450,
            top: 300,
            angle: -15
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
}); 

fabric.Image.fromURL("images/doodas_sausage/dog_pretzel.png", function(oImg) {
        //if we want to do anything with the image before showing it on canvas add here
        oImg.scale(.25).set({
            left: 560,
            top: 120,
            angle: 35
        });
    
        canvas.add(oImg); // give it a call back once image loaded and created
    
}); 
