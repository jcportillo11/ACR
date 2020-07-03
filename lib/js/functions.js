//Funcion que inizializa el proceso de seleccion del articulo
function selectItem(itemClicked){
    var index = itemClicked.data("index");
    $("form[data-index='"+index+"']").fadeIn("slow");
}

//Recibe elemento seleccionado y a cantidad y la agrega al carrito
function addItem(itemClicked, quantity){
    var index = itemClicked.data("index");
    var code = itemClicked.data("code");
    $("form[data-index='"+index+"']").hide();
    $("a[id='selectItem"+index+"']").hide();
    $("a[id='deleteItem"+index+"']").show();
    $("a[id='continue"+index+"']").show();
    addToCart(index, code, quantity);
}

//Agrega articulo al objeto de carrito de compra
function addToCart(index, code, quantity){
    var carSelected = carList.filter(car => car.code == code)[0];
    var totalAmonutProductAdded = (parseInt(quantity) * carSelected.price);

    shoppingCart.quantity = (shoppingCart.quantity + parseInt(quantity));
    shoppingCart.totalAmount = shoppingCart.totalAmount + totalAmonutProductAdded;
    shoppingCart.totalAmountFormated = getMoneyFormated(shoppingCart.totalAmount, "USD");

    carSelected.quantity = parseInt(quantity);
    carSelected.priceFormated = getMoneyFormated((carSelected.price * quantity), "USD")
    carSelected.listIndex = index;

    shoppingCart.products.push(carSelected);
    //Actualizamos carrito de compra con el elemento agregado
    updateCart();
}

//Recibe el elemento clickeado y lo elimina del objeto del carrito de compra
function deleteItem(itemClicked){
    var index = itemClicked.data("index");
    var carCode = itemClicked.data("carcode");
    var item = shoppingCart.products.filter(product => product.code == carCode)[0];
    var totalAmonutProductDeleted = (parseInt(item.quantity) * item.price);
    var elementFounded = shoppingCart.products.indexOf(item);
    
    shoppingCart.products.splice(elementFounded, 1);
    shoppingCart.quantity = (shoppingCart.quantity - parseInt(item.quantity));
    shoppingCart.totalAmount = shoppingCart.totalAmount - totalAmonutProductDeleted;
    shoppingCart.totalAmountFormated = getMoneyFormated(shoppingCart.totalAmount, "USD");

    //Actualiza carrito de compra después de eliminar articulo
    updateCart();

    $("a[id^='deleteItem']").click(function(){
        deleteItem($(this));
    });

    $("a[id='continue"+index+"']").hide();
    $("a[id='deleteItem"+index+"']").hide();
    $("a[id='selectItem"+index+"']").show();
}

//Actualiza carrito de compras después de cada acción (objeto y modal)
function updateCart(){
    var shoppingCartModal = $("div[id='shoppingCart']");
    var strBuilder = "";

    $("span[id='totalProducts']").html(shoppingCart.quantity);
    $("small[id='quantity']", shoppingCartModal).html(shoppingCart.quantity);
    $("span[id='totalAmountFormated']", shoppingCartModal).html(shoppingCart.totalAmountFormated);

    if(shoppingCart.products.length==0){
        strBuilder = '<div class="col-md-12 text-center my-5">No cuentas con productos agregados</div>';
        $("a[data-action='to-checkout']").removeClass("btn-outline-success");
        $("a[data-action='to-checkout']").addClass("btn-outline-disabled");
        $("a[data-action='to-checkout']").addClass("disabled");
    }else{
        $.each( shoppingCart.products, function( key, value ) {
            strBuilder += '<div class="col-md-3 text-center my-2">'+
                    '<img src="'+value.image+'" onerror="this.src=\'lib/images/PlaceHolder_Autos.jpg\'">'+
                '</div>'+
                '<div class="col-md-9">'+
                    '<p class="my-1">'+value.name+'</p>'+
                    '<p class="my-1">'+value.description+'</p>'+
                    '<p class="my-1 text-right">Cantidad (<span>'+value.quantity+'</span>) Total <span>'+value.priceFormated+'</span></p>'+
                    '<p class="my-1 text-right"><a data-index="'+value.listIndex+'" data-carcode="'+value.code+'" id="deleteItem'+value.listIndex+'" class="ACR-delete-link"><i class="far fa-trash-alt"></i>  Eliminar</a></p>'+
                '</div>';
        });
        $("a[data-action='to-checkout']").removeClass("btn-outline-disabled");
        $("a[data-action='to-checkout']").removeClass("disabled");
        $("a[data-action='to-checkout']").addClass("btn-outline-success");
    }
    $("div[id='productsAdded']", shoppingCartModal).html(strBuilder);
    localStorage.setItem("objShoppingCart", JSON.stringify(shoppingCart));
}