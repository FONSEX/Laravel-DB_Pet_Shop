@extends('layouts.app2')

@section ('content')

    <form action="{{route('Inventario.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Inventario

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    ID Ajuste                          


                  
                    <input type="text"   name="cod_ajuste" class="form-control" >

                </div>

                <div class="form-group" >
                    Fecha Ajuste

                    <input type="text"   name="fecha_ajuste" class="form-control" >

                </div>

                <div class="form-group" >
                    ID Producto

                    <input type="text"    name="cod_producto" class="form-control">

                </div>

                <div class="form-group" >
                    Cantidad en Inventario

                    <input type="text"  name="cantidadInv" class="form-control">

                </div>

                <div class="form-group" >
                    Tipo de Ajuste

                    <input type="text"    name="tipoAjuste" class="form-control">

                </div>





                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection