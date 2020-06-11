// submenu usuario
$(document).ready(function(){
    $(".usuario ul li a").click(function(){
        $(".submenu").toggleClass("active");
    })
})

// ocultar menu vertical
$(document).ready(function(){
    $(".hamburger").click(function(){
        $(".contenido_secundario").toggleClass("active");
        // clas=$(this.data("class"));
        // var omo=document.getElementsByClassName('contenedor_principal');
        // var p=omo[0].style.position;
        // alert(p);
    });
    // window.onload = function() { 
    //     // alert("It's loaded!"); 
    //     if(screen.width<992)
    //     {
    //         $(".contenido_secundario").addClass("active1");
    //     }
    //     else{
    //         $(".contenido_secundario").removeClass("active1");

    //     }
    //     if (window.innerWidth<=400)
    //     {
    //         $(".contenido_secundario").addClass("active1");
    //         // $(".hamburger").click(function(){
    //         //     $(".contenido_secundario").removeClass("active1");
    //         // });
            
    //     }
    //     else
    //     {
    //         $(".contenido_secundario").removeClass("active1");
    //     }
    // } 
    // $(window).resize(function(){

    //     if (window.innerWidth<=400)
    //     {
    //         $(".contenido_secundario").addClass("active1");
            
    //     }
    //     else
    //     {
    //         $(".contenido_secundario").removeClass("active1");
    //     }
    // })
    
})

// function m(){
//     $('.contenido_secundario').animate({opacity:"0"}, {duration: 1000, queue: false});
//   }
  
//   setTimeout(function() {    
//       m();
//   }, 3000);