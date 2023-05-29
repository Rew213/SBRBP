<!DOCTYPE html>
<html>
<head>
  <title>maket</title>
  <style>

@media (max-width: 768px) {
  /* Изменение стилей для экранов с шириной до 768px (например, мобильные устройства) */

  .container {
    flex-direction: column;
  }

  #container2, #container3 {
    width: 100%;
  }

  .block2, .block3, .block4 {
    width: 100%;
    margin: 0;
  }

  .block2 img, .block4 img {
    max-width: 100%;
    max-height: none;
  }

  table {
    width: 100%;
    height: auto;
    margin: 0;
    padding: 10px;
  }

  th, td {
    font-size: 12px;
  }
}
    body,html {
      
      height: 100%;
      margin: 0;
      padding: 0;
    }
    h1 {
      width: 100%;
      height: 5%;
      font-size: 26px;
      text-align: center;
      margin: 0px 0px;

    }
    .container {
       width: 100%;
      height: 100%;
      display: flex;
      background-color: #282828;
      color: white;
      
    }
    .containert {

      
     display: flex;
     flex-wrap: wrap;
     background-color: #282828;
     color: white;
     overflow: auto;
     
    }
     #container1 {
      width: 100%;
      height: 4.4%;
     
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;

    
    }
    #container2 {
      width: 66.66%;
      height: 95.6%;
      float: left;
      clear: left;
      text-align: center;
     
    }
    #container3 {
       width: 33.33%;
       height: 95.6%;    
      text-align: center;
  
    }
    .block1 {
      width: 50%;
      height: 80%;
      background-color: #686868;
      box-sizing: border-box;
      border-radius: 8px;

    }
    .block2 {
      width: calc(50% - 20px);
      height: 38%;
      background-color: #686868;
      float: right;
      margin-left: 20px;
      margin-bottom: 20px;
      border-radius: 8px;

      
    }
    .block2 img{
      max-width: calc(100% - 10px);
      max-height: calc(100% - 35px);
      width: 100%;
      height: 100%;
      display: block;
      margin: auto; 
      margin-top: 15px;
      margin-left: 5px;
      overflow: auto;
      border-radius: 8px;

    }
    .block3 {
       width: 100%;
      height: calc(62% - 40px);
      background-color: #686868;
      color: white;
      box-sizing: border-box;
      margin-left: 20px;
      margin-bottom: 20px;
      display: inline-block;
      border-radius: 8px;
      
    }
    .block4 {
      width: 100%;
      height: calc(33.33% - 20px);
      background-color: #686868;
      margin-left: 20px;
      margin-bottom: 20px;
      margin-right: 20px;
      border-radius: 8px;
    }
    .block4 img{
      max-width: calc(100% - 10px);
      max-height: calc(100% - 35px);
      width: 100%;
      height: 100%;
      display: block;
      margin: auto; 
      margin-top: 15px;
      margin-left: 5px;
      overflow: auto;
      border-radius: 8px;
     
    }
    table {
      width: calc(100% - 10px);
      height: calc(100% - 35px);
      padding: 40px;
      border-collapse: collapse;
      margin-top: 5px;
      margin-left: 5px;
      margin-right: 5px;

      

    }
    th, td {
      border: 1px solid white;
      padding: 1px;
      color: white;
      background-color: #282828;
      font-size: 14px;
    
      
    }
  </style>
</head>
<body>
  <div id="container1" class="container">
   <div class="block1">
     <h1>Окно мониторинга параметров кластера "Феликс-К"</h1>
     
   </div>
</div>
  <div id="container2" class="containert">
 
 <div class="block2">
  <h1>Видеонаблюдение</h1>
<img src="../img/camera.jpg"> 
 </div>

 <div class="block2">
   <h1>График температуры за 2 дня</h1>
     <img src="../img/temperature1.jpg"> 

 </div>

 <div class="block3">
 <h1>Параметры работы кластера</h1>
      <?php
// Путь к папке с текстовыми файлами
$folderPath = 'P';

// Создать HTML-таблицу
echo "<table>";

// Добавить заголовки столбцов
echo "<tr>";
echo "<th>Node #</th>"; 
echo "<th>Username</th>"; 
echo "<th>ip</th>"; 
echo "<th>OS</th>"; 
echo "<th>CPU</th>"; 
echo "<th>CPU Cores</th>"; 
echo "<th>CPU load, %</th>"; 
echo "<th>t° CPU, °C</th>"; 
echo "<th>GPU</th>"; 
echo "<th>GPU load, %</th>"; 
echo "<th>t° GPU, °C</th>"; 
echo "<th>HDD, %</th>"; 
echo "<th>Network, Mbit/s</th>"; 
echo "</tr>";

// Получить список файлов в папке
$files = scandir($folderPath);

// Переменная для нумерации строк
$rowNumber = 1;

// Обработать каждый файл
foreach ($files as $file) {
    $filePath = $folderPath . '/' . $file;

    // Проверить, является ли файл текстовым
    if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'txt') {
        // Открыть текстовый файл для чтения
        $fileContent = file($filePath);

        // Прочитать каждую строку и добавить ячейки в таблицу
        foreach ($fileContent as $line) {
            $cells = explode("|", $line);

            echo "<tr>";
            echo "<td>" . $rowNumber . "</td>"; // Добавить нумерацию строк
            foreach ($cells as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";

            $rowNumber++;
        }
    }
}

// Закрыть HTML-таблицу и вывести на экран
echo "</table>";
?>

      

 </div>
  </div>

  <div id="container3" class="containert">

<div class="block4">
  <h1>График температуры за неделю</h1>
   <img src="../img/temperature1.jpg"> 
</div>

  <div class="block4">
  <h1>График температуры за месяц</h1> 
   <img src="../img/temperature1.jpg"> 
</div>

  <div class="block4">
    <h1>График температуры за год</h1> 
     <img src="../img/temperature1.jpg"> 
  </div>

  </div>
 
</body>
</html>
