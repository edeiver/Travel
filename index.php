<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" 
      crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body id="home" class="scrollspy">
      <div class="navbar-fixed">
        <nav class="blue">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">
               <i class="material-icons hide-on-small-only">explore</i>TravelEdeiver</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                <i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li>
                  <a href="#home">Inicio</a>
                </li>
                <li>
                  <a href="#search">Buscar</a>
                </li>
                <li>
                  <a href="#popular">Destinos Populares</a>
                </li>
                <li>
                  <a href="#gallery">Galeria</a>
                </li>
                <li>
                  <a href="#contact">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <ul class="sidenav" id="mobile-nav">
        <li>
          <a href="#home">Inicio</a>
        </li>
        <li>
          <a href="#search">Buscar</a>
        </li>
        <li>
          <a href="#popular">Destinos Populares</a>
        </li>
        <li>
          <a href="#gallery">Galeria</a>
        </li>
        <li>
          <a href="#contact">Contacto</a>
        </li>
      </ul>
      <!--slider/carouser-->
      <div class="slider ">
        <ul class="slides">
          <li>
            <img src="img/3.jpg" alt="">
            <div class="caption center-aling">
              <h3>Lorem, ipsum dolor.</h3>
              <h5 class="light grey-text text-lighten-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, non!
              </h5>
            </div>
          </li>
          <li>
            <img src="img/1.jpg" alt="">
            <div class="caption left-aling">
              <h3>Lorem, ipsum dolor.</h3>
              <h5 class="light grey-text text-lighten-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, non!
              </h5>
            </div>
          </li>
          <li>
            <img src="img/2.jpg" alt="">
            <div class="caption right-aling">
              <h3>Lorem, ipsum dolor.</h3>
              <h5 class="light grey-text text-lighten-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, non!
              </h5>
            </div>
          </li>
        </ul>
      </div>
    <!--busqueda-->  
    
    <div class="section section-search blue-grey darken-4 white-text center scrollspy" id="search">
        <div class="container">
          <div class="row">
            <div class="col s12">
              <h3>Buscar Destino</h3>
              <div class="input-field">
                <input type="text" class="white gray-text autocomplete" 
                id="auntocmplete-input" placeholder="Barranquilla, Cartagena etc">
                <a href="#" class="btn btn-large right"><i class="material-icons large ">search</i></a>
              </div>              
            </div>
          </div>
        </div>
      </div>
      <!--parallax-->
      <div class="parallax-container">
          <div class="parallax">
              <img src="img/p5.jpg" alt="">
          </div>
      </div>
      <!--Caja de iconos-->
      <div class="section section-icons gray lighten-4 center">
        <div class="container">
          <div class="row">
            <div class="col s12 m4">
              <div class="card-panel">
                <i class="material-icons large teal-text">room</i>
                <h4>Escoje</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, dignissimos?</p>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card-panel">
                <i class="material-icons large teal-text">store</i>
                <h4>Compra Vuelos</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, dignissimos?</p>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card-panel">
                <i class="material-icons large teal-text">airplanemode_active</i>
                <h4>Vuelos Baratos</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, dignissimos?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--destinos populares-->
     <div id="popular" class="section section-popular scrollspy">
       <div class="container">
         <div class="row">
           <div class="center">
            <h4><span class="teal-text">Populares</span></h4>
           </div>
           <div class="col s12 m4">
             <div class="card">
               <div class="card-image">
                 <img src="img/2.jpg" alt="">
                 <span class="card-title">Barranquilla, Colombia</span>
               </div>
               <div class="card-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, alias.
              </div>
             </div>
           </div>
           <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/2.jpg" alt="">
                <span class="card-title">Cartagena, Colombia</span>
              </div>
              <div class="card-content">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, alias.
             </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/3.jpg" alt="">
                <span class="card-title">Bogota, Colombia</span>
              </div>
              <div class="card-content">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, alias.
             </div>
            </div>
          </div>
         </div>
       </div>
     </div> 
     <!--redes sociales-->
     <div class="section section-follow teal darken-2 white-text center">
       <div class="container">
        <div class="row">
            <div class="col s12">
                <h4>Siguenos</h4>
                <p>Todas nuestras redes sociales</p>
                <a href="#" class="white-text"></a>
                <i class="fab fa-facebook fa-4x"></i>
                <a href="#" class="white-text"></a>
                <i class="fab fa-twitter fa-4x"></i>
                <a href="#" class="google-plus-text"></a>
                <i class="fab fa-facebook fa-4x"></i>
                <a href="#" class="white-text"></a>
                <i class="fab fa-instagram fa-4x"></i>
              </div>
        </div>
       </div>
     </div>
     <!--galeria-->
     <div id="gallery" class="section section-gallery scrollspy">
       <div class="container ">
         <h4 class="center">
           <span class="teal-text">
             Galeria
           </span>
         </h4>
         <div class="row card-panel z-depth-5">
           <div class="col s12 m3">
          <img src="img/p1.png" alt="" class="materialboxed responsive-img card-panel">   
           </div>
           <div class="col s12 m3">
              <img src="img/p2.jpg" alt="" class="materialboxed responsive-img card-panel">   
          </div>
               <div class="col s12 m3">
                  <img src="img/p3.jpg" alt="" class="materialboxed responsive-img card-panel">   
               </div>
               <div class="col s12 m3">
                  <img src="img/p3.jpg" alt="" class="materialboxed responsive-img card-panel">   
               </div>
         </div>
         <div class="row card-panel z-depth-5">
            <div class="col s12 m3 ">
           <img src="img/p1.png" alt="" class="materialboxed responsive-img card-panel">   
            </div>
            <div class="col s12 m3">
               <img src="img/p2.jpg" alt="" class="materialboxed responsive-img card-panel">   
           </div>
                <div class="col s12 m3">
                   <img src="img/p3.jpg" alt="" class="materialboxed responsive-img card-panel">   
                </div>
                <div class="col s12 m3">
                   <img src="img/p3.jpg" alt="" class="materialboxed responsive-img card-panel">   
                </div>
          </div>

       </div>
     </div>
     <div class="parallax-container">
        <div class="parallax">
            <img src="img/p6.jpg" alt="">
        </div>
    </div>
     <!--contacto-->
     <div id="contact" class="section section-contact scrollspy">
       <div class="container">
         <div class="row">
           <div class="col s12 m6">
             <div class="card-panel  indigo darken-1 white-text center">
               <i class="material-icons">email</i>
               <h5>Conctactanos Para Viajar</h5>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, voluptate?</p>
             </div>
             <ul class="collection with-header">
               <li class="collection-header"><h4>Localizacion</h4></li>
               <li class="collection-item">Agencia de viajes</li>
               <li class="collection-item">Avenida siempreviva 123</li>
               <li class="collection-item">Barranquilla</li>
             </ul>
           </div>
           <div class="col s6 m6">
            <div class="card-panel gray lighten-3">
              <h5 class="center"><i class="material-icons large left">content_paste</i>Llene el formulario</h5>
              
              <div class="input-field">
                <input type="text" placeholder="nombre">
              </div>
              <div class="input-field">
                  <input type="email" placeholder="email">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="direccion">
                  </div>
                  <div class="input-field">
                      <input type="text" placeholder="telefono">
                    </div>
                    <div class="input-field">
                        <textarea name="" id="" cols="30" rows="10"
                        placeholder="deje su mensaje: "
                        class="materialize-textarea"></textarea>
                    </div>
             <!--<input type="submit" value="submit" class="btn  indigo darken-1 center-aling"> -->
             <a href="#" class="btn indigo darken-1  waves-effect waves-light"><i class="material-icons right ">send</i>Enviar</a>      
            </div> 
           </div>
         </div>
       </div>
     </div>
     <!--footer-->
<footer class="page-footer teal darken-1">
  <div class="container">
    <div class="row">
      <div class="col s12 l6">
        <h5 class="white-text">Edeiver Barranco</h5>
        <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a href="#" class="grey-text text-lighten-3">Link 1</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      &copy; 2018 
      <a href="#" class="grey-text text-lighten-4 right">Mas Links</a>
    </div>
  </div>
</footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      //sidenav
      const sideNav = document.querySelector('.sidenav');
      M.Sidenav.init(sideNav);
      //slider
      const slider = document.querySelector('.slider');
      M.Slider.init(slider,{
        indicators: false,
        height: 600,
        transitions:500,

      });
      //autocompletar
      const ac = document.querySelector('.autocomplete');
      M.Autocomplete.init(ac,{
        data:{
          "Barranquilla": null,
          "Cartagena": null,
          "Bogota": null,
          "Colombia": null,
          "Miami": null,
          "New York": null,
        }
      });
      //materialbox
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb);

    //scroolspy
    const ss= document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss,{});
    
    const para = document.querySelectorAll('.parallax');
    M.Parallax.init(para);

  /*     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });*/
        </script>
    </body>
  </html>