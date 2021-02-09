@extends('layouts.app2')

@section ('content')

    <form action="{{route('enfermedades_sufridas_mascotas.store')}}"  method="POST">
        @csrf
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nuevo: Enfermedades Sufridas por Mascota

            </h2>

            <table class="table table-hover table-striped">

                <div class="form-group" >
                    Nombre Enfermedad                         


                    <input type="text"   name="nombreEnf" class="form-control" >

                </div>

                <div class="form-group" >
                    ID Mascota

                    <input type="text"   name="cod_mascota" class="form-control" >

                </div>


                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

@endsection