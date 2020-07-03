<nav class="navbar navbar-expand-lg navbar-dark ACR-bg-primary">
<div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="col-md-3">
        <a class="navbar-brand text-center" href="./">
            <img src="<?php echo $PATH;?>lib/images/logo.png" style="width:80%"/>
        </a>
    </div>
    <div class="col-md-7 px-0">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?php echo ($PAGE == "home"? "active": "");?>">
                <a class="nav-link" href="./"><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php echo ($PAGE == "vehicles"? "active": "");?>">
                <a class="nav-link" href="vehiculos"><i class="fas fa-car"></i> Vehiculos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($PAGE == "deals"? "active": "");?>" href="ofertas"><i class="fas fa-tag"></i> Ofertas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($PAGE == "subsidiary"? "active": "");?>" href="sucursales"><i class="fas fa-building"></i> Sucursales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($PAGE == "policies"? "active": "");?>" href="politicas"><i class="fas fa-asterisk"></i> Politicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($PAGE == "contact"? "active": "");?>" href="contacto"><i class="fas fa-envelope"></i> Contacto</a>
            </li>
        </ul>
    </div>
    <div class="col-md-2">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
            <li class="nav-item active">
                <a class="nav-link viewShopping" id="viewShopping"><i class="fas fa-shopping-cart"></i> <span id="totalProducts" class="badge badge-danger"></span> Ver carrito</a>
            </li>
        </ul>
    </div>
  </div>
</div>
</nav>