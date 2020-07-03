<div id="shoppingCart" class="shoppingCart" style="display:none;overflow: scroll;">
    <div class="col-md-10 mx-auto my-4">
        <div class="text-right">
            <a data-action="close-modal" style="cursor: pointer;"><i class="fas fa-times-circle"></i> Cerrar detalle</a>
        </div>
        <div class="text-right">
            <a href="checkout" data-action="to-checkout" class="btn btn-outline-disabled text-uppercase my-2"> Continuar</a>
        </div>  
        <div class="row mx-auto">
            <div class="col-md-12 text-center">
                <h2>Mi compra</h2>
            </div>
            <div class="col-md-6 text-center">
                <h3>Productos (<small id="quantity"></small>)</h3>
            </div>
            <div class="col-md-6 text-center">
                <h3>Total de mi compra <span id="totalAmountFormated"></span></h3>
            </div>
        </div>
        <div id="productsAdded" class="row mx-auto"></div>
    </div>
</div>