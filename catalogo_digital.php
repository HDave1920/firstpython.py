<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>Pruebas de catalogo digital responsive</title>

  <!-- Css principal de la página-->
  <link rel="stylesheet" href="main.css" />

  <!-- Fuentes ( Montserrat) -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,900&display=swap"
    rel="stylesheet" />

  <!-- Librería de los sildes -->
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css" />
</head>

<body>
  <!--El nav con la clase fastnav es el panel lateral izquierdo que te acompaña a todos lados de la página;
    al poner el cursor encima de él éste muestra un listado de los traileres en donde pueden ir nuestros productos-->
  <nav class="fastnav">
    <div class="titlefastnav">
      <div>C</div>
      <div>A</div>
      <div>T</div>
      <div>Á</div>
      <div>L</div>
      <div>O</div>
      <div>G</div>
      <div>O</div>
      <div><br /></div>

      <div>D</div>
      <div>I</div>
      <div>G</div>
      <div>I</div>
      <div>T</div>
      <div>A</div>
      <div>L</div>
    </div>
    <div class="contentcolumn">
      <h1>Contamos con productos en:</h1>
      <a href="#productosvolteos" class="goto">
        <div class="fast-nav-element" id="gotovolteos">Volteos</div>
      </a>
      <a href="#productoscajassecas" class="goto">
        <div class="fast-nav-element">Cajas Secas</div>
      </a>

      <a href="#dolly" class="goto">
        <div class="fast-nav-element" id="gotoDollys">Dollys</div>
      </a>
      <a href="#gruas" class="goto">
        <div class="fast-nav-element" id="gotoGruas">Grúas</div>
      </a>
    </div>
  </nav>
  <!-- El header Firs-look contiene el fondo de el huerto y el botón de "conocenos"-->
  <header class="firstlook">
    <div class="videodepresentacion">
      <div id="Ihavethevideo">
        <div class="closepresentation"><img src="imagenes/x.png" /></div>
        <div class="asideofvideo">
          <img src="imagenes/logo1.png" alt="logo" />
          <h1>
            Somos una empresa dedicada a proveer los mejores precios a los
            transportistas del país. Contamos con con la infraestructura
            necesaria para el logro de sus metas de productividad, calidad y
            servicios.
          </h1>
        </div>
        <video id="videohuerto" poster="imagenes/fachada.jpeg" preload controls>
          <source src="videos/video.mov" />
        </video>
      </div>
      <img src="imagenes/logo1.png" id="logo" />
      <br />
      <button class="godown">¡Conocenos!</button>
    </div>
    <div class="flechita">
      <img src="imagenes/flecha.png" />
    </div>
  </header>
  <!-- El nav con la clase panel superior tambén te acompaña en ciertas partes de la página 
        y contiene la navegación más general que usualmente contiene un nav-->
  <nav class="panelsuperior" id="panelsuperior">
    <a class="nav-element" href="../inicio/index.php">INICIO</a>
    <a class="nav-element" href="../productos/">PRODUCTOS</a>
    <a class="nav-element" href="../contacto/">CONTACTO</a>
    <a class="nav-element" href="#login_register">INICIA SESIÓN</a>
  </nav>
