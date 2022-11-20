$(document).ready(function(){
    $("#cambio").click(function(){
        
        document. getElementById('login').style.opacity ='0';
        document. getElementById('disfruta').style.opacity ='0';
        document. getElementById('registro').style.opacity ='1';
        document. getElementById('login').style.zIndex ='10';
        document. getElementById('registro').style.zIndex ='100';
        document. getElementById('in').style.opacity ='0';
        document. getElementById('ir').style.opacity ='1';
        document. getElementById('in').style.zIndex ='10';
        document. getElementById('ir').style.zIndex ='100';
        document.getElementById("imgss").src="http://localhost/tecnoagro/Assets/Imgs/registro.png";
        })
})
$(document).ready(function(){
    $("#cambio2").click(function(){
        document. getElementById('login').style.opacity ='1';
        document. getElementById('disfruta').style.opacity ='1';
        document. getElementById('registro').style.opacity ='0';
        document. getElementById('login').style.zIndex ='100';
        document. getElementById('registro').style.zIndex ='10';
        document. getElementById('in').style.opacity ='1';
        document. getElementById('ir').style.opacity ='0';
        document. getElementById('in').style.zIndex ='100';
        document. getElementById('ir').style.zIndex ='10';
        document.getElementById("imgss").src="http://localhost/tecnoagro/Assets/Imgs/inicio.png";
        })
})
