<div class="contentFormFinalVenta" id="formEfectivo">
    <div class="cierre text-right">
        <a href="#" class="cierreLink">X</a>
    </div>
    <div class="contentForm">
        <div class="fondo">
            <table class="mb-5">
                <tr>
                    <td>Total:</td>
                    <td class="totalVenta"></td>
                </tr>
                <tr>
                    <td>Efectivo:</td>
                    <td>
                        <form class="efectivo">
                            <span>$ </span><input type="tel" name="pago" class="cantidadPago">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Vuelto:</td>
                    <td class="vuelto"></td>
                </tr>
            </table>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-dark confirmaVenta">Continuar</button>
            </div>
        </div>
    </div>
</div>

<!-- finaliza pago por tarjeta -->
<div class="contentFormFinalVentaTC">
    <div class="cierre text-right">
        <a href="#" class="cierreLink">X</a>
    </div>
    <div class="contentForm">
        <div class="fondo">
            <table class="mb-5">
                <tr>
                    <td>Total:</td>
                    <td class="totalVenta"></td>
                </tr>
                <tr>
                    <td>Seleccione el nombre del banco</td>
                    <td>
                        <form action="">
                            <select name="banco" class="banco">
                                <option value="">Seleccione una opcion</option>
                                <option value="AV Villa">AV Villa</option>
                                <option value="Banco de Bogotá">Banco de Bogotá</option>
                                <option value="Bancolombia">Bancolombia</option>
                                <option value="Banco Caja social">Banco Caja social</option>
                                
                            </select>
                        </form>
                    </td>
                </tr>
            </table>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-dark confirmaVenta">Continuar</button>
            </div>
        </div>
    </div>
</div>