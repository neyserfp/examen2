<?php
  
    // Llamada a la conexión
    require_once 'Db/Con1Db.php';
    // Llamada al modelo
    require_once 'Models/InsercionConsulta2Model.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select tit_con, img_con, vid_con from contenidos";
    $data = $oData->getData1($sql);

    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos.
            </div>
        ";
    }
    else
    {
        echo
        "
        <div class='bloque0 negrita'>
            <div class='bloque1'>Título</div>
            <div class='bloque1'>Imágen</div>
            <div class='bloque1'>Video</div>
        </div>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <div class='bloque0'>
                <div class='bloque1'>$row->tit_con</div>
                <img src='$row->img_con' alt='Descripción'>
                <video width='320' height='180' controls>
                    <source src='$row->vid_con' type='video/mp4'>
                    Tu navegador no soporta el tag de video.
                </video>
            </div>
            ";
        }
    }

?>