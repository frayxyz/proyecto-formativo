<div class="style-float">
    <div class="container">
        <form action="libs/enviarFicha.php" method="post">

        <!-- Row 1 -->
        <div class="row">
                <!-- Ciudad -->
            <div class="col-6">
                <div class="form-group">
                    <label for="municipio">Ciudad:</label>
                    <input type="text"name="municipio" class="form-control municipio" id="municipio"  required >
                    <!-- pattern="[A-Za-z]{3}" -->
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="text" class="form-control" id="fecha" name="date"  value="<?= date("d")."-".date("m")."-".date("Y");?>" disabled >
                </div>
            </div>

        </div>


           <div class="infoContent">

        <!-- Row 2 -->
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-inicio">hora inicio:</label>
                            <input type="text" name="hora-inicio"class="form-control" id="hora-inicio"  required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-inicio">hora Fin:</label>
                            <input type="text" name="hora-inicio"class="form-control" id="hora-inicio"  required>
                        </div>
                    </div>

                </div>

            <!-- Row 3 -->
            <div class="row">
                <!-- Sede -->
                <div class="col-6">
                        <div class="form-group">
                            <label for="Sede">Sede:</label>
                            <input type="text" class="form-control" id="Sede"required  >
                        </div>
                </div>
                    <!-- centro -->
                <div class="col-6">
                        <div class="form-group">
                            <label for="centro">centro:</label>
                            <select name="centro" class="form-control"  id="centro" >
                            </select>
                        </div>
                </div>
            </div>
            <!-- Row 4 -->
            <div class="row">
                        <!--  Temas -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="temas">temas:</label>
                            <select name="temas" class="form-control"  id="temas" required disabled>
                            </select>
                        </div>
                    </div>
                 <!-- Área -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Area">Area:</label>
                            <input type="text" class="form-control" id="Area"required disabled  >
                        </div>
                    </div>
            </div>


        <!-- Row 5 -->
                <div class="row">
                <!-- Objetivos Reunión -->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="Objetivos">Objetivos De La Reunión:</label>
                            <!-- <input type="text"name="Objetivos" class="form-control" id="Objetivos"  required> -->
                            <textarea class="form-control" name="ObjetivosReunion" id="Objetivos" cols="20" rows=""></textarea>
                        </div>
                    </div>
                </div>
            <div class="titulo-desarrollo mb-4" align="center" p-5>
            <h2>Desarrollo De la Reunión</h2>
            </div>

        <!-- Row 6 -->
                <div class="row">
                    <!-- Temas a Tratar -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Temas-a-tratar">Temas A Tratar:</label>
                            <textarea class="form-control" name="Temas-a-Tratar" id="" cols="20" rows=""></textarea>
                        </div>
                    </div>

                    <!-- Desarrollo -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Desarrollo-reunion">Desarrollo:</label>
                            <textarea class="form-control" name="Desarrollo" id="" cols="20" rows=""></textarea>
                        </div>
                    </div>
                </div>

        <!-- Row 7 -->
                <div class="row">
                    <!-- Descargos Aprendiz -->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="descargos-Aprendiz">Descargos Aprendiz:</label>
                            <textarea class="form-control" name="descargos-Aprendiz" id="descargos-Aprendiz" cols="20" rows=""></textarea>
                        </div>
                    </div>

                </div>

        <!-- Row 8 -->
                <div class="row">
                    <!-- Conclusiones -->
                    <div class="col-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Conclusiones:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                    </div>
                </div>

        <!-- Row 9 -->
                <div class="row">

                <!-- Recomendaciones -->
                <div class="col-12">
                            <div class="form-group">
                                <label for="recomendaciones">Recomendaciones:</label>
                                <select class="form-control" name="recomendaciones" id="">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                    </div>
                </div>

        <!-- Row 10 -->
                <div class="row">

                    <!-- Nombre Asistentes -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Asistentes">Nombres Asistentes:</label>
                            <input type="file"name="evidencia" class="form-control-file" id="evidencia" required>
                        </div>
                    </div>

                     <!-- Nombre Invitados -->
                     <div class="col-6">
                        <div class="form-group">
                            <label for="Invitados">Nombres Invitados:</label>
                            <input type="file"name="evidencia" class="form-control-file" id="evidencia" required>
                        </div>
                    </div>
                </div>


                <div class="titulo-desarrollo mb-4" align="center" p-5>
                    <h2>Compromisos</h2>
                </div>

                <form >
                    <div class="row">
                        <div class="col-12">
                            <label for="Actividad">actividad</label>
                            <textarea class="form-control" name="Actividad" id="actividad" cols="20" rows=""></textarea>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-6">
                            <label for="Responsable">Responsable</label>
                                <input class="form-control" type="text" id="responsable">
                        </div>

                        <div class="col-6">
                            <label for="Fecha">Fecha Compromiso</label>
                            <input class="form-control" type="date" id="fecha-compromiso">
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-center mb-5">
                        <!-- <input type="" class="btn btn-success" value="Agregar Compromiso" > -->
                        <button type="submit" class="FormularioCompromisos" >enviar</button>
                    </div>
                </form>

                <div id="listar-compromisos">
                </div>
























                <div class="w-100 d-flex justify-content-center mb-5">
                    <button type="submit" class="btn btn-primary ">Enviar</button>
                </div>

            </div> <!-- fin del contenedor para traer la informacion -->

        </form>
    </div>
</div>