<main>
  <!--El article presentation tiene:-->
  <article class="presentation">
      <div class="carrusel">
        <div class="elementodecarrusel"><img class="targetapresentacion" src="imagenes/Carrusel/Muncie.jpg"></div>
        <div class="elementodecarrusel"><img class="targetapresentacion" src="imagenes/Carrusel/Haldex.jpg"></div>
        <div class="elementodecarrusel"><img class="targetapresentacion" src="imagenes/carrusel/SAF Holland.jpg"></div>
        <div class="elementodecarrusel"><img class="targetapresentacion" src="imagenes/carrusel/sealco.jpg"></div>
        <div class="elementodecarrusel"><img class="targetapresentacion" src="imagenes/carrusel/phillips.jpg"></div>
        <div class="elementodecarrusel"><img class="targetapresentacion" src="imagenes/carrusel/Sultana.jpg"></div>
      </div>
  </article>

  <article class="catalogo" id="cat">
    <section id="productosvolteos">
        <div class="cintillo"><h1>Productos en Volteos</h1></div>
        <div class="imagenTracto">

          <div id="menuHaldexVolteo">
            <img src="imagenes/Sistemas adicionales/sistema completo abs.JPG" alt="Partes del Sistema ABS">
            <svg class="menus" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1200 675">

              <defs>
                <radialGradient id="BolitasHaldex" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                  <stop offset="0%" stop-color="white" stop-opacity="0" />
                  <stop offset="100%" stop-color="black" stop-opacity="1" />
                </radialGradient>
                <radialGradient id="BolitasHaldexHover" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                  <stop offset="0%" stop-color="#F7931E" stop-opacity="1" />
                  <stop offset="100%" stop-color="white" stop-opacity="0"/>
                </radialGradient>
              </defs>

              <circle class="bolitaVolteo absHaldexBolitas"  id="boosterVolteo" fill="#F7931E" stroke="white" stroke-width="2" stroke-miterlimit="10" cx="235" cy="43" r="28"/>
              <path id="boosterVolteoPath" fill="none" name="" class="absHaldexPath" stroke-miterlimit="10" d="M218.5 156v8l87-.25V174l-6 .25v8.25h7v3.5s1.75 8.5 7.958 12.5H328s2.417 4.333 4.125 5.667 7.5 0 7.5 0 2.583-1.5 2.875-5.75l5.542-3s.125 6.042 6.333 5.75 5.25-4.375 5.25-4.375l.053-2 8.072 3.979s.917 3.729 2.667 5.729H378s2.25-1 2.583-7H398s12.625-4 14.458-7.25 1.583-4.208 1.583-4.75 2.125-48.833-.708-51.667c0 0-1.287-4.677-1.99-5.552s-10.359-4.844-10.359-4.844l-4.875-1.938H380s-.953-6-3.688-7H370s-2.797 2.594-3.719 7.094L356 126.781l-4.563-.219-9.813-4.813s-.938-6.75-4.75-6.938-5.625-.031-5.625-.031-3.063 1.719-3.5 6.719H314s-3.5 1.438-6.156 6.156c0 0-1.781 6.344-1.719 9.219l-11.813.813s-.375 5.813 0 6.813H305s.25 9-.063 11H218l.5.5z"/>
              <path stroke="black" stroke-width="2" d="M256.467 60.971L310.5 124.5"/>
              
              <path fill="none" id="sensorHaldexVolteoPath" stroke-dasharray="200" stroke-dashoffset="200" stroke="white" stroke-width="2" stroke-miterlimit="10" d="M499 173.5h38l-1.167-2H498.5V160s-3-.5-4-.333V164l-2 .917V174s.5 2.333 3.333 2 2.5-.958 3.167-2.5z"/>
              <path fill="none" stroke="#000" stroke-miterlimit="10" d="M512.5 171.5l9.375-51.125"/>
              <circle  class="bolitaVolteo absHaldexBolitas" id="sensorHaldexVolteo" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="527" cy="93" r="28"/>
              
              <path id="arnesAbsVolteoPath" class="absHaldexPath" fill="none" stroke="white" stroke-miterlimit="10" d="M-.5 357.5H270l1.875.344.438 1.125-.031.781s-2.781-.125-3.781 1.688V364l2.125 2.438 7.875.156V364l-.969.359.406-5.859H280l7.406 2.063 32.844.313.625.625H324s2.375-13-.375-19H321l-.031 1H320l-.063 1H288l-7.063 2.063-.438-.531V340l2-.406V337.5H275s-2.813.563-2.688 3c0 0-.438 1.844 1.125 2.969l1.063.094V345l-2.219 1.5H-.5v11z"/>
              <circle class="BolitaVolteo absHaldexBolitas" id="arnesAbsVolteo" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="109" cy="289" r="28"/>
              <path fill="none" stroke="#000" stroke-miterlimit="10" d="M130.333 307.333l122 39.167"/>
              
              <path fill="none" id="N9002KDVolteopath" class="absHaldexPath" stroke="white" stroke-miterlimit="10" d="M604.5 391v19l1 1.25v13.25h5.5l1.5 2h12V389l2-1.688V368l1.292-2.458-.583-13.042-.709-5.666V339s-.499-2.5-4.333-2.5H619.5v-17h-4V313s-1.938-3-7.375-3.125-6.891 3.25-7.266 3.75l-.359.406v5.469h-1v3.5l-6 .063v4.438h-2v3.5l-8.5-.125s-3.5-3.125-5.5.75V371.5h-9v7.5s-.875.374-1.083 2.958c0 0-.417 1.833 1.708 3.375s2.188 1.542 2.188 1.542l.323.292 8.599.583 6.549.833 1.962-1.458 2.335.333.376 2.084.354.406.5.552H604.5v.5z"/>
              <path fill="none"  stroke="#000" stroke-miterlimit="10" d="M568.5 371.5l-50.167-55.667"/>
              <circle class="bolitaVolteo absHaldexBolitas" id="N9002KDVolteo" fill="#F7931E" stroke-miterlimit="10" cx="499" cy="295" r="28"/>
              
              <path fill="none" id="conectorHembraAbsVolteoPath" class="absHaldexPath" stroke-miterlimit="10" d="M371.75 351.938s.048.318.146.887l.228 8.4s.626 6.274 4.313 8.274H378l.5-2.125s2.875.125 4.25-1.875H387s1.688 2.313 1.5 4.5c0 0-.063 1.313 1.406 1.281s2.875-.094 2.875-.094l.719-1.938V365l16.667-1.063 1.333-.604v-.833h6.5l4.313-3.688 2.208.021.604.666H432l2.719-2.313.531-.109.031-7.578H435l-.344-3-3.125-2H425l-1 1h-2l-4-4h-6l-1.281-2H392.5V335l-1.031-2.5H388l-.188 3H382l-5.531-6H374s-2.469 1-2.5 3.406-.133 3.938-.133 3.938l1.133 1.141v1.703l-3 .031v9.938l.995.011.231 2.239 1.024.031z"/>
              <circle class="bolitaVolteo absHaldexBolitas" id="conectorHembraAbsVolteo" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="344" cy="289" r="28"/>
              <path fill="none" stroke="#000" stroke-width="2" stroke-miterlimit="10" d="M361.897 310.534l14.572 18.966"/>
              
              <path fill="none" id="moduladorVolteoPath" class="absHaldexPath" stroke-miterlimit="10" d="M768.5 384.801s3.332 3.643 7.832.226l.72-1.169 1.114.242 2.089 2.107.42.427 2.51-.063.596 1.253 8.78.064-.107-1.264 4.484-.109 6.234-3.063.688.031s-.219 3.016 2.594 4.016H811l2.188-2.25-.094-3.828.406-2.656V366.5h8.5l.542-11.26-.625-.74H819l-.229-2.875s-1.115-2.188-5.053-1.979l-1.219-.25v-.896H812l-.021-3.25-3.75-1.75H796l-.167-6.083s-.437-3.833-7.083-3.75-8.25 4.313-8.25 4.313V342l-1.084 1.313-10.803.167s-2.113 1.666-3.113 2.854V368l1 2.125V374l2 2.25v8.551z"/>
              <circle class="bolitaVolteo absHaldexBolitas" id="moduladorVolteo" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="853" cy="425" r="28"/>
              <path fill="none" stroke="#000" stroke-width="2" stroke-miterlimit="10" d="M828 412l-17-24.5"/>

              <circle id="manitasVolteo" class="bolitaVolteo absHaldexBolitas" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="976" cy="317" r="28"/>
              <path fill="none" stroke="black" stroke-width="2" stroke-miterlimit="10" d="M1002.875 324.856L1054.5 349"/>
              
              
              <path fill="none" class="absHaldexPath" id="tanqueAireHaldexVolteoPath" stroke="white" stroke-miterlimit="10" d="M636.875 463s-1.375 30.75 46.625 46.5H728l2.188-2.188s33.479-7.313 44.313-44.313"/>
              <circle fill="#F7931E" id="tanqueAireHaldexVolteo" class="bolitaVolteo absHaldexBolitas" stroke-miterlimit="10" cx="705" cy="576" r="28"/>
              <path fill="#F7931E" stroke="#020202" stroke-miterlimit="10" d="M704.5 548v-38"/>
      

              <g id="closeHaldexVolteo">
                <circle r="20" cx="1150" cy="30" stroke="white" fill="red" stroke-width="2"/>
                <line x1="1150" y1="30" x2="1157" y2="23" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                <line x1="1150" y1="30" x2="1143" y2="23" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                <line x1="1150" y1="30" x2="1143" y2="37" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                <line x1="1150" y1="30" x2="1157" y2="37" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                
              </g>
            </svg>
          </div>

          <div class="avisadoresAbsCajaSeca" id="absLeftVolteo"></div>
          <div class="avisadoresAbsCajaSeca" id="absRigthVolteo"></div> 
          <div id="rotuloMenuHaldexVolteo">
            <svg class="rotulosAbs" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 300 168.75">
              <rect stroke="none" fill="#0e6cb0" width="10%" height="100%" x="0" y="0"/>
              <rect stroke="none" fill="#0e6cb0" width="10%" height="100%" x="90%" y="0"/>
              <polygon points="280,70 295,84 280,98" fill="white" stroke="white" stroke-width="1"/>
            </svg>
          </div>
          <div id="rotuloMenuSealcoVolteo">
            <svg class="rotulosAbs" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 300 168.75">
              <rect stroke="none" fill="#0000fe" width="10%" height="100%" x="0" y="0"/>
              <rect stroke="none" fill="#0000fe" width="10%" height="100%" x="90%" y="0"/>
              <polygon points="20,70 5,84 20,98" fill="white" stroke="white" stroke-width="1"/>
            </svg>
          </div>


          <div id="descripcionDisparadorVolteoDiv" class="descripcionDisparador">
            <p id="descripcionDisparadorVolteo"></p>
          </div>
          <div class="marcasDesplazables" id="marcasVolteo"></div>
          <div class="marcasDesplazablesSecundario" id="marcasVolteoSecundario"></div>
          <div id="menu_volteo">
            <div id="closeVolteo"> &#10799; </div>
          </div>
          <img src="imagenes/volteoV2.jpg" id="volteo" />
          <!-- 🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎 SVG de Volteo 🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎-->
          <svg id="svgVolteo" class="menus" xmlns="http://www.w3.org/2000/svg" Viewbox="0 0 1200 675">

            <defs>

              <linearGradient id="gradienteTomasyBombas" gradientUnits="userSpaceOnUse" x1="451.5" y1="310.75" x2="471"
                y2="310.75">
                <stop offset="0" stop-color="#ed1c24" />
                <stop offset="1" stop-color="#00f" />
              </linearGradient>

              <linearGradient id="gradiente_disparadores" x1="0%" y1="0%" x2="100%" y2="0%" spreadMethod="pad">
                <stop offset="0%" style="stop-color: black;" />
                <stop offset="100%" style="stop-color: white;" />
              </linearGradient>

              <linearGradient id="gradienteSistemaAbs" x1="0%" y1="100%" x2="100%" y2="100%">
                <stop offset="43.75%" stop-color="#29abe2" />
                <stop offset="48.96%" stop-color="#00f" />
                <stop offset="100%" stop-color="#00f" />
              </linearGradient>

            </defs>
            <g id="closeMenuAbsVolteo">
              <circle cx="600" cy="135" r="20" fill="red" stroke="black" stroke-width="1.5" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="607" y2="142" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="593" y2="142" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="593" y2="128" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="607" y2="128" />

            </g>

            <line stroke="white" class="hideOnVolteo" stroke-width="2" x1="886" y1="580" x2="852" y2="520"/>
            <circle id="absVolteo" class="bolitaVolteo hideOnVolteo" r="20" cx="886" cy="580" fill="url(#gradienteSistemaAbs)" />
            
            <path stroke="white" class="hideOnVolteo" fill="none" stroke-width="2" d="M574.824 318.421s33.745-8.12 41.943-40.031"/>
            <g class="flechitasCajaSeca hideOnVolteo" fill="none">
              <path stroke-width="0.25"
                d="M528.153 392.221l20.77 2.788s3.271.27 5.269-1.353l45.792-10.347s-7.085-40.929-17.818-62.395c0 0-1.908-2.713-7.342-2.493l-18.324 4.246V321l-2.283.419-.624 1.747-22.9 4.992s-3.713-.25-3.713 7.488 1.173 56.575 1.173 56.575z"/>
            </g>

            <circle id="tanqueHidraulico" class="bolitaVolteo hideOnVolteo" fill="#F7931E" cx="620.518" cy="263.75" r="14.75" />

            <g class="hideOnVolteo"
             fill="none">
              <path stroke-width="0.25" class="flechitasCajaSeca"
                d="M690.5 369v10l15.625 2.75 25.375-6.375V365l-7.25-1.25 25.75-119s-13.279.805-18.779-4.195l-1.404-1.342-26.348 124.537s1.016 3.75 3.766 4.25l-.242 2-16.492-2v1z" />
              <path stroke="white" stroke-width="2" d="M690.5 258.5s6.815 66.617 19.991 72.059" />
            </g>

            <circle id="cilindro" class="bolitaVolteo hideOnVolteo" fill="#F7931E" cx="690.334" cy="244.999" r="14.001" />


            <g fill="none">
              <polyline stroke-width="0.5" class="flechitasCajaSeca hideOnVolteo" fill="none"
                points="1018.113,568.813 1018.17,536.5 1019,536.5 1019.043,499.5 1020,499.5 1019.916,498.5 1021,498.5 1020.789,497.5 1022,497.5 1024.281,492.979 1024.238,468.5 1013,468.5 1012.888,471.364 1001.362,471.152 1001.405,534.31 999.747,534.54 999.739,537.757 1000.5,537.872 1000.5,570 995.5,575.724 995.5,583 989.5,582.403 989.5,583.83 1013.152,586.797 1026.5,582.246 1026.5,579.5 1022,579.5 1021.193,573.713" />
              <path fill="none" d="M1019.043 499.5s23.958 20.83 56.624-20.335" />
            </g>


            <circle id="patinesVolteo" class="bolitaVolteo hideOnVolteo" fill="#F7931E" cx="1079.667" cy="471.333" r="14" />

            <g class="hideOnVolteo">
              <line x1="840" y1="575" x2="820" y2="519.5" stroke="white" stroke-width="2" />
              <path class="flechitasCajaSeca" stroke-width="0.25" fill="transparent" stroke="#FFF"
                stroke-miterlimit="10"
                d="M779.596 513.647l-6.096-2.339V483l13.228-3.835 21.576 4.162.196.573v4.1l-1.826 6.089 10.221 4.827 10.938-17.416H833l.716 3.9-7.031 17.188 8.322 2.986-2.009 10.926H810s-5.159-6.562-15.348-6.849-15.056 3.996-15.056 3.996z" />
            </g>

            <circle id="suspensionVolteo" class="bolitaVolteo hideOnVolteo" cx="840" cy="575" r="12.5" fill="#F7931E" />

            <circle id="sistemaArrastreVolteo" class="bolitaVolteo hideOnVolteo" fill="#F7931E" cx="893.927" cy="520.689"
              r="12.583" />

            <g class="hideOnVolteo" stroke="#FFF" stroke-miterlimit="10">
              <path fill="none" d="M906.614 520.491s11.049 2.009 23.533-9.758" />
              <polygon class="flechitasCajaSeca" fill="#FFF"
                points="930,511.125 931.5,512.749 931.5,509.5 928.5,509.5" />
              <line class="flechitasCajaSeca" fill="none" x1="936.5" y1="496" x2="936.5" y2="501" />
              <line class="flechitasCajaSeca" fill="none" x1="936.5" y1="506" x2="936.5" y2="511" />
              <line class="flechitasCajaSeca" fill="none" x1="929" y1="503.5" x2="934" y2="503.5" />
              <line class="flechitasCajaSeca" fill="none" x1="939" y1="503.5" x2="944" y2="503.5" />
            </g>

            <circle class="bolitaVolteo hideOnVolteo" fill-opacity="1" id="llantasVolteo" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="421.519" cy="551.601" r="11.5" />

            <circle id="rinesVolteo" class="bolitaVolteo hideOnVolteo" fill="#F7931E" stroke="#FFF" stroke-miterlimit="10"
              cx="366.518" cy="544.601" r="11.5" />

            <circle id="ejesVolteo" fill="#F7931E" class="bolitaVolteo hideOnVolteo" stroke="#FFF" stroke-miterlimit="10"
              cx="804.518" cy="568.601" r="11.5" />

            <line class="hideOnVolteo" fill="none" stroke="#FFF" stroke-miterlimit="10" x1="370.164" y1="533.695" x2="380.018"
              y2="495.667" />

            <line class="hideOnVolteo" fill="none" stroke="#FFF" stroke-miterlimit="10" x1="804.5" y1="557" x2="804.5" y2="537" />

            <path fill="none" stroke="#FFF" class="flechitasCajaSeca hideOnVolteo" stroke-miterlimit="10"
              d="M417.208 540.831l-10.364-26.012m-26.23-80.103c-18.123 4.435-28.27 26.595-22.666 49.496 5.604 22.902 24.838 37.87 42.961 33.436 18.123-4.435 28.271-26.594 22.666-49.496-5.604-22.902-24.838-37.872-42.961-33.436z" />


            <path class="flechitasCajaSeca hideOnVolteo" fill="none" stroke="#FFF" stroke-width="0.75" stroke-miterlimit="10"
              d="M724 431.75l3.75.5.25-6.25-11-3v-6.5l68 6.5v3.75l-4 2.25h-32.5l5.75 8.25 5.75.75v3l-13.625 2.938-17.125-3.063-5.25-9.125zm99.5-32.25l-52.825 22.035" />
              
            <path class="hideOnVolteo" stroke="white" stroke-width="2" d="M724 431.75m99.5-32.25l-52.825 22.035" />

            <circle class="bolitaVolteo hideOnVolteo" id="quintasVolteo" fill="#F7931E" stroke="#FFF" stroke-miterlimit="10" cx="834"
              cy="397" r="18" />

            <circle class="bolitaVolteo hideOnVolteo" id="conectoresDeAireVolteo" fill="url(#gradienteTomasyBombas)" cx="461.25"
              cy="310.75" r="9.75" />

            <circle class="bolitaVolteo hideOnVolteo" id="conexionesElectricasVolteo" fill="#6B9B79" stroke="#FFF"
              stroke-miterlimit="10" cx="532.195" cy="268.445" r="9.945" />

            <line class="hideOnVolteo" stroke="white" stroke-width="2" fill="none" stroke="#FFF" stroke-miterlimit="10" x1="524.204"
              y1="274.348" x2="505.824" y2="292.457" />

            <line class="hideOnVolteo" fill="none" stroke="#FFF" stroke-miterlimit="10" x1="467.278" y1="318.411" x2="483.667"
              y2="333.667" />

            <line class="hideOnVolteo" fill="none" stroke="#FFF" stroke-miterlimit="10" x1="511.598" y1="220.998" x2="509.39" y2="186.958" />

            <circle id="sujetadoresVolteo" class="bolitaVolteo hideOnVolteo"  fill="#F7931E" stroke="#FFF" stroke-miterlimit="10"
              cx="509.778" cy="179.09" r="7.82" />

            <circle id="tomasDeFuerza" class="bolitaVolteo hideOnVolteo" fill="#182F61" stroke="#FFF" stroke-miterlimit="10"
              cx="471.191" cy="447.219" r="13.719" />

            <g class="hideOnVolteo" fill="none" stroke="#FFF" stroke-miterlimit="10">
              <line stroke="white" stroke-width="2" x1="477.677" y1="435.128" x2="495.474" y2="405.442" />
              <g>
                <line class="flechitasCajaSeca" stroke-width="1" x1="498.202" y1="408.167" x2="495.474" y2="405.442" />
                <line class="flechitasCajaSeca" stroke-width="1" x1="499.325" y1="405.448" x2="495.474" y2="405.442" />
                <line class="flechitasCajaSeca" stroke-width="1" x1="498.202" y1="402.719" x2="495.474" y2="405.442" />
                <line class="flechitasCajaSeca" stroke-width="1" x1="492.755" y1="402.72" x2="495.474" y2="405.442" />
                <line class="flechitasCajaSeca" stroke-width="1" x1="492.746" y1="408.167" x2="495.474" y2="405.442" />
                <line class="flechitasCajaSeca" stroke-width="1" x1="491.623" y1="405.448" x2="495.474" y2="405.442" />
              </g>
            </g>
            <circle id="bombas" class="bolitaVolteo hideOnVolteo" fill="#711" stroke="#FFF" stroke-miterlimit="10" cx="525.191"
              cy="447.219" r="13.719" />

            <path class="flechitasCajaSeca hideOnVolteo" stroke="white" fill="none" stroke="#FFF" stroke-miterlimit="10"
              d="M517.402 405.694c0 2.622-2.125 4.747-4.747 4.747s-4.747-2.125-4.747-4.747 2.125-4.747 4.747-4.747 4.747 2.125 4.747 4.747zm6.146 27.908l-8.86-23.622" />

            <circle id="manguerasHidrualicas" class="bolitaVolteo hideOnVolteo" stroke="white" fill="#F7931E" cx="623.121"
              cy="392.947" r="10.061" />

            <g fill="none" stroke="#FFF" stroke-miterlimit="10">
              <ellipse class="flechitasCajaSeca hideOnVolteo" cx="604.042" cy="435.929" rx="30.874" ry="9.025" />
              <line class="hideOnVolteo" stroke-width="2" stroke="white" x1="613.06" y1="427.296" x2="620.475" y2="402.645" />
            </g>

            <!-- DISPARADORES PARA VOLTEO -->
            <polyline class="disparadores" id="disparadorLlantasVolteo" points="380.614,435.216 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorRinesVolteo" points="385.001,455.167 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorManguerasAireVolteo"
              points="461.251,301.5 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorSujetadoresVolteo"
              points="511.598,221.498 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorArnesesElectricosVolteo"
              points="505.826,292.957 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorTanquesHidraulicos"
              points="527.013,336.146 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorManguerasHidraulicas" points="573.168,434 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorTomasDeFuerza" points="495.475,405.942 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorBombas" points="512.657,401.447 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorCilindro" points="729.816,239.713 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorQuintasVolteo" points="720.252,417.774 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorSuspensionVolteo" points="773.502,483.5 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorSistemaDeArrastreVolteo" points="939,504 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorPatinesVolteo" points="1001.362,471.527 300,110.5 0,110.5" />
            <polyline id="disparadorSistemaAbsVolteo" class="disparadores"
              points="852,520 750,110 450,110.5" />
            <polyline class="disparadores" id="disparadorEjesVolteo" points="804.254,547 300,110.5 0,110.5" />
          </svg>
          <video id="animacionllantas" autoplay loop muted>
            <source src="videos/ejesyllantas.mp4" type="video/mp4" />
          </video>

          <video id="animacionbombasytomas" autoplay loop muted>
            <source src="videos/allison.mp4" type="video/mp4" />
          </video>

          <video id="animacionsuspension" autoplay loop muted>
            <source src="videos/animación de suspensión.mp4" type="video/mp4" />
          </video>
        </div>
    </section>

    <section id="productoscajassecas">
        <div class="cintillo">Productos en cajas secas</div>
        <div class="imagenTracto">
          <img id="cajaSeca" src="imagenes/cajaSeca.jpg">
         
          <div id="menuHaldexCajaSeca">
            <img src="imagenes/Sistemas adicionales/sistema completo abs.JPG" alt="Partes del Sistema ABS">
            <svg class="menus" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1200 675">

              <defs>
                <radialGradient id="BolitasHaldex" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                  <stop offset="0%" stop-color="white" stop-opacity="0" />
                  <stop offset="100%" stop-color="black" stop-opacity="1" />
                </radialGradient>
                <radialGradient id="BolitasHaldexHover" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                  <stop offset="0%" stop-color="#F7931E" stop-opacity="1" />
                  <stop offset="100%" stop-color="white" stop-opacity="0"/>
                </radialGradient>
              </defs>

              <circle class="bolitaVolteo absHaldexBolitas"  id="boosterCajaSeca" fill="#F7931E" stroke="white" stroke-width="2" stroke-miterlimit="10" cx="235" cy="43" r="28"/>
              <path id="boosterCajaSecaPath" fill="none" name="" class="absHaldexPath" stroke-miterlimit="10" d="M218.5 156v8l87-.25V174l-6 .25v8.25h7v3.5s1.75 8.5 7.958 12.5H328s2.417 4.333 4.125 5.667 7.5 0 7.5 0 2.583-1.5 2.875-5.75l5.542-3s.125 6.042 6.333 5.75 5.25-4.375 5.25-4.375l.053-2 8.072 3.979s.917 3.729 2.667 5.729H378s2.25-1 2.583-7H398s12.625-4 14.458-7.25 1.583-4.208 1.583-4.75 2.125-48.833-.708-51.667c0 0-1.287-4.677-1.99-5.552s-10.359-4.844-10.359-4.844l-4.875-1.938H380s-.953-6-3.688-7H370s-2.797 2.594-3.719 7.094L356 126.781l-4.563-.219-9.813-4.813s-.938-6.75-4.75-6.938-5.625-.031-5.625-.031-3.063 1.719-3.5 6.719H314s-3.5 1.438-6.156 6.156c0 0-1.781 6.344-1.719 9.219l-11.813.813s-.375 5.813 0 6.813H305s.25 9-.063 11H218l.5.5z"/>
              <path stroke="black" stroke-width="2" d="M256.467 60.971L310.5 124.5"/>
              
              <path fill="none" id="sensorHaldexCajaSecaPath" stroke-dasharray="200" stroke-dashoffset="200" stroke="white" stroke-width="2" stroke-miterlimit="10" d="M499 173.5h38l-1.167-2H498.5V160s-3-.5-4-.333V164l-2 .917V174s.5 2.333 3.333 2 2.5-.958 3.167-2.5z"/>
              <path fill="none" stroke="#000" stroke-miterlimit="10" d="M512.5 171.5l9.375-51.125"/>
              <circle  class="bolitaVolteo absHaldexBolitas" id="sensorHaldexCajaSeca" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="527" cy="93" r="28"/>
              
              <path id="arnesABScajaSecaPath" class="absHaldexPath" fill="none" stroke="white" stroke-miterlimit="10" d="M-.5 357.5H270l1.875.344.438 1.125-.031.781s-2.781-.125-3.781 1.688V364l2.125 2.438 7.875.156V364l-.969.359.406-5.859H280l7.406 2.063 32.844.313.625.625H324s2.375-13-.375-19H321l-.031 1H320l-.063 1H288l-7.063 2.063-.438-.531V340l2-.406V337.5H275s-2.813.563-2.688 3c0 0-.438 1.844 1.125 2.969l1.063.094V345l-2.219 1.5H-.5v11z"/>
              <circle class="BolitaVolteo absHaldexBolitas" id="arnesABScajaSeca" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="109" cy="289" r="28"/>
              <path fill="none" stroke="#000" stroke-miterlimit="10" d="M130.333 307.333l122 39.167"/>
              
              <path fill="none" id="N9002KDpath" class="absHaldexPath" stroke="white" stroke-miterlimit="10" d="M604.5 391v19l1 1.25v13.25h5.5l1.5 2h12V389l2-1.688V368l1.292-2.458-.583-13.042-.709-5.666V339s-.499-2.5-4.333-2.5H619.5v-17h-4V313s-1.938-3-7.375-3.125-6.891 3.25-7.266 3.75l-.359.406v5.469h-1v3.5l-6 .063v4.438h-2v3.5l-8.5-.125s-3.5-3.125-5.5.75V371.5h-9v7.5s-.875.374-1.083 2.958c0 0-.417 1.833 1.708 3.375s2.188 1.542 2.188 1.542l.323.292 8.599.583 6.549.833 1.962-1.458 2.335.333.376 2.084.354.406.5.552H604.5v.5z"/>
              <path fill="none"  stroke="#000" stroke-miterlimit="10" d="M568.5 371.5l-50.167-55.667"/>
              <circle class="bolitaVolteo absHaldexBolitas" id="N9002KD" fill="#F7931E" stroke-miterlimit="10" cx="499" cy="295" r="28"/>
              
              <path fill="none" id="conectorHembraAbscajaSecapath" class="absHaldexPath" stroke-miterlimit="10" d="M371.75 351.938s.048.318.146.887l.228 8.4s.626 6.274 4.313 8.274H378l.5-2.125s2.875.125 4.25-1.875H387s1.688 2.313 1.5 4.5c0 0-.063 1.313 1.406 1.281s2.875-.094 2.875-.094l.719-1.938V365l16.667-1.063 1.333-.604v-.833h6.5l4.313-3.688 2.208.021.604.666H432l2.719-2.313.531-.109.031-7.578H435l-.344-3-3.125-2H425l-1 1h-2l-4-4h-6l-1.281-2H392.5V335l-1.031-2.5H388l-.188 3H382l-5.531-6H374s-2.469 1-2.5 3.406-.133 3.938-.133 3.938l1.133 1.141v1.703l-3 .031v9.938l.995.011.231 2.239 1.024.031z"/>
              <circle class="bolitaVolteo absHaldexBolitas" id="conectorHembraAbscajaSeca" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="344" cy="289" r="28"/>
              <path fill="none" stroke="#000" stroke-width="2" stroke-miterlimit="10" d="M361.897 310.534l14.572 18.966"/>
              
              <path fill="none" id="moduladorCajaSecaPath" class="absHaldexPath" stroke-miterlimit="10" d="M768.5 384.801s3.332 3.643 7.832.226l.72-1.169 1.114.242 2.089 2.107.42.427 2.51-.063.596 1.253 8.78.064-.107-1.264 4.484-.109 6.234-3.063.688.031s-.219 3.016 2.594 4.016H811l2.188-2.25-.094-3.828.406-2.656V366.5h8.5l.542-11.26-.625-.74H819l-.229-2.875s-1.115-2.188-5.053-1.979l-1.219-.25v-.896H812l-.021-3.25-3.75-1.75H796l-.167-6.083s-.437-3.833-7.083-3.75-8.25 4.313-8.25 4.313V342l-1.084 1.313-10.803.167s-2.113 1.666-3.113 2.854V368l1 2.125V374l2 2.25v8.551z"/>
              <circle class="bolitaVolteo absHaldexBolitas" id="moduladorCajaSeca" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="853" cy="425" r="28"/>
              <path fill="none" stroke="#000" stroke-width="2" stroke-miterlimit="10" d="M828 412l-17-24.5"/>

              <circle id="manitasCajaSeca" class="bolitaVolteo absHaldexBolitas" fill="#F7931E" stroke="white" stroke-miterlimit="10" cx="976" cy="317" r="28"/>
              <path fill="none" stroke="black" stroke-width="2" stroke-miterlimit="10" d="M1002.875 324.856L1054.5 349"/>
              
              
              <path fill="none" class="absHaldexPath" id="tanqueAireHaldexCajaSecaPath" stroke="white" stroke-miterlimit="10" d="M636.875 463s-1.375 30.75 46.625 46.5H728l2.188-2.188s33.479-7.313 44.313-44.313"/>
              <circle fill="#F7931E" id="tanqueAireHaldexCajaSeca" class="bolitaVolteo absHaldexBolitas" stroke-miterlimit="10" cx="705" cy="576" r="28"/>
              <path fill="#F7931E" stroke="#020202" stroke-miterlimit="10" d="M704.5 548v-38"/>
      

              <g id="closeHaldexCajaSeca">
                <circle r="20" cx="1150" cy="30" stroke="white" fill="red" stroke-width="2"/>
                <line x1="1150" y1="30" x2="1157" y2="23" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                <line x1="1150" y1="30" x2="1143" y2="23" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                <line x1="1150" y1="30" x2="1143" y2="37" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                <line x1="1150" y1="30" x2="1157" y2="37" stroke="white"  stroke-linecap="round" stroke-width="3"/>
                
              </g>
            </svg>
          </div>
          <div class="avisadoresAbsCajaSeca" id="absLeftCajaSeca"></div>
          <div class="avisadoresAbsCajaSeca" id="absRigthCajaSeca"></div> 
          <div id="rotuloMenuHaldex">
            <svg class="rotulosAbs" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 300 168.75">
              <rect stroke="none" fill="#0e6cb0" width="10%" height="100%" x="0" y="0"/>
              <rect stroke="none" fill="#0e6cb0" width="10%" height="100%" x="90%" y="0"/>
              <polygon points="280,70 295,84 280,98" fill="white" stroke="white" stroke-width="1"/>
            </svg>
          </div>
          <div id="rotuloMenuSealco">
            <svg class="rotulosAbs" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 300 168.75">
              <rect stroke="none" fill="#0000fe" width="10%" height="100%" x="0" y="0"/>
              <rect stroke="none" fill="#0000fe" width="10%" height="100%" x="90%" y="0"/>
              <polygon points="20,70 5,84 20,98" fill="white" stroke="white" stroke-width="1"/>
            </svg>
          </div>
          
          <div id="descripcionDisparadorCajaSecaDiv" class="descripcionDisparador">
            <p id="descripcionDisparadorCajaSeca"></p>
          </div>
          <!-- -🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎 SVG de caja seca 🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎🍎-->

          <svg class="menus" id="svgcajaSeca" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1200 675">
            <defs>
              <linearGradient id="a" x1="0%" y1="100%" x2="100%" y2="100%">
                <stop offset="0" stop-color="red" />
                <stop offset=".1056" stop-color="#fa0005" />
                <stop offset=".2293" stop-color="#ec0013" />
                <stop offset=".362" stop-color="#d4002b" />
                <stop offset=".5012" stop-color="#b3004c" />
                <stop offset=".6455" stop-color="#890076" />
                <stop offset=".7939" stop-color="#50a" />
                <stop offset=".943" stop-color="#1900e6" />
                <stop offset="1" stop-color="#00f" />
              </linearGradient>
              <linearGradient id="cintaGradient" x1="0%" y1="100%" x2="100%" y2="100%">
                <stop offset="44%" stop-color="red" />
                <stop offset="48%" stop-color="snow" />
                <stop offset="100%" stop-color="#fff" />
              </linearGradient>
              <linearGradient id="gradienteSistemaAbs" x1="0%" y1="100%" x2="100%" y2="100%">
                <stop offset="43.75%" stop-color="#29abe2" />
                <stop offset="48.96%" stop-color="#00f" />
                <stop offset="100%" stop-color="#00f" />
              </linearGradient>
            </defs>
            <circle id="llantasCajaSeca" class="bolitaVolteo hideOnCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="413.447" cy="631.738" r="15.098" />

            <ellipse fill="none" stroke="white" stroke-width="0.5" class="flechitasCajaSeca"
              transform="rotate(-12.11 413.547518 541.394508)" cx="413.605" cy="541.461" rx="31.454" ry="41.671" />

            <line stroke="white" class="hideOnCajaSeca" stroke-width="1.5" x1="413.5" y1="582" x2="413.5" y2="617" />

            <circle id="rinesCajaSeca" class="bolitaVolteo hideOnCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="357.447" cy="586.738" r="15.098" />

            <line class="hideOnCajaSeca" fill="none" stroke-width="1.5" stroke="#FFF" stroke-miterlimit="10"
              x1="372.545" y1="582.742" x2="410.464" y2="565.717" />

            <path class="hideOnCajaSeca" fill="#F33"
              d="M442.598 264.769l-2.174 9.621S455.477 269 460.958 303H463s3.524-35.096-20.402-38.231z" />

            <circle id="manguerasCajaSeca" class="bolitaVolteo hideOnCajaSeca" fill="url(#a)" stroke="#FFF"
              stroke-miterlimit="10" cx="481.75" cy="387.75" r="12.5" />
            <line class="hideOnCajaSeca" fill="none" stroke-width="2" stroke="#FFF" stroke-miterlimit="10" x1="494.25"
              y1="387.75" x2="545" y2="400.25" />

            <circle id="arnesesCajaSeca" class="bolitaVolteo hideOnCajaSeca" fill="#72986B" stroke="#FFF"
              stroke-miterlimit="10" cx="615.75" cy="312.75" r="12.5" />
            <line class="hideOnCajaSeca" fill="none" stroke-width="2" stroke="#FFF" stroke-miterlimit="10" x1="605.932"
              y1="320.477" x2="559.5" y2="353.25" />

            <circle id="sujetadoresCajaSeca" class="bolitaVolteo hideOnCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="499.75" cy="228.75" r="12.5" />

            <line fill="none" class="hideOnCajaSeca" stroke-width="2" stroke="#FFF" stroke-miterlimit="10" x1="505.989"
              y1="239.571" x2="534.25" y2="291.25" />
            <line fill="none" class="hideOnCajaSeca" stroke-width="2" stroke="#FFF" stroke-miterlimit="10" x1="727.334"
              y1="581.333" x2="788.501" y2="593.667" />

            <circle id="ejesCajaSeca" class="bolitaVolteo hideOnCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="714.447" cy="575.738" r="15.098" />

            <path fill="none" class="flechitasCajaSeca" stroke-width="0.5" stroke="#FFF" stroke-miterlimit="10"
              d="M838.467 604.449c9.93 3.757 9.392-6.843 9.392-6.843l3.221 1.208 1.342-.403 24.688 9.661 1.613 7.245 16.102 2.818 10.331-3.086.939-14.089-11.005-19.32-8.319-.537s-12.075 5.233-13.417 6.173-9.661.536-9.661.536 1.61.671-8.051 2.281-9.929-2.415-9.929-2.415C836.857 562.722 828 553.5 828 553.5h-4.382c-4.384 1-.715 2.531-.715 2.531s1.609 24.4 0 24.267-2.403.702-2.403.702v4l13.538 7.91" />

            <circle class="bolitaVolteo hideOnCajaSeca" id="suspensionCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="892.447" cy="654.738" r="15.098" />

            <path class="hideOnCajaSeca" fill="none" stroke-width="2" stroke="#FFF" stroke-miterlimit="10"
              d="M892.447 639.641s-5.728-3.012-6.871-23.124" />

            <polygon class="flechitasCajaSeca" fill="none" stroke-width="0.5" stroke="#FFF" stroke-miterlimit="10"
              points="907,636.834 927.417,639.755 940.959,635.043 943.5,632.641 943.5,631.5 938,631.5 937.583,625.834 933.5,620.501 933.5,589.5 935,589.5 935.333,553.5 939.5,547.001 939.5,539 927.667,536.167 916.333,534.667 916,587.148 915.584,588.501 916.5,589.667 916.5,622 912,627.001 911.833,632.641 906.095,633.501 905.167,634.501" />

            <circle class="bolitaVolteo hideOnCajaSeca" id="patinesCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="961.447" cy="654.738" r="15.098" />

            <path class="hideOnCajaSeca" fill="none" stroke-width="2" stroke="#FFF" stroke-miterlimit="10"
              d="M949.464 645.559s-9.749-1.662-13.981-8.61" />

            <g fill="none" stroke="#FFF" stroke-miterlimit="10">
              <line class="flechitasCajaSeca" x1="957.5" y1="579" x2="957.5" y2="572" />
              <line class="flechitasCajaSeca" x1="948" y1="582" x2="955" y2="582" />
              <line class="flechitasCajaSeca" x1="957.5" y1="592" x2="957.5" y2="585" />
              <line class="flechitasCajaSeca" x1="967" y1="582" x2="960" y2="582" />
              <path class="hideOnCajaSeca" stroke-width="2" d="M957.5 582c3.75 4.25 16.5 32.25 24.5 39.25" />
            </g>
            <circle class="bolitaVolteo hideOnCajaSeca" id="sistemaArrastreCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="995.447" cy="624.738" r="15.098" />
            <g>
              <polygon fill="url(#cintaGradient)" stroke="#FFF" stroke-miterlimit="10"
                points="614.5,445 614.5,455 629.5,456.874 629.5,447" />
              <polygon fill="url(#cintaGradient)" stroke="#FFF" stroke-miterlimit="10"
                points="728.5,464 728.5,474 743.5,475.874 743.5,466" />
              <polygon fill="url(#cintaGradient)" stroke="#FFF" stroke-miterlimit="10"
                points="847.5,481 847.5,491 862.5,492.874 862.5,483" />
              <polygon fill="url(#cintaGradient)" stroke="#FFF" stroke-miterlimit="10"
                points="973.5,500 973.5,510 988.5,511.874 988.5,502" />
              <polygon fill="url(#cintaGradient)" stroke="#FFF" stroke-miterlimit="10"
                points="1101.5,520 1101.5,530 1119.5,531.874 1119.5,522" />
            </g>
            <circle class="bolitaVolteo hideOnCajaSeca" id="cintaReflectivaCajaSeca" fill="#F7931E" stroke="#FFF"
              stroke-miterlimit="10" cx="718.447" cy="353.738" r="15.098" />
            <line fill="none" stroke-width="1.5" stroke="#FFF" stroke-miterlimit="10" x1="711.094" y1="366.924" x2="626"
              y2="450.938" />
            <circle fill="url(#gradienteSistemaAbs)" id="absCajaSeca" class="bolitaVolteo hideOnCajaSeca" stroke="#FFF"
              stroke-miterlimit="10" cx="835.447" cy="648.738" r="15.098" />
            <g id="closeMenuAbsCajaSeca">
              <circle cx="600" cy="135" r="20" fill="red" stroke="black" stroke-width="1.5" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="607" y2="142" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="593" y2="142" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="593" y2="128" />
              <line stroke-linecap="round" stroke="white" stroke-width="4" x1="600" y1="135" x2="607" y2="128" />

            </g>
            <line class="hideOnCajaSeca" fill="none" stroke-width="2" stroke="#FFF" stroke-miterlimit="10" x1="842.848"
              y1="635.58" x2="863.297" y2="608.25" />

            <!----------------------------------Disparadores---------------------------------->
            <polyline class="disparadores" id="disparadorRinesCajaSeca" points="410.464,566.217 300,110.5 0,110.5" />
            <polyline class="disparadores" id="disparadorLlantasCajaSeca" points="404.864,501.219 300,110.5 0,110.5" />
            <polyline id="disparadorConexionesAireCajaSeca" class="disparadores"
              points="545,400.75 300,110.5 0,110.5" />
            <polyline id="disparadorSujetadoresCajaSeca" class="disparadores"
              points="534.25,291.75 300,110.5 0,110.5" />
            <polyline id="disparadorConexionesElectricasCajaSeca" class="disparadores"
              points="559.5,353.75 300,110.5 0,110.5" />
            <polyline id="disparadorCintaReflectivaCajaSeca" class="disparadores"
              points="614.5,445.5 300,110.5 0,110.5" />
            <polyline id="disparadorEjesCajaSeca" class="disparadores" points="788.501,594.167 300,110.5 0,110.5" />
            <polyline id="disparadorSuspensionCajaSeca" class="disparadores"
              points="822.903,556.531 300,110.5 0,110.5" />
            <polyline id="disparadorSistemaAbsCajaSeca" class="disparadores"
              points="863.297,608.25 750,110 450,110.5" />
            <polyline id="disparadorPatinesCajaSeca" class="disparadores" points="916.333,535.167 300,110.5 0,110.5" />
            <polyline id="disparadorSistemaArrastreCajaSeca" class="disparadores"
              points="957.5,582.5 300,110.5 0,110.5" />

          </svg>
        </div>
    </section>

    <section id="dolly">
        <div class="cintillo">Dolly</div>
        <div><img class="sample" src="imagenes/cajaseca.jpg" /></div>
    </section>

    <section id="gruas">
        <div class="cintillo">Grúas</div>
        <div><img src="imagenes/cajaseca.jpg" class="sample" /></div>

    </section>

  </article>
</main>

  <script src="js/mainV2.js"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.carrusel').slick({
        dots: true,
        adaptiveHeigth: true,
        accessibility: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });
  </script>
</body>
</html>