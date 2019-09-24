<?php
session_start();
require '../model/conexion.php';
class DB extends conexion{

    public function traerinforme($ficha){
        parent::getdb();
        $sql = $this->getdb()->query("SELECT fc.nroficha,a.nombre as area,a.docIDCoordinador as documentoCoordi,concat(uc.nombres,' ',uc.apellidos) as NombreCoordinador, p.nombre as programa,p.proyectoFormativo as 'proformativo',n.nombre as nivel, m.nombre as municipio,fc.horaInicio as horai,fc.horaFin as horaf,etaF.nombre as etaformacion,etaP.nombre as etapaproyecto,u.nombres as lider from tblficha as fc
        inner join tblprograma as p
        on fc.programa = p.codigo
        inner join tblarea as a
        on p.area = a.codigo
        inner join tblmunicipio as m
        on fc.municipio = m.codigo
        inner join tbletapaProyecto as etaP
        on fc.etapaproyecto = etaP.codigo
        inner join tbletapaformacion as etaF
        on fc.etapaformacion = etaF.codigo
        inner join tblusuario as u
        on u.docID = fc.instructorLider
        inner join tblnivel as n
        on n.codigo = p.nivel
        inner join tblusuario as uc
        on a.docIDCoordinador = uc.docID
        where fc.nroficha = '$ficha'
        limit 1");
        $listaetapaformativa =$this->getdb()->query( "SELECT * FROM tbletapaformacion");
        $listaetapaProyecto =$this->getdb()->query( "SELECT * FROM tbletapaproyecto");
        $listaequipoInstructores = $this->getdb()->query( "SELECT CONCAT(u.nombres,' ',u.apellidos) as nombres,u.nombres as nombre, e.numficha from tblequipoinstructor as e inner join tblusuario as u on u.docid = e.docidinstructor where numficha = '$ficha' ");
        $aprendices = array();

        $valor = $sql->rowCount();
        if ( $valor > 0){
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)):
                $_SESSION['documentoCoordinador'] = $row['documentoCoordi'];

                ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="area">Area:</label>
                            <input type="text" name="AREA"class="form-control" id="area" disabled required value="<?= $row['area'];?>">
                        </div>
                    </div>

                    <div class="col-6">

                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <input type="text" class="form-control" id="nivel" disabled required value="<?= $row['nivel'];?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- ETAPA FORMATIVA Y SUS DIFERENTES ETAPAS -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="etapa-formativa">Etapa formativa:</label>
                                <select name="etapaformacion" class="form-control"  id="etapa-formativa" required>
                                    <?php 
                                    while ($column = $listaetapaformativa->fetch(PDO::FETCH_ASSOC)):
                                        if ($column['nombre'] == $row['etaformacion']) {
                                            ?>
                                                <option value="<?=$column['nombre']?>" selected><?=$column['nombre']?></option>
                                            <?php
                                        }else{
                                            ?>
                                                <option value="<?=$column['nombre']?>"><?=$column['nombre']?></option>
                                            <?php
                                        }

                                    endwhile;
                                    ?>

                                </select>

                        </div>
                    </div>



                    <!-- ETAPA PROYECTO Y SUS DIFERENTES ETAPAS -->
                    <div class="col-6">
                    <div class="form-group">
                            <label for="programa">Programa:</label>
                            <input type="text" class="form-control" id="programa" disabled required value="<?= $row['programa'];?>">                       
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-inicio">Hora inicio:</label>
                            <input type="text" class="form-control" id="hora-inicio"required disabled value="<?= $row['horai'];?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-final">Hora fin:</label>
                            <input type="text" class="form-control" id="hora-final"required disabled value="<?= $row['horaf'];?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                            <label for="municipio">Municipio:</label>
                            <input type="text" class="form-control" id="muncipio" disabled required value="<?= $row['municipio'];?>" > 
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="etapa-proyecto">Etapa proyecto:</label>
                            <select name="etapaproyecto" class="form-control"  id="etapa-proyecto"required>
                                <?php
                                while ($column = $listaetapaProyecto->fetch(PDO::FETCH_ASSOC)):
                                    if ($column['nombre'] == $row['etapaproyecto']) {
                                        ?>
                                            <option value="<?=$column['nombre']?>" selected><?=$column['nombre']?></option>
                                        <?php
                                    }else{
                                        ?>
                                            <option value="<?=$column['nombre']?>"><?=$column['nombre']?></option>
                                        <?php
                                        }
                                endwhile;
                                ?>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="formativo">Proyecto formativo:</label>
                            <input type="text" class="form-control" id="formativo" disabled required value="<?= $row['proformativo']?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="instructor-lider">Instructor lider:</label>
                            <select name="instructor" class="form-control"  id="instructor-lider"required value="<?= $row['lider']?>">
                                <?php
                                while ($column = $listaequipoInstructores->fetch(PDO::FETCH_ASSOC)):
                                    if ($column['nombre'] == $row['lider']) {
                                        ?>
                                            <option value="<?=$column['nombre']?>" selected><?=$column['nombres']?></option>
                                        <?php
                                    }else{
                                        ?>
                                            <option value="<?=$column['nombre']?>"><?=$column['nombres']?></option>
                                        <?php
                                        }
                                endwhile;
                                ?>

                            </select>
                        </div>

                    </div>

                </div>


                <div class="row">

                    <!-- Coordinador  -->
                    <div class="col-6">

                        <div class="form-group">
                            <label for="coordinador">Coordinador:</label>
                            <input type="text" class="form-control" id="coordinador" disabled required value="<?= $row['NombreCoordinador']?>">
                        </div>

                    </div>

                    <!-- tipo de falta -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tipofalta">Tipo de falta:</label>
                            <select name="tipofalta" class="form-control"  id="tipofalta" required>
                                <option value="Academica">Academica</option>
                                <option value="Diciplinaria">Diciplinaria</option>
                            </select>
                        </div>
                    </div>
                </div>


            <div class="row">
                <!-- justificacion-->
                <div class="col-6">
                    <div class="form-group">
                        <label for="justificacion">Justificacion:</label>
                        <textarea class="form-control style-textareaficha" name="justificar" id="justificacion" rows="3" required></textarea>
                    </div>
                </div>



                <!-- tipocalificacion -->
                <div class="col-6">
                    <div class="form-group">
                        <label for="tipocalifica">Tipo de Calificacion:</label>
                        <select name="tipocalificacion" class="form-control"  id="tipocalifica" required>
                        <option value="leve">Leve</option>
                        <option value="Grave">Grave</option>
                        <option value="Gravisima">Gravisima</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Estudiantes -->
                <div class="col-6">
                    <div class="container">
                        <label for="">Estudiantes:</label>
                        <?php
                            $aprendices = $this->getdb()->query("SELECT u.docId,u.nombres, u.apellidos,af.numFicha from tblaprendicesficha as af inner join tblusuario as u on u.docID = af.docIDaprendiz where numficha = $ficha");
                            while ($column = $aprendices->fetch(PDO::FETCH_ASSOC)):
                                ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="<?=$column['nombres']?>" name="aprendices[]" value="<?=$column['docId']?>">
                                        <label class="custom-control-label" for="<?=$column['nombres']?>"> <?=$column['nombres'].' '.$column['apellidos']?></label>
                                    </div>
                                <?php
                            endwhile;
                        ?>
                    </div>
                </div>


                <div class="col-6">
                    <!-- sugerencia -->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="Sugerencia">Sugerencia:</label>
                            <select name="sugerencia" class="form-control"  id="Sugerencia" >
                                <?php
                                    $sugerencia = $this->getdb()->query("SELECT * from tblsugerencia");
                                    while ($column = $sugerencia->fetch(PDO::FETCH_ASSOC)):
                                        ?>
                                            <option value="<?=$column['codigo']?>"><?=$column['nombre']?></option>
                                        <?php
                                    endwhile;
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- evidencia -->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="evidencia">Evidencia:</label>
                            <input type="file"name="evidencia" class="form-control-file" id="evidencia" required>
                        </div>
                    </div>

                    <!-- normas reglamentarias -->
                    <div class="col-12">
                        <div class="form-group">
                            <label for="normasReglamentarias">Normas reglamentarias:</label>
                            <textarea class="form-control style-textareaficha" name="normasReglamentarias" id="normasReglamentarias" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

            </div>



            <div class="w-100 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary ">Enviar</button>
            </div>
            <?php
            endwhile;

        }else{


            ?>
            <!--
            -******************************************
            -
            -   segunda vista cuando la ficha no es encontrada
            -
            *******************************************



             -->
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="area">Area:</label>
                        <input type="text" name="AREA"class="form-control" id="area" disabled required>
                    </div>
                </div>

                <div class="col-6">

                    <div class="form-group">
                        <label for="nivel">Nivel:</label>
                        <input type="text" class="form-control" id="nivel" disabled required>
                    </div>
                </div>

            </div>

            <div class="row">
                <!-- ETAPA FORMATIVA Y SUS DIFERENTES ETAPAS -->
                <div class="col-6">
                    <div class="form-group">
                        <label for="etapa-formativa">Etapa formativa:</label>
                        <select name="etapaformacion" class="form-control"  id="etapa-formativa" required>
                        </select>

                    </div>
                </div>



                <!-- ETAPA PROYECTO Y SUS DIFERENTES ETAPAS -->
                <div class="col-6">
                <div class="form-group">
                        <label for="programa">Programa:</label>
                        <input type="text" class="form-control" id="programa" disabled required>                       
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="hora-inicio">Hora inicio:</label>
                        <input type="text" class="form-control" id="hora-inicio"required disabled >
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="hora-final">Hora fin:</label>
                        <input type="text" class="form-control" id="hora-final"required disabled >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                   <div class="form-group">
                        <label for="municipio">Municipio:</label>
                        <input type="text" class="form-control" id="muncipio" disabled required>
                    </div>



                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="etapa-proyecto">Etapa proyecto:</label>
                        <select name="etapaproyecto" class="form-control"  id="etapa-proyecto" required>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="formativo">Proyecto formativo:</label>
                        <input type="text" class="form-control" id="formativo" disabled required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="instructor-lider">Instructor lider:</label>
                        <select name="instructor" class="form-control"  id="instructor-lider" required>
                        </select>
                    </div>

                </div>

            </div>


            <div class="row">


                <div class="col-6">

                    <div class="form-group">
                        <label for="coordinador">Coordinador:</label>
                        <input type="text" class="form-control" id="coordinador" disabled required>
                    </div>

                </div>

                <div class="col-6">

                    <div class="form-group">
                        <label for="tipofalta">Tipo de falta:</label>
                        <select name="tipofalta" class="form-control"  id="tipofalta" required>
                        </select>
                    </div>

                </div>
            </div>


           <div class="row">
                <!-- justificacion-->
                <div class="col-6">
                    <div class="form-group">
                        <label for="justificacion">Justificacion:</label>
                        <textarea class="form-control style-textareaficha" name="normas-reglamentarias" id="justificacion" rows="3" required></textarea>
                    </div>
                </div>



               <!-- tipocalificacion -->
               <div class="col-6">
                    <div class="form-group">
                            <label for="tipocalifica">Tipo de Calificacion:</label>
                            <select name="tipocalificacion" class="form-control"  id="tipocalifica" required>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- evidencia -->
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="evidencia">Evidencia:</label>
                        <input type="file"name="evidencia" class="form-control-file" id="evidencia" required>
                    </div>
                </div>
            </div>





            <div class="w-100 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary ">Enviar</button>
            </div>
            <?php
        }
    }
}
?>

