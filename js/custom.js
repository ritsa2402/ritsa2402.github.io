/*Funcionabilidad de los botones del Slider*/
document.addEventListener('DOMContentLoaded', function() {
    const radiobotons = document.querySelectorAll('input[name="slider"]');
    const slider = document.querySelector('.slider-container');

    radiobotons.forEach((radio, index) => {
        radio.addEventListener('change', () => {
            const cambio = -index * 100 + '%';
            slider.style.transform = 'translateX(' + cambio + ')';
        });
    });
});

/*Menu y Submenu*/
document.addEventListener("DOMContentLoaded", function() {
    /**variables para conectar el menu con su respectivo submenu*/ 
    const menuOculto1 = document.getElementById('menuOculto1');
    const menuPrincipal1 = document.querySelector('.CALZADO');
    const menuOculto2 = document.getElementById('menuOculto2');
    const menuPrincipal2 = document.querySelector('.MUJER');
    const menuOculto3 = document.getElementById('menuOculto3');
    const menuPrincipal3 = document.querySelector('.HOMBRE');
    const menuOculto4 = document.getElementById('menuOculto4');
    const menuPrincipal4 = document.querySelector('.NIÑOS');
    const menuOculto5 = document.getElementById('menuOculto5');
    const menuPrincipal5 = document.querySelector('.BLACK');
    
    /**Submenu 1*/
    /**Esto sirve para cuando se coloca el cursor aparezca el submenu */
    menuPrincipal1.addEventListener('mouseover', function() {
        menuOculto1.classList.add('active');
    });
    menuOculto1.addEventListener('mouseover', function() {
        menuOculto1.classList.add('active');
    });
    menuOculto1.addEventListener('mouseout', function() {
        menuOculto1.classList.remove('active');
    });
    /**Submenu 2*/
    /**Esto sirve para cuando se coloca el cursor aparezca el submenu */
    menuPrincipal2.addEventListener('mouseover', function() {
        menuOculto2.classList.add('active');
    });
    /*Esto sirve para que se mantenga el submenu luego de quiar el cursor del menu pero sin quitarlo del submenu*/
    menuOculto2.addEventListener('mouseover', function() {
        menuOculto2.classList.add('active');
    });
    /*Esto sirve que para cuando quite el cursor del menu como del submenu, se oculte el submenu*/
    menuOculto2.addEventListener('mouseout', function() {
        menuOculto2.classList.remove('active');
    });
    /**Submenu 3*/
    /**Esto sirve para cuando se coloca el cursor aparezca el submenu */
    menuPrincipal3.addEventListener('mouseover', function() {
        menuOculto3.classList.add('active');
    });
    /*Esto sirve para que se mantenga el submenu luego de quiar el cursor del menu pero sin quitarlo del submenu*/
    menuOculto3.addEventListener('mouseover', function() {
        menuOculto3.classList.add('active');
    });
    /*Esto sirve que para cuando quite el cursor del menu como del submenu, se oculte el submenu*/
    menuOculto3.addEventListener('mouseout', function() {
        menuOculto3.classList.remove('active');
    });
    /**Submenu 4*/ 
    /**Esto sirve para cuando se coloca el cursor aparezca el submenu */
    menuPrincipal4.addEventListener('mouseover', function() {
        menuOculto4.classList.add('active');
    });
    /*Esto sirve para que se mantenga el submenu luego de quiar el cursor del menu pero sin quitarlo del submenu*/
    menuOculto4.addEventListener('mouseover', function() {
        menuOculto4.classList.add('active');
    });
    /*Esto sirve que para cuando quite el cursor del menu como del submenu, se oculte el submenu*/
    menuOculto4.addEventListener('mouseout', function() {
        menuOculto4.classList.remove('active');
    });
    /**Submenu 5 */
    /**Esto sirve para cuando se coloca el cursor aparezca el submenu */
    menuPrincipal5.addEventListener('mouseover', function() {
        menuOculto5.classList.add('active');
    });
    /*Esto sirve para que se mantenga el submenu luego de quiar el cursor del menu pero sin quitarlo del submenu*/
    menuOculto5.addEventListener('mouseover', function() {
        menuOculto5.classList.add('active');
    });
    /*Esto sirve que para cuando quite el cursor del menu como del submenu, se oculte el submenu*/
    menuOculto5.addEventListener('mouseout', function() {
        menuOculto5.classList.remove('active');
    });
    /*Esto sirve para que cuando coloque el cursor en otro menu se oculte el submenu anterior y quede el que se selecciona
    adicionalmente evita que aprezcan los submenus juntos*/
    menuPrincipal1.addEventListener('mouseout', function() {
        menuOculto2.classList.remove('active');
        menuOculto3.classList.remove('active');
        menuOculto4.classList.remove('active');
        menuOculto5.classList.remove('active');
    });
    menuPrincipal2.addEventListener('mouseout', function() {
        menuOculto1.classList.remove('active');
        menuOculto3.classList.remove('active');
        menuOculto4.classList.remove('active');
        menuOculto5.classList.remove('active');
    });
    menuPrincipal3.addEventListener('mouseout', function() {
        menuOculto1.classList.remove('active');
        menuOculto2.classList.remove('active');
        menuOculto4.classList.remove('active');
        menuOculto5.classList.remove('active');
    });
    menuPrincipal4.addEventListener('mouseout', function() {
        menuOculto1.classList.remove('active');
        menuOculto2.classList.remove('active');
        menuOculto3.classList.remove('active');
        menuOculto5.classList.remove('active');
    });
    menuPrincipal5.addEventListener('mouseout', function() {
        menuOculto1.classList.remove('active');
        menuOculto2.classList.remove('active');
        menuOculto3.classList.remove('active');
        menuOculto4.classList.remove('active');
    });
});
/*Funcionabilidad de los enlaces registrar e iniciar para que al darle click a uno desaperezca el otro y quede el cuadro correspondiente
o viceversa*/
$(document).ready(function() {
    // Al hacer clic en "Registrarse"
    $("#enlace-registro").click(function() {
        $("#cuadroregistro").show(); // Muestra el cuadro de registro
        $("#cuadroingreso").hide(); // Oculta el cuadro de inicio de sesión
    });

    // Al hacer clic en "Iniciar sesión"
    $("#enlace-inicio").click(function() {
        $("#cuadroingreso").show(); // Muestra el cuadro de inicio de sesión
        $("#cuadroregistro").hide(); // Oculta el cuadro de registro
    });
});
/*Tabla comentario */
$(document).ready(function(){
    $("#table .tablaa").click(function(){
        window.getid= $(this).find("td").eq(0).text();
        $(".inputid").val(window.getid);
    });
});

/*Busqueda */

