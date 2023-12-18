<?php

class Datos
{

    private $mysqli;
    private $data;

    public function __construct()
    {
        $this->mysqli=Connection::conn1();
        $this->data=array();
    }

    // No devuelve datos de la BD (insert, update, delete con consultas preparadas)
    public function getDataPreparedStatements1($sql)
    {
        $stmt = $this->mysqli->prepare($sql);
        //$stmt->bind_param("ssi", $par1, $par2, $par3); // i int, d float, s string, b blob

        if(!$stmt->execute())
        {
            $result = $stmt->bind_result($resultado_columna1, $resultado_columna2);
            echo $stmt->bind_result($resultado_columna1, $resultado_columna2);
            //$result = "La opereción no se ha podido realizar.";
            // echo "Detalle del error en la consulta (setDataPreparedStatements1) - ";
            // echo "Numero del error: " . $this->mysqli->errno . " - ";
            // echo "Descripcion del error: " . $this->mysqli->error;                
        }
        else
        {
            $result = "Opereción realizada con éxito.";
        }
        
        $this->mysqli->close();
        return $result;
        
    }
}

?>