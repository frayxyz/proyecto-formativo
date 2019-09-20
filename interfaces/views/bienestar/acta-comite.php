<div class="style-float">
    <div class="container">
        <form action="libs/enviarFicha.php" method="post">

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    <label for="municipio">municipio:</label>
                    <input type="text"name="municipio" class="form-control municipio" id="municipio"  required >
                    <!-- pattern="[A-Za-z]{3}" -->
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="text" class="form-control" id="fecha" name="date" disabled value="<?= date("d")."-".date("m")."-".date("Y");?>" >
                </div> 
            </div>

        
        </div>
            

           <div class="infoContent">

                    <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="hora-inicio">hora inicio:</label>
                            <input type="text" name="hora-inicio"class="form-control" id="hora-inicio" disabled required>
                        </div>
                    </div>

                    <div class="col-6">
                    
                        <div class="form-group">
                            <label for="descargos-Aprendiz">descargos Aprendiz:</label>
                            <input type="text" class="form-control" id="descargos-Aprendiz" disabled required>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <!-- centro -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="centro">centro:</label>
                            <select name="centro" class="form-control"  id="centro" >
                            </select>
                            
                        </div>
                    </div>



                    <!-- Recomendaciones -->
                    <div class="col-6">
                    <div class="form-group">
                            <label for="recomendaciones">recomendaciones:</label>
                            <input type="text" class="form-control" id="recomendaciones" disabled required>                       
                        </div>
                        
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Sede">Sede:</label>
                            <input type="text" class="form-control" id="Sede"required disabled >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Area">Area:</label>
                            <input type="text" class="form-control" id="Area"required disabled >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                            <label for="Objetivos">Objetivos:</label>
                            <input type="text"name="Objetivos" class="form-control" id="Objetivos" disabled required>
                        </div>
                

                        
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="temas">temas:</label>
                            <select name="temas" class="form-control"  id="temas" required>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                            <label for="Temas-a-tratar">Temas a tratar:</label>
                            <select name="Temas-a-tratar" class="form-control"  id="Temas-a-tratar" required>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Desarrollo-reunion">Desarrollo reunion:</label>
                            <select name="Desarrollo-reunion" class="form-control"  id="Desarrollo-reunion" required>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="Conclusion">Conclusion:</label>
                            <input type="text" class="form-control" id="Conclusion" required>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="tipofalta">Tipo de falta:</label>
                            <select name="instructor" class="form-control"  id="tipofalta" required>
                            </select>                    
                        </div>     
                    </div>
                </div> 


                <div class="row">
                    <!-- justificacion-->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="justificacion">Justificacion:</label>
                            <textarea class="form-control style-textareaficha" name="justificar" id="justificacion" rows="3"required ></textarea>
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

            </div> <!-- fin del contenedor para traer la informacion -->
            
           
            

            
            
           
        </form>
    </div>
</div>
