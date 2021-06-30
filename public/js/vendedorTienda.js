$('.sesion').on('click', function(e){
    $('.sesionMenu').slideToggle(20);
    e.preventDefault();
});
    var tbody = document.getElementById('muestraProductos');
    
    $('.formSearchProductVenta').on('submit', function(e){
    var respuesta = $('.listProduct').val();
    
    $.ajax({
        type:'GET',
        url:"api/productos",
        data:{ sku:respuesta },
     }).done(function(res){
         
         for(let item of res){  
            var count = 1;  
            tbody.innerHTML+=`<tr id="Tabla${item.sku}">
            <td>${item.name}</td>
            <td>${item.sku}</td>
            <td><input type="number" name="stock" class="count${item.sku}" value="${count}"></td>
            <td>${item.price}</td>
            <td class="total${item.id}"></td>
            </tr>`;
            var suma = count++;
            $('.count'+item.sku).val(`${suma}`);
            var resultado = item.price * $('.count'+item.sku).val();
            $('.total'+item.id).html(`${resultado}`);  
            console.log(suma);
         }
     });
     $('.formSearchProductVenta')[0].reset();
     e.preventDefault();
});