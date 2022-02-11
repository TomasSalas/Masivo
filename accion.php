<?php
    include('conexion.php');
    require_once('vendor/php-excel-reader/excel_reader2.php');
    require_once('vendor/SpreadsheetReader.php');
    
   /*  if (isset($_POST["btn-submit"]))
    { */
        $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
      
        if(in_array($_FILES["file"]["type"],$allowedFileType)){
    
            $targetPath = 'subidas/'.$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
            
            $Reader = new SpreadsheetReader($targetPath);
            
            $sheetCount = count($Reader->sheets());
            for($i=0;$i<$sheetCount;$i++)
            {
                
                $Reader->ChangeSheet($i);
                
                foreach ($Reader as $Row)
                {
              
                    $nombre = "";
                    if(isset($Row[0])) {
                        $nombre = mysqli_real_escape_string($con,$Row[0]);
                    }
                    
                    $telefono = "";
                    if(isset($Row[1])) {
                        $telefono = mysqli_real_escape_string($con,$Row[1]);
                    }
                    
                    
                    if (!empty($nombre) || !empty($telefono) ) {
                        $query = "insert into usuario(NOMBRE_USUARIO,TELEFONO) values('".$nombre."','".$telefono."')";
                        $resultados = mysqli_query($con, $query);
                    
                        if (! empty($resultados)) {
                            echo 1;
                            
                        } else {
                            echo 2;
                        }
                    }
                 }
            
             }
        }
        else
        { 
           echo 3;
        }
/*      } */
?>