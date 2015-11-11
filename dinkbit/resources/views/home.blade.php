<!--
*Código fuente que contiene los elementos de la página home.
*Author: Luis Ubaldo Godínez Flores
*Date: 29/10/2015
*/-->
@extends('dinkbit')
 
@section('content')
<div class="home-header container">
    <div class="jumbotron attention-text">
        <h4>
            <p class="text-center">Aquí va un texto no muy importante</h4>
        <!-- <blockquote class="blockquote-dinkbit"> -->
            <h2><p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
                Nulla consequat massa quis enim.</p> </h2>
        <!-- </blockquote> -->
        </div>
    </div>
<div class="container home-content">
    <div class="row">
        <div class="col-lg-12">
            <h3><p class="text-center">LOREM IPSUM ES SIMPLEMENTE EL TEXTO DE RELLENO</p></h3>
        <samll><p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                           standard dummy text ever since the 1500s, 
                                           when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                           It has survived not only five centuries, 
                                           but also the leap into electronic typesetting, remaining essentially unchanged. 
                                           It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                           and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></small>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="information-column">
                <img class="img-information-column" src="assets/images/elementos/comprobantes-bg.png">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="information-column">
                <img class="img-information-column" src="assets/images/elementos/money-bg.png">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="information-column">
                <img class="img-information-column" src="assets/images/elementos/domicilio-bg.png">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
    </div>
    <div class="row contrast">
        <div class="col-lg-12">
            <h3><p class="text-center">LOREM IPSUM ES SIMPLEMENTE EL TEXTO DE RELLENO</p></h3>
        </div>
    </div>
    <div class="row contrast">
        <div class="col-lg-4">
            <div class="information-column">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="information-column">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="information-column">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
    </div>
    <div class="row contrast">
        <div class="col-lg-4">
            <div class="information-column">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="information-column">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="information-column">
                <p class="text-center">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
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
            <p class="text-center"><a href="cotizador" class="btn btn-warning" role="button">COTIZA TU PRESTAMO</a>
        </div>
    </div>
    
</div>
        
@endsection