<link rel="stylesheet" href="../Clinica/odontograma/public/css/style.css">
<link rel="stylesheet" href="../Clinica/odontograma/public/css/jquery-ui-1.8.17.custom.css">
<link rel="stylesheet" href="../Clinica/odontograma/public/css/jquery.svg.css">
<link rel="stylesheet" href="../Clinica/odontograma/public/css/odontograma.css">
<div id="contenidoFicha">  
    <script src="../Clinica/odontograma/public/js/modernizr-2.0.6.min.js"></script>
    <script src="estado_odontograma.js"></script>
    <script src="tratamientos.js"></script>

    <div id="container">
        <header>
        </header>
        <div id="main" role="main">      
            <div id="tratamiento">
                <h2>Tratamiento</h2>
                <select 
                    data-bind=" options: tratamientosPosibles, 
                    value: tratamientoSeleccionado, 
                    optionsText: function(item){ return item.nombre; },
                    optionsCaption: 'Seleccione un tratamiento...'">
                </select>
                <ul data-bind="foreach: tratamientosAplicados">
                    <li>
                        P<span data-bind="text: diente.id"></span><span data-bind="text: cara"></span>
                        -            
                        <span data-bind="text: tratamiento.nombre"></span>
                        | 
                        <a href="#" data-bind="click: $parent.quitarTratamiento">Eliminar</a>
                    </li>
                </ul>
            </div>
            <div id="odontograma-wrapper">
                <h2>Odontograma</h2>
                <div id="odontograma"></div>
            </div>      
        </div>
        <footer>

        </footer>
    </div> <!--! end of #container -->  

    <!-- scripts concatenated and minified via ant build script-->
    <script defer src="../Clinica/odontograma/public/js/jquery-1.7.1.min.js"></script>
    <script defer src="../Clinica/odontograma/public/js/plugins.js"></script>
    <script defer src="../Clinica/odontograma/public/js/jquery-ui-1.8.17.custom.min.js"></script>
    <script defer src="../Clinica/odontograma/public/js/jquery.tmpl.js"></script>
    <script defer src="../Clinica/odontograma/public/js/knockout-2.0.0.js"></script>
    <script defer src="../Clinica/odontograma/public/js/jquery.svg.min.js"></script>  
    <script defer src="../Clinica/odontograma/public/js/jquery.svggraph.min.js"></script>  
    <script defer src="../Clinica/odontograma/public/js/odontograma.js"></script>
    <!-- end scripts-->

</div>