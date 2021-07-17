$('.sesion').on('click', function(e){
    $('.sesionMenu').slideToggle(20);
    e.preventDefault();
});
// Muestra input de cantidades
$('.cantidadBTN').on('click', function(e){
    $('.und').animate({'width': 'toggle'});
    e.preventDefault();
});
// ellemento donde cargan los productos enlistados con jquery
var imprime = document.getElementById('datos');
var ids = [];
// función ajax para pedir y mostrar datos de los productos que se pretende vender 
$('.formSearchProductVenta').on('submit', function(e){
    var respuesta = $('.listProduct').val();
    cantidadProducto();
    $.ajax({
        type:'GET',
        url:"api/productos/busqueda",
        data:{ sku:respuesta },
     }).done(function(res){
         var datos = JSON.stringify(res);
        //  Se guarda respuesta de la base de datos en localstorage para imprimir el producto
        localStorage.setItem('skuProduct', datos);
        // Se guarda id en localStorage para recuperarlo en la siguiente l´nea de código y enviarlo al array ids
        localStorage.setItem('id', res[0]['id']);
        // se recupera id del producto, se usará para identificar el producto a descontar de la base de datos
        var idis = localStorage.getItem('id');
        // cantidades se usará para las cantidades a descontar
        var cant = localStorage.getItem('unidades');
        ids.push({'id':idis, 'cantidad':cant});
        console.log(ids);
        datosStorage();
     });
     $('.formSearchProductVenta')[0].reset();
     e.preventDefault();
});
// aumentando las cantidades de los productos
function cantidadProducto(){
    $('.cantidad').on('submit', function(e){
        var cantidadV = $('.und').val();
        if(cantidadV === ''){
            cantidadV = 1;
        }
        localStorage.setItem('unidades', cantidadV);
        e.preventDefault();
    });
    $('.cantidad').submit();
    $('.cantidad')[0].reset();
}
function datosStorage(){
    var datosLocal = localStorage.getItem('skuProduct');
    var cantidad = localStorage.getItem('unidades');
    var dataJson = JSON.parse(datosLocal);
        for(item of dataJson){
            $('#muestraProductos').append(`
                <tr class="${item.id}" style="height:47px;">
                    <td>
                        <form method="post" class="venta${item.id}">
                            <input type="hidden" class="sku${item.sku}" value="${item.sku}" name="sku">
                            <input type="hidden" class="sales${item.id}" value="1" name="sales">
                        </form>
                    </td>
                    <td width="40%" class="pl-3">${item.name}</td>
                    <td width="20%">${item.sku}</td>
                    <td class="cantidad text-center" width="6%"><input type="hidden" class="unidades"  value="${cantidad}">${cantidad}</td>
                    <td width="13%" class="text-left pl-5">${item.price}</td>
                    <td class="total text-left pl-5" width="13%"></td>
                    <td width="20%" class="text-center"><a href="#" class="btn btn-danger delet"><i class="far fa-trash-alt"></i></a></td>
                </tr>
            `);
            total();
            delet();
        }
    operation();
    controllerVenta();
    finalizaventa();
}
// finaliza venta
function finalizaventa(){
    venta = $('.sales'+item.id).val();
    totalCantidad = item.stock - venta;
    $('.stock'+item.id).val(totalCantidad);
}
function total(){
    var unidad = $('.unidades').val();
    var suma = unidad * item.price;
    $('.'+item.id+'>.total').html(`${suma}`);
}

