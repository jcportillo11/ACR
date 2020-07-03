$(document).ready(function(){
    $("a[id^='selectItem']").click(function(){
        selectItem($(this));
    })
    $("a[id^='addItem']").click(function(){
        var form = $(this).parent("form");
        var quantity = $("input[name='quantity']",form).val();
        addItem($(this), quantity);
    })
    $("a[id^='deleteItem']").click(function(){
        deleteItem($(this));
    })
    //Validamos si ya existen elementos en el carrito de alguna sesión anterior
    if(localStorage.getItem('objShoppingCart') != null){
        //Reemplazamos carrito por la sesión anterior
        shoppingCart = JSON.parse(localStorage.getItem('objShoppingCart'));
        if(shoppingCart.products.length > 0){
            //seleccionamos elementos del carrito por sesión en la lista
            $.each( shoppingCart.products, function( key, value ) {
                $("a[id='selectItem"+value.listIndex+"']").hide();
                $("a[id='deleteItem"+value.listIndex+"']").show();
                $("a[id='continue"+value.listIndex+"']").show();
            })
        }
    }
    //Inizializamos los datos del carrito si hay datos por session los reemplaza si no, carga valores default por carrito vacio
    updateCart();
    $("a[id='viewShopping']").click(function(){
        $("div[id='shoppingCart']").fadeIn("slow");
        $("a[data-action='close-modal']").click(function(){
            $("div[id='shoppingCart']").fadeOut("slow");
        });
        $("a[id^='deleteItem']").click(function(){
            deleteItem($(this));
        });
    })
    //Terminando la carga baja el loading
    $("div[id='loading']").fadeOut("slow");
})