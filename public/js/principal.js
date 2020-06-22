// submenu usuario
$(document).ready(function(){
    $(".usuario ul li a").click(function(){
        $(".submenu").toggleClass("active");
    })
})
// pie de pagina 
$(document).ready(function(){
    $(".redes_sociales_footer").click(function(){
        $(".redes_sociales_footer_cont").toggleClass("active");
        $(".descripcion_footer_cont").toggleClass("active");
        $(".contacto_footer_cont").toggleClass("active");

    })
    $(".descripcion_footer").click(function(){
        $(".redes_sociales_footer_cont").toggleClass("active");
        $(".descripcion_footer_cont").toggleClass("active");
        $(".contacto_footer_cont").toggleClass("active");

    })
    $(".contacto_footer").click(function(){
        $(".redes_sociales_footer_cont").toggleClass("active");
        $(".descripcion_footer_cont").toggleClass("active");
        $(".contacto_footer_cont").toggleClass("active");

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

// ocultar el submenu vertical

$(document).ready(function(){
    $('.menu_vertical_menu ul li:has(ul)').click(function(e){
        
        e.preventDefault();
        if($(this).hasClass('activado'))
        {
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }
        else
        {
            $('.menu_vertical_menu ul li ul').slideUp();
            $('.menu_vertical_menu ul li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        }
    });
});