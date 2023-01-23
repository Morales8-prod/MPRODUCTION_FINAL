<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
<main>
<!-- H1 IMPORTANTE -->

  <div class = bloqueone>
    <h1 class = informacion>
        <span class="negro">
            EDITOR, 
        </span>
        <span class="naranja">
            VIDEOGRAFÍA, 
        </span>
        <br class="salto">
        <span class="negro" >
            FOTOGRAFÍA, 
        </span>
        <br id="saltopant">
        <span class="naranja">
            DISEÑO GRÁFICO Y
        </span>
        <br class="salto">
        <SPAN class="negro" >
            DISEÑO <span class="negroauto"> 3D</span>
        </SPAN>
    </h1>
</div>
<!-- Slider -->
<div id="slider">
    <div class="slides">
      <div class="slider">
        <div class="legend"></div>
        <div class="content">
         
        </div>
        <div class="image">
          <img src="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/LAVUELTA_-4.jpg">
        </div>
      </div>
      <div class="slider">
        <div class="legend"></div>
        <div class="content">
         
        </div>
        <div class="image">
          <img src="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/LAVUELTA_.jpg">
        </div>
      </div>
      <div class="slider">
        <div class="legend"></div>
        <div class="content">
         
        </div>
        <div class="image">
          <img src="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/LAVUELTA_-8.jpg">
        </div>
      </div>
      <div class="slider">
        <div class="legend"></div>
        <div class="content">
         
        </div>
        <div class="image">
          <img src="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/LAVUELTA_-10.jpg">
        </div>
      </div>
    </div>
    <div class="switch">
      <ul>
        <li>
          <div class="on"></div>
        </li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>

  <!-- INFO -->
<section class="bloqueII">
  <p class="tipo">Fotografía deportiva.</p>
  <p class="cita">-LA VUELTA 22'-</p>
  <P> <span class="negroauto">M</span>Production</P>
</section>

