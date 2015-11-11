<!--
*Código fuente que contiene los elementos de la página home.
*Author: Luis Ubaldo Godínez Flores
*Date: 29/10/2015
*/-->
@extends('dinkbit')
 
@section('content')
<div class="contact-header container">
    <div class="jumbotron attention-text">
        <h3>
            <p class="text-center">Atención personalizada</h3>
        <!-- <blockquote class="blockquote-dinkbit"> -->
            <h2><p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                </p> </h2>
        <!-- </blockquote> -->
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>CONTÁCTANOS</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                Aenean commodo ligula eget dolor. Aenean massa. <br />
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            {!! Form::open(array('url'=>'guardar','method'=>'POST')) !!}
                <div class="form-group">
                    {!! Form::text('name', 'Nombre',['class'=>'form-control']) !!} 
                    @if ($errors->has('name'))<p style="color:red;">{!! $errors->first('name') !!} </p>@endif
                </div>
                <div class="form-group">
                    {!! Form::text('lastname', 'Apellidos', ['class'=>'form-control']) !!}
                    @if ($errors->has('lastname'))<p style="color:red;">{!! $errors->first('lastname') !!} </p>@endif
                </div>
                <div class="form-group">
                    {!! Form::text('phone', 'Teléfono', ['class'=>'form-control']) !!}
                    @if ($errors->has('phone'))<p style="color:red;">{!! $errors->first('phone') !!} </p>@endif
                </div>
                <div class="form-group">
                    {!! Form::text('email', 'Email', ['class'=>'form-control']) !!}
                    @if ($errors->has('email'))<p style="color:red;">{!! $errors->first('email') !!} </p>@endif
                </div>
                <div class="form-group">
                    {!! Form::select('subject', array('1'=>'Personal', '2'=>'Empresa'), '1') !!}
                    @if ($errors->has('subject'))<p style="color:red;">{!! $errors->first('subject') !!} </p>@endif
                </div>
                <div class="form-group">
                    {!! Form::text('enterprise', 'Empresa', ['class'=>'form-control']) !!}
                    @if ($errors->has('enterprise'))<p style="color:red;">{!! $errors->first('enterprise') !!} </p>@endif
                </div>
                <div class="form-group">
                    {!! Form::text('ofPhone', 'Teléfono Oficina', ['class'=>'form-control']) !!}
                    @if ($errors->has('ofPhone'))<p style="color:red;">{!! $errors->first('ofPhone') !!} </p>@endif
                </div>
                <div class="form-group">
                    {!! Form::text('mensaje', 'Mensaje', ['class'=>'form-control']) !!}
                    @if ($errors->has('mensaje'))<p style="color:red;">{!! $errors->first('mensaje') !!} </p>@endif
                </div>
                    {!! Form::submit('Enviar mensaje', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-lg-6">
            <h3>ATENCIÓN PERSONALIZADA</h3>
            <p>Anillo Periferico Sur #4890, <br>
                Coyoacan, Anillo Periferico Sur 4890 </br>
                Ciudad de México D.F. CP. 04500</p>
            <div class="element-contact">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                52520052
            </div>
            <div class="element-contact">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                info@mail.to.com
            </div>
            <h3>PERISUR</h3>
            <div class="element-contact">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                52520052
            </div>
            <div class="element-contact">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                info@mail.to.com
            </div>
            <h3>SÍGUENOS EN:</h3>
            <div class="element-contact">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                52520052
            </div>
            <div class="element-contact">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                info@mail.to.com
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="map-contact">
                <iframe src="https://www.google.com/maps/d/embed?mid=zSe0qiXp9JUI.k_SQ8e8koh84&hl=en_US" width="100%" height="200px"></iframe>
            </div>     
        </div>
    </div>    
</div>