$('.sesion').on('click', function(e){
    $('.sesionMenu').slideToggle(20);
    e.preventDefault();
});
// ellemento donde cargan los productos enlistados con jquery
var tbody = document.getElementById('muestraProductos');
var DBdatos = document.getElementById('dbForm');
var imprime = document.getElementById('datos');

// función ajax para pedir y mostrar datos de los productos que se pretende vender 
$('.formSearchProductVenta').on('submit', function(e){
    var respuesta = $('.listProduct').val();
    $.ajax({
        type:'GET',
        url:"api/productos",
        data:{ sku:respuesta },
     }).done(function(res){
         var datos = JSON.stringify(res);
        localStorage.setItem('skuProduct', datos);
        datosStorage();
     });
     $('.formSearchProductVenta')[0].reset();
     e.preventDefault();
});
function datosStorage(){
    var datosLocal = localStorage.getItem('skuProduct');
    const dataJson = JSON.parse(datosLocal);
    for(item of dataJson){
        tbody.innerHTML+=`
            <tr class="${item.id}" style="height:47px;">
                <td width="40%" class="pl-3">${item.name}</td>
                <td width="20%">${item.sku}</td>
                <td class="formilario${item.sku} text-center" width="6%"><form class="editaCount${item.id}">
                    <input type="number" name="sales" class="valor${item.sku}" style="width:100%" value="1">
                </td>
                <td width="13%" class="text-left pl-5">${item.price}</td>
                <td class="total text-left pl-5" width="13%"></td>
                <td width="20%" class="text-center"><a href="#" class="btn btn-danger delet"><i class="far fa-trash-alt"></i></a></td>
            </tr>
        `;
        delet();
    }
    aumenta();
    operation();
    controllerVenta();
    finalizaventa();
}
// finaliza venta
function finalizaventa(){
    venta = $('.sales'+item.id).val();
    totalCantidad = item.stock - venta;
    $('.stock'+item.id).val(totalCantidad);
    $('.confirmaVenta').on('click', function(){
    });
}
function total(){
    var precioTotal = $('.valor'+item.sku).val();
    var suma = precioTotal * item.price;
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

// aumentando las cantidades de los productos
function aumenta(){
    $(this, '.editaCount'+item.id).on('submit', function(e){
        var cantidad = $('.valor'+item.sku).val();
        localStorage.setItem('cantidad'+item.id, cantidad);
        var valor = localStorage.getItem('cantidad'+item.id);
        $('.valor'+item.sku).replaceWith(`<input type="number" name="sales" class="valor${item.sku}" style="width:100%" value="${valor}">`);
        $('.sales'+item.id).replaceWith(`<input type="hidden" name="sales" value="${valor}" class="sales${item.id}">`);
        total();
        e.preventDefault();
        operation();
        finalizaventa();
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
        url:"api/product/name",
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
    $('.contentFormFinalVenta').css({'display':'block'}).draggable({cancel: '.contentForm'});
});
$('.cierreLink').on('click', function(e){
    $('.contentFormFinalVenta').css({'display':'none'});
});
// cancelar venta
$('.cancelarVenta').on('click', function(e){
    $('.tbodyVentas').children().remove();
    $(this).parent().parent().css({'display':'none'});
    localStorage.clear();
    e.preventDefault();
})