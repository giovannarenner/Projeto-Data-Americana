<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
    <title>Data</title>
</head>
<body>
        <h1>Digite uma data em formato americano yyyy/mm/dd e ela será mostrada em formato brasileiro</h1>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="data" />
            </p>
            </div>
        <button class="resposta">Mostrar</button> <br>
        
        <?php
      if(isset($_POST['data'])){
      $data = $_POST['data'];
      $dia = substr($data,8,2);
      $mes = substr($data,5,3);
      $ano = substr($data,0,4);
      
        echo "<p>
        Formato brasileiro: $dia/$mes$ano
     </p>";
      }
            
         ?>
        </form>
  
</body>
</html>