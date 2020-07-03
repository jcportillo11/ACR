<?php
    include_once($PATH . "components/functions.php");
    $STRBuilder = "";
    $CARS = request("get/cars");
    foreach ($CARS as $index => $item) {
        $ATTRIBUTES_BLOCK = "";
        if(isset($item->attributes)){
            $ATTRIBUTES_BLOCK = '
                <div class="col-6">
                    <span><i class="fas fa-snowflake"></i> '.($item->attributes->airConditioner ? "Si" : "No").'</span>
                </div>
                <div class="col-6">
                    <span><i class="fas fa-suitcase"></i> '.$item->attributes->trunkCapacity.'</span>
                </div>
                <div class="col-6">
                    <span>'.$item->attributes->transmition.'</span>
                </div>
                <div class="col-6">
                    <span><i class="fas fa-users"></i> '.$item->attributes->peopleCapacity.'</span>
                </div>';
        }
        $STRBuilder = $STRBuilder . '
        <div class="col-12 mx-auto col-md-3 px-2 pb-2 text-center">
            <div class="car-item">
                <div class="col-12 pt-3 text-center">
                    <img src="'.$PATH . $item->image.'" onerror="this.src=\''.$PATH.'lib/images/PlaceHolder_Autos.jpg\';"/>
                </div>
                <div class="col-12 text-center">
                    <b>'.$item->name.'</b>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <span>'.$item->category.'</span>
                    </div>
                    <div class="col-md-5">
                        <b>'.$item->code.'</b>
                    </div>
                </div>
                <div class="row">
                    '.$ATTRIBUTES_BLOCK.'
                </div>
                <div class="col-9 col-md-12 mx-auto mt-2">
                    <p class="price-box text-uppercase m-0 p-2">USD $'.number_format($item->price, 2).'</p>
                </div>
                <div class="col-9 col-md-12 mx-auto">
                    <a data-index="'.$index.'" id="selectItem'.$index.'" class="ACR-add-link my-2"><i class="far fa-check-square"></i> Seleccionar</a>
                    <a style="display:none" data-index="'.$index.'" data-carcode="'.$item->code.'" id="deleteItem'.$index.'" class="ACR-delete-link my-2"><i class="far fa-trash-alt"></i> Eliminar</a><br>
                    <a href="checkout" style="display:none" data-index="'.$index.'" id="continue'.$index.'" class="ACR-add-link my-2">Continuar con la compra <i class="fas fa-chevron-right"></i></a>
                    <form style="display:none" data-index="'.$index.'" id="formItem">
                        <div class="row m-0">
                            <label class="col-md-8 my-2" >Cantidad</label>
                            <input class="col-md-4 form-control" type="number" min="1" max="10" value="1" name="quantity"/>
                        </div>
                        <a data-code="'.$item->code.'" data-index="'.$index.'" id="addItem" class="ACR-btn btn btn-outline-success my-2"><i class="fas fa-plus"></i> Agregar al carrito</a>
                    </form>
                </div>
            </div>
        </div>';
    };
?>

<div class="row mt-3">
    <div class="col-12 text-center my-2">
        <h2>Autos disponibles para ti</h2>
        <p>Encuentra el auto perfecto al mejor precio del mercado</p>
    </div>
    <?php echo $STRBuilder;?>
</div>