// arrojando valor total de la venta
function operation(){
       var sum = 0;
        pric = $('.total');
        for(let i = 0; i < pric.length; ++i){
            var totalPrice = sum += parseFloat(pric[i].firstChild.data);
        }
        $('.tfooter').html(`<tr>
            <td class="pl-4"><strong>Total = $ ${totalPrice}</strong></td>
        </tr>`);
        $('.totalVenta').html(`$ ${totalPrice}`);
        if(totalPrice === undefined){
            $('.pieTabla').css({'display':'none'});
        }
        $('.efectivo').on('submit', function(e){
            var cantidad = $('.cantidadPago').val();
            var vueltas = cantidad - totalPrice;
            $('.vuelto').html(`$ ${vueltas}`);
            e.preventDefault();
        });
}
function delet(){
    $('.delet').on('click', function(e){
        $(this).parent().parent().remove();
        e.preventDefault();
        operation();
    });
}
// metodos de busqueda
$('.okSelert').on('click', function(e){
    $('.select').on('submit');
    valorSelect = $('.selectorMetodo').val();
    condicion();
    e.preventDefault();
});
// condicional metodo de busqueda
function condicion(){
    if(valorSelect === 'escanner'){
        $('.listProduct').css({'display':'block'});
        $('.listProduct').select();
        $('#modalBuquedaNombre').css({
            'display':'none'
        }).removeClass('show');
    }else{
        $('.listProduct').css({'display':'none'});
        $('#modalBuquedaNombre').css({
            'display':'block',
            'background':'rgba(0,0,0,.5)'
        }).addClass('show');
    }
}
function controllerVenta(){
    $('.pieTabla').css({'display':'flex'});
}
// busqueda de productos por nombre 
$('.searchNameProduct').on('submit', function(e){
    var nombre = $('.nameSearch').val();
    $.ajax({
        type:'GET',
        url:"api/productos/busqueda",
        data:{ name:nombre },
    }).done(function(res){
        var dataStore = JSON.stringify(res);
        localStorage.setItem('skuProduct', dataStore);
        recibeProduct();
    });
    $('.searchNameProduct')[0].reset();
    e.preventDefault();
});
function recibeProduct(){
    var dataStorageRecibida = localStorage.getItem('skuProduct');
    var jsonStorageData = JSON.parse(dataStorageRecibida);
    for(product of jsonStorageData){
        $('.ProductRespuesta').html(`
        <tr>
            <td><img src="storage/${product.image}" alt="${product.name}" width="50px" heigth="65px"></td>
            <td>${product.sku}</td>
            <td>${product.name}</td>
            <td>${product.price}</td>
            <td>${product.stock}</td>
            <td><a href="#" class="addProduct"><i class="fas fa-shopping-cart"></i></a></td>
        </tr>
    `);
    }
    agregaProductEncontrado();
}
function agregaProductEncontrado(){
    $('.addProduct').on('click', function(e){
        datosStorage();
        $('#modalBuquedaNombre').css({
            'display':'none'
        }).removeClass('show');
        $('.ProductRespuesta').children().remove();
        e.preventDefault();
    });
}
// finalizar venta
$('.efectivo').on('click', function(){
    $('#formEfectivo').css({'display':'block'}).draggable({cancel: '.contentForm'});
});
$('.cierreLink').on('click', function(e){
    $('#formEfectivo').css({'display':'none'});
    $('.contentFormFinalVentaTC').css({'display':'none'});
});
$('#tarjeta').on('click', function(e){
    $('.contentFormFinalVentaTC').css({'display':'block'}).draggable({cancel: '.contentForm'});
    e.preventDefault();
});
$('.cancelarVenta').on('click', function(e){
    $('.tbodyVentas').children().remove();
    $(this).parent().parent().css({'display':'none'});
    localStorage.clear();
    ids.pop();
    e.preventDefault();
});

// confirma venta, descuenta productos vendidos en base de datos
$('.confirmaVenta').on('click', function(e){
    for(elem of ids){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
            url:'venta/guardada',
            method:'PUT',
            data:{
                id:elem.id,
                sales:elem.cantidad
            }
        });
    }
    e.preventDefault();
    ids.pop();
    $('.tbodyVentas').children().remove();
    $('.pieTabla').css({'display':'none'});
    $('.contentFormFinalVentaTC').css({'display':'none'});
    $('#formEfectivo').css({'display':'none'});
});