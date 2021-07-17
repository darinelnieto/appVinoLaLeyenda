$('.barMenu').on('click', function(e){
    $('.menuApp').animate({'width': 'toggle'});
    e.preventDefault();
});
if($('.menuApp').css({'display':'block'})){
    $('.contieneContApp').css({ 'width':'100%', 'height':'90vh' });
}else{
    $('.contieneContApp').css({ 'width':'80%' });
}
$('.AddMoreUserModal').on('click', function(){
    $(this).addClass('active');
});
$('.close').on('click', function(){
    $('.AddMoreUserModal').removeClass('active');
});

// generar codigo de barra nuevo aleatorio

$('.AddMoreCode').on('click', function(){
    var aleatorio = Math.floor(Math.random() * 100000000);
    $('.code').html(`${aleatorio}`);
    $('.codeNormal').html(`<label class="mr-2"><strong>SKU:</strong></label><input type="tel" class="input pl-2" name="sku" id="" value="${aleatorio}" require>`);
    $('#sku').val(`${aleatorio}`);
    $('.fondoVinoForm').css({ 'display':'block' });
    $('.productos').css({ 'display':'none' });
});
$('.cancelar').on('click', function(e){
    $('.fondoVinoForm').css({ 'display':'none' });
    $('.productos').css({ 'display':'block' });
    $('#FormProducts')[0].reset();
    e.preventDefault();
});
$('.AddMoreProduct').on('click', function(e){
    $('.fondoVinoForm').css({ 'display':'block' });
    $('.productos').css({ 'display':'none' });
    $('#modalCodeEscaner').css({'display':'block'});
    $(".inputSku").focus();
    e.preventDefault();
});
$('#escaneado').on('click', function(e){
    $('#modalCodeEscaner').css({'display':'none'});
    var valor = $('#codigoEscaneado').val();
    $('#sku').val(`${valor}`);
    e.preventDefault();
});
$(document).ready(function(){
    setTimeout(function(){ 
        $('#mensajeError').css({'display':'none'});
        $('#mensajeExito').css({'display':'none'});
        $('#mensajeErrorDos').css({'display':'none'});
    }, 9000);
});
$('.closeForm').on('click', function(e){
    $('#modalMensaje').css({'display':'none'});
    e.preventDefault();
});