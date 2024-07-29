<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quản lí học sinh</title>
</head>

<body>
   <h2>Nhập vào from</h2>
   <form method="post" action="output.php">
      <table>
         <tr>
         <?php for ($i =0 ; $i<5; $i++): ?>
            <td><label for="name<?= $i ?>">Tên học sinh:</label></td>
            <td><input required type="text" id="name<?= $i ?>" name="names[]"></td>
            <td><label for="score<?= $i ?>">Điểm:</label></td>
            <td><input required type="number" id="score<?= $i ?>" min=0 max=10 name="scores[]"></td>
         </tr>
         <?php endfor ?>
           
         <!-- <tr>
            <td><label for="name">Tên học sinh:</label></td>
            <td><input required type="text" id="name" name="names[]"></td>
            <td><label for="score">Điểm:</label></td>
            <td><input required type="number" id="score" min=0 max=10 name="scores[]"></td>
         </tr>

         <tr>
            <td><label for="name">Tên học sinh:</label></td>
            <td><input required type="text" id="name" name="names[]"></td>
            <td><label for="score">Điểm:</label></td>
            <td><input required type="number" id="score" min=0 max=10 name="scores[]"></td>
         </tr>

         <tr>
            <td><label for="name">Tên học sinh:</label></td>
            <td><input required type="text" id="name" name="names[]"></td>
            <td><label for="score">Điểm:</label></td>
            <td><input required type="number" id="score" min=0 max=10 name="scores[]"></td>
         </tr>

         <tr>
            <td><label for="name">Tên học sinh:</label></td>
            <td><input required type="text" id="name" name="names[]"></td>
            <td><label for="score">Điểm:</label></td>
            <td><input required type="number" id="score" min=0 max=10 name="scores[]"></td>
         </tr> -->

         <tr>
            <td><input required type="submit" name="submit" value="Submit"></td>
         </tr>
         
      </table>
   </form>
</body>

</html>