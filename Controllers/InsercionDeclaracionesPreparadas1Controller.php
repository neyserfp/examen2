<?php

    // Tratamiento de los input type='text'
    $textoInsercion1 = empty($_POST['textoInsercion1']) ? '' : $_POST['textoInsercion1'];
    // $inputFile1 = empty($_FILES['ficheroInsercion1']) ? '' : $_FILES['ficheroInsercion1'];
    $inputFile1 = 'ficheroInsercion1';
    $inputFile2 = 'ficheroInsercion2';

    // Llamada a la conexion
    require_once "../Db/Con1Db.php";
    // Llamada al modelo
    require_once "../Models/InsercionConSubidaDeArchivos1Model.php";

    // Instanciacion del objeto
    $oData = new Datos;

    // Llamada al metodo para subir el archivo (uploadFile)

    // El nombre del fichero es la concetenacion de la marca y el modelo de coche
    $nameFile1 = $textoInsercion1;
    $nameFile2 = $textoInsercion1;
    // Ruta en la que se guarda el fichero
    $urlFile1 = '../Assets/img/';
    $urlFile2 = '../Assets/video/';

    // Llamada al método para subir el fichero que devuelve la ruta completa en la que se ecuentra el fichero (url)
    // Parámetro 1: Nombre del control file que selecciona el fichero
    // Parámetro 2: Nombre del fichero (archivo)que se va a subir
    // Parámetro 3: Ruta en la que se va a almacenar el fichero    
    // uploadFile(nameFile, inputFile, urlFile)
    $urlFileDb1 = $oData->uploadFile($inputFile1, $nameFile1, $urlFile1);
    $urlFileDb2 = $oData->uploadFile($inputFile2, $nameFile2, $urlFile2);

    // Eliminacion de los tres caracteres iniciales "../" en la ruta en la que se encuetra el fichero
    $urlFileDb1 = substr($urlFileDb1, 3);
    $urlFileDb2 = substr($urlFileDb2, 3);
    // Llamada al metodo para la insertar el registro (setDataPreparedStatements1)
    $sql1 = "insert into contenidos (tit_con, img_con, vid_con) values (?, ?, ?)";
    $data = $oData->setDataPreparedStatements1($sql1, $textoInsercion1, $urlFileDb1, $urlFileDb2);
    
    echo $data;

    // Documentación en:
    // https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php#mysqli.quickstart.prepared-statements

?>