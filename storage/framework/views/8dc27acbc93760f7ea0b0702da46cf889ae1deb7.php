<?php $__env->startSection('content'); ?>



    <?php

    use App\animal;
    use App\alimento;

    $animal=animal::All();
    $alimento=alimento::All();




    ?>







    <form action="<?php echo e(route('raza.store')); ?>"  method="POST">
        <?php echo csrf_field(); ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <div class="col-sm-8">
            <h2>
                Nueva: Raza

            </h2>

            <table class="table table-hover table-striped">


                   <div class="form-group" >
                    ID

                    <input type="text"   name="cod_raza" class="form-control" >

                </div>

                <div class="form-group" >
                    Tipo de Animal

                    <select name="cod_animal" class="form-control" >


                        <?php $__currentLoopData = $animal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_animal); ?>"><?php echo e($variable->nombrea); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>


                </div>

                    <div class="form-group" >
                        Nombre

                        <input type="text"   name="nombrer" class="form-control" >

                    </div>

                    <div class="form-group" >
                        Descripcion

                        <input type="text"    name="descripcionr" class="form-control">

                    </div>

                    <div class="form-group" >
                        Pais de origen

                        <input type="text"  name="paisorigen" class="form-control">

                    </div>

                    <div class="form-group" >
                        Nivel de inteligencia


                        <select name="nivel_inteligencia" class="form-control" >

                            <option value="Bajo">Bajo</option>
                            <option value="Medio">Medio</option>
                            <option value="Alto">Alto</option>



                        </select>


                    </div>

                    <div class="form-group" >
                        Contextura

                        <select name="contextura_fuerte"class="form-control" >

                            <option value='N'>N</option>
                            <option value='S'>S</option>



                        </select>


                    </div>


                <div class="form-group" >

                    Altura Minima

                    <input type="text"    name="altura_min" class="form-control">

                </div>


                <div class="form-group" >
                    Altura Maxima

                    <input type="text"    name="altura_max" class="form-control">

                </div>


                <div class="form-group" >
                    Porcion Diaria

                    <input type="text"    name="porcion_diaria" class="form-control">

                </div>


                <div class="form-group" >
                    Talla


                    <select name="talla" class="form-control" >

                        <option value='P'>P</option>
                        <option value='M'>M</option>
                        <option value='G'>G</option>



                    </select>



                </div>


                <div class="form-group" >
                    Color del Pelaje

                    <input type="text"    name="color_pelaje" class="form-control">

                </div>


                <div class="form-group" >
                    Alimento

                    <select name="cod_alimento" class="form-control" >


                        <?php $__currentLoopData = $alimento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($variable->cod_alimento); ?>"><?php echo e($variable->nombrealimento); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>




                </div>








                <button type="submit" class=" btn btn-primary " ><strong>Enviar</strong> </button>

            </table>

        </div>

    </form>

<?php $__env->stopSection(); ?>













<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>