<!-- VIDEO -->
<?php include 'includes/templates/video.php'; ?>
<!-- GALERÍA -->

  <Section class="galeria">
    <div class="galeria_container">
      <div class="galeria__items"><a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/LAVUELTA_-10.jpg">

        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/LAVUELTA10.jpg" alt="" class="galeria__imgI"> 
      </a>
    </div>
      <div class="galeria__items">
        <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/web_lavuelta/_-2.jpg">
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/web_lavuelta/2.jpg" alt="" class="galeria__img">
      </a>
    </div>
      <div class="galeria__items">
        <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/web_lavuelta/_-4.jpg">
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/LAVUELTA/web_lavuelta/4.jpg" alt="" class="galeria__img">
      </a>
      </div>
      <div class="galeria__items"> <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/1.jpg">
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/1.jpg" alt="" class="galeria__imgIV">
        </a>
      </div>
      <div class="galeria__items">
         <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/MengibarFS37.jpg">
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/MengibarFS37.jpg" alt="" class="galeria__imgV">
        </a>
      </div>
      <div class="galeria__items">
         <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/_-2.jpg">
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/_-2.jpg" alt="" class="galeria__img">
      </a>
      </div>
      <div class="galeria__items">
        <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/3.jpg">
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/3.jpg" alt="" class="galeria__img">
      </a>
      </div>
      <div class="galeria__items">
        <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/4.jpg"> 
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/4.jpg" alt="" class="galeria__img">
      </a>
      </div>
      <div class="galeria__items">
        <a data-fslightbox="gallery" href="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/5.jpg">
        <img loading="lazy" src="<?= WEBROOT ?>assets/MULTIMEDIA/WEB/5.jpg" alt="" class="galeria__img">
      </a>
      </div>
  
    </div>
    <script src="<?= WEBROOT ?>assets/js/fslightbox.js"></script>    
  </Section>

  <!-- FORMULARIO -->
  <?php include 'includes/form.php'; ?>
  <section class="formulario">
    <form id="formulario" action="" method="post" >
    <p class="parrafoformulario">Ponte en contacto</p>
    <div class="divformulario">
    <label class="labelform" for="input">Nombre*</label>
    <input class="inputform" id="usuario" type="text" name="Nombre" value       
     placeholder = "Ingresa tu nombre" maxlength="20">
    <p></p>   
  </div>
  <div class="divformulario">
    <label class="labelform" for="input">Email*</label>
    <input class="inputform" id="email" type="email" name="email" value placeholder = "Ingresa tu email" maxlength="20" >
    <p></p>   
  </div>
  <div class="divformulario">
    <label class="labelform" for="input">Teléfeno*</label>
    <input class="inputform" id="telefono" type="tel" name="telefono" value placeholder = "Ingresa tu teléfono"  >
    <p></p>   
  </div>
  <div class="divformulario">
    <label class="labelform" for="input">Asunto*</label>
    <input class="inputform" id="asunto" type="text" name="Asunto" value placeholder = "Escribe el asunto"  >
    <p></p>   
  </div>
  <div class="divformulario">
    <label class="labelform" for="textarea">Mensaje*</label>
    <textarea name="mensaje" id="textarea"  value placeholder = "Escribe tu mensaje aquí..." ></textarea>
    <p></p>   
  </div>

  <input class = "boton" type="submit" name="ok"><span id="enviar">Enviar</span></input>
  </form>
  </section>

  <script> 
    const form = document.querySelector('#formulario')
    const usuario = document.getElementById('usuario')
    const email = document.getElementById('email')
    const telefono = document.getElementById('telefono')
    const asunto = document.getElementById('asunto')
    const textarea = document.getElementById('textarea')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })
    
    const validaCampos = ()=> {
        //obtener los valores ingresados por el usuario
        const usuarioValor = usuario.value.trim()
        const emailValor = email.value.trim()
        const telefonoValor = telefono.value.trim()
        const asuntoValor = asunto.value.trim()
        const textareaValor = textarea.value.trim();
     
        //validando campo nombre
        
        if(!usuarioValor){
            validaFalla(usuario, 'Campo obligatorio')
 
        } else if(/^([0-9])*$/.test(usuarioValor)){
          validaFalla(usuario, 'Tu nombre no puede ser un digito numérico')     
        } else{
          validaOk(usuario) 
           
        }
   

        //validando campo email
        if(!emailValor){
            validaFalla(email, 'Campo obligatorio')            
        }else if(!validaEmail(emailValor)) {
          
            validaFalla(email, 'El e-mail no es válido')
        }else {
            validaOk(email)
        }

              //validando campo telefono
              

        if(!telefonoValor){
            validaFalla(telefono, 'Campo obligatorio')
 
        } else if(telef.test(telefonoValor)){
          
           validaOk(telefono) 
          
        } else {
          validaFalla(telefono, 'Escribe bien tu teléfono Ej: +34666555444')
            
        }
         //validando campo asunto
         
         if(!asuntoValor){
            validaFalla(asunto, 'Campo obligatorio')            
 
        }else {
            validaOk(asunto)
        }

         //validando campo textarea
         if(!textareaValor){
            validaFalla(textarea, 'Campo obligatorio')            
        } else if (textareaValor.length < 40) {             
            validaFalla(textarea, 'Debe tener 40 caracteres cómo mínimo.')
        } else if (textareaValor.length > 250) {             
            validaFalla(textarea, 'No puede tener más de 250 caracteres')
        }else {
            validaOk(textarea)
        }

    }



    const validaFalla = (input, msje) => {
        const divformulario = input.parentElement
        const aviso = divformulario.querySelector('p')
        aviso.innerText = msje

        divformulario.className = 'divformulario falla'
    }
    const validaOk = (input, msje) => {
        const divformulario = input.parentElement
        divformulario.className = 'divformulario ok'
    }

    const validaEmail = (email) => {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);        
    }

    const telef = new RegExp("^(\\+34|0034|34)?[6789]\\d{8}$");
    
  </script>



  
<?php incluirTemplate('footer');?>
</main>



</body>
</html>

