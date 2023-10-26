<?php?>

<header class="header" xmlns="http://www.w3.org/1999/html">
    <div class="logo">
       <a href="<?php echo base_url('/')?>"><img src="/img/logoFondoAzulRecortado.png"></a>
    </div>
    <nav>
        <ul class="nav-link">
            <li><a href="<?php echo base_url('/ingresoDeTrabajo')?>">Ingreso de trabajo</a></li>
            <li><a href="#">Lista de Precios</a></li>
            <li><a href="<?php echo base_url('/buscar')?>">Buscar</a></li>
        </ul>
    </nav>

    <div class="buscadorRapido">
        <form action="<?php echo base_url('/busquedaRapida') ?>" method="get">
            <input class="inputBuscador" name="q" type="text" placeholder="Buscador rápido">
            <input type="hidden" name="limit" value="10">
            <input type="hidden" name="offset" value="0">
            <button class="btnBuscar"><img class="imgLupa" src="/img/lupaBlanca.png"></img></button>
        </form>
    </div>
</header>
