@extends('dinkbit')
 
@section('content')
<div class="cotiza-header container">
    <div class="jumbotron attention-text">
        <h3>
            <p class="text-center">COTIZADOR EN LÍNEA</h3>
        <!-- <blockquote class="blockquote-dinkbit"> -->
            <h2><p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                </p> </h2>
        <!-- </blockquote> -->
        </div>
    </div>

<div class="container" >
    <div class="row">
        <div class="col-lg-12">
            <h2>SOLICITA UN PRÉSTAMO HOY</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                Aenean commodo ligula eget dolor. Aenean massa
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
    <div class="row" data-ng-controller="CotizadorCtrl">
        <div class="col-lg-6">
            <h3>LOREM IPSUM</h3>
            <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el 
                contenido del texto de un sitio mientras que mira su diseño. 
                El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal 
                de las letras, 
                al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". 
                Estos textos hacen parecerlo un español que se puede leer.</p>
            <h3>ES UN HECHO ESTABLECIDO</h3>
            <p>Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, 
                cuando un impresor (N. del T. 
                persona que se dedica a la imprenta) 
                desconocido usó una galería de textos y 
                los mezcló de tal manera que logró hacer un libro de textos especimen. </p>
            <h3>PENSAMIENTO POPULAR</h3>
            Al contrario del pensamiento popular, el texto de Lorem Ipsum no es 
            simplemente texto aleatorio. 
            Tiene sus raices en una pieza cl´sica de la literatura del Latin, 
            que data del año 45 antes de Cristo, 
            haciendo que este adquiera mas de 2000 años de antiguedad.
            
        </div>
        <div class="col-lg-6">
            <div class="cotizador">
                <form class="controles-cotizador" method="GET" data-ng-submit="show()">
                    <div class="input-group">
                        <input type="hidden" name="_token" value="{!! Session::token() !!}">
                        <input type="text" class="form-control" id="monto"  data-ng-model="monto">
                        <input type="text" class="form-control" id="quincenas" data-ng-model="quincenas">
                        <button class="btn btn-default" type="submit">Cotizar</button>
                    </div>    
                </form>
            </div>
            <div data-ng-if="results">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Saldo insoluto</th>
                        <th>Amortización</th>
                        <th>Interés</th>
                        <th>IVA</th>
                        <th>Pago</th>
                    </tr>
                </thead>
                <tbody >
                    <tr data-ng-repeat="pago in pagos">
                        <td> @{{ pago.num | number:2 }}</td>
                        <td> @{{pago.saldo | number:2 }}</td>
                        <td> @{{pago.amortizacion | number:2}}</td>
                        <td> @{{pago.interes_insoluto | number:2}}</td>
                        <td> @{{pago.iva_insoluto | number:2}}</td>
                        <td> @{{pago.pago | number:2}}</td>
                        <td> @{{pago.pago_sin_iva | number:2}}</td> 
                    </tr>
                </tbody>
                
            </table>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <h3><p class="text-center">LOREM IPSUM ES SIMPLEMENTE EL TEXTO DE RELLENO</p></h3>
            <div class="media">
            <div class="media-left">
                <img class="media-object" src="assets/images/elementos/check.png">
            </div>
            <div class="media-body">
                <p>Lorem ipsum dolor sit amet, in eum hinc illum, audire nonumes id per, an inermis docendi nec. 
                    Ut eligendi appareat aliquando mei. 
                    Choro mnesarchum te has, vel ei accusam suscipit. </p>
            </div>
            </div>
            <div class="media">
            <div class="media-left">
                <img class="media-object" src="assets/images/elementos/check.png">
            </div>
            <div class="media-body">
                <p>Lorem ipsum dolor sit amet, in eum hinc illum, audire nonumes id per, an inermis docendi nec. 
                    Ut eligendi appareat aliquando mei. 
                    Choro mnesarchum te has, vel ei accusam suscipit. </p>
            </div>
            </div>
            <div class="media">
            <div class="media-left">
                <img class="media-object" src="assets/images/elementos/check.png">
            </div>
            <div class="media-body">
                <p>Lorem ipsum dolor sit amet, in eum hinc illum, audire nonumes id per, an inermis docendi nec. 
                    Ut eligendi appareat aliquando mei. 
                    Choro mnesarchum te has, vel ei accusam suscipit. </p>
            </div>
            </div>
        </div>
    </div>
</div>
        