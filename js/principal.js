function cambiapagina(page) {

    var iframe = document.getElementById("container");
    iframe.src = page;

}



function createMenu(items,imagenes) {

    var menu = document.getElementById("menu");

    menu.innerHTML = "";
    var percnt = 100 / items.length;
   // var iframePage = document.getElementById("container").contentWindow.;

   
 

     
    for (var i = 0; i < items.length; i++) {

        var divButton = document.createElement("div");
        var divImg = document.createElement("div");
        var divText = document.createElement("div");
        var labeltxt = document.createElement("label");
        var image = document.createElement("img");

        divButton.style.height = percnt + "%";

        image.src = "Images/"+imagenes[i];
        labeltxt.innerHTML = items[i];

        image.width = "5px"; 
        image.height = "50px";

     
        

        divButton.innerHTML = items[i];

        switch (i+1) {

            case 1: divButton.onclick = function () {

                var x=  metodos[i];
               document.getElementById("container").contentWindow.opcion1();
            };
                break;
            case 2: divButton.onclick = function () {
                document.getElementById("container").contentWindow.opcion2();
            };
                break;
            case 3: divButton.onclick = function () {
                document.getElementById("container").contentWindow.opcion3();
            };
                break;
            case 4: divButton.onclick = function () {
                document.getElementById("container").contentWindow.opcion4();
            };
                break;
            case 5: divButton.onclick = function () {
                document.getElementById("container").contentWindow.opcion5();
            };
                break;
            
        }

        divImg.appendChild(image);
        divText.appendChild(labeltxt);
        
        divButton.appendChild(divImg);
        divButton.appendChild(divText);

        menu.appendChild(divButton);


       
    }

    
    
}
