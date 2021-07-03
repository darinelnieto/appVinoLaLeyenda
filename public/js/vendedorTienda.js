$('.sesion').on('click', function(e){
    $('.sesionMenu').slideToggle(20);
    e.preventDefault();
});
// ellemento donde cargan los productos enlistados con jquery
var tbody = document.getElementById('muestraProductos');

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
            <tr class="${item.id}">
                <td width="40%" class="pl-3">${item.name}</td>
                <td width="20%">${item.sku}</td>
                <td class="formilario${item.sku} text-center" width="6%"><form class="editaCount${item.id}">
                    <input type="number" name="sales" class="valor${item.sku}" style="width:100%" value="1">
                </td>
                <td width="13%" class="text-left pl-5">${item.price}</td>
                <td class="total text-left pl-5" width="13%"></td>
                <td width="20%" class="text-center"><a href="#" class="delet">Delet</a></td>
            </tr>
        `;
        delet();
    }
    aumenta();
    total();
    operation();
    controllerVenta();
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
        console.log(totalPrice);
        if(totalPrice === undefined){
            $('.pieTabla').css({'display':'none'});
        }
}
// aumentando las cantidades de los productos
function aumenta(){
    $(this, '.editaCount'+item.id).on('submit', function(e){
        var cantidad = $('.valor'+item.sku).val();
        localStorage.setItem('cantidad'+item.id, cantidad);
        var valor = localStorage.getItem('cantidad'+item.id);
        $('.valor'+item.sku).replaceWith(`<input type="number" name="sales" class="valor${item.sku}" style="width:100%" value="${valor}">`);
        total();
        e.preventDefault();
        operation();
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
    }else{
        $('.listProduct').css({'display':'none'});
    }
}
function controllerVenta(){
    $('.pieTabla').css({'display':'flex'});
}