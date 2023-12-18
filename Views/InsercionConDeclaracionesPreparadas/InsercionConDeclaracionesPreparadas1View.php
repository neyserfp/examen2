<div id="contenedor0" class="contenedor0">
    <div id="contenedor1" class="contenedor1">
        <form id="formInsercion3" class="bloque1">
            <input type="text" id="textoInsercion1" name="textoInsercion1" required class="campo1" placeholder="Título">
            <input type="file" id="ficheroInsercion1" name="ficheroInsercion1" accept=".jpg, .jpeg, .png" required class="campoArchivo1">
            <input type="file" id="ficheroInsercion2" name="ficheroInsercion2" accept=".mp4" required class="campoArchivo1">
            <input type="submit" id="botonInsercion3" name="botonInsercion3" value="Insertar" class="boton1">
        </form>
    </div>
    <div id="contenedor2" class="contenedor2"> 
        <?php require_once "Controllers/InsercionConsulta1Controller.php"; ?>
    </div>
</div>