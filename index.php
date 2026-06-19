<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
      <h1>งานที่2 ณัฏฐณิชา เลขที่44 BIT.2/5</h1>

        <!-- คะแนนช่อง 1 = 10 -->
        <!-- คะแนนช่อง 2 = 20 -->
        <!-- คะแนนรวม = คะแนนช่องที่ 1 + คะแนนช่องที่ 2 -->
        <!-- output. = input1. + input2. -->
        <!-- 30.  =10.       + 20. -->

        <!-- ข้อมูลจะส่งไปที่ไหน.        ส่งแบบไหน -->
         <!-- <form action="result.php" method="post">
            
            <label for="student_name">นักศึกษา:</label>

            <input type="text" name="student_name"> <br>

            <label for="score1">คะแนนช่อง 1:</label>
            <input type="number" name="num1" > <br>

            <label for="score1">คะแนนช่อง 2:</label>
            <input type="number" name="num2"> <br>

            <button type="submit">คำนวณ</button>
        </form> -->
        <form action="result.php" method="post">

       <div class="form-input">
            <label >ด้านหน้า</label>
            <input type="number" placeholder="กรอกด้านหน้า" name="dan">
       </div>
       <div class="form-input">
            <label >ด้านหน้า</label>
             <input type="number" placeholder="กรอกด้านหลัง" name="lang">
       </div>
       <div class="form-input">
            <label >ด้านหน้า</label>
            <input type="number" placeholder="กรอกความสูง" name="height">
        </div>
        <button type="submit">ส่งค่า</button>
        </form>
           
</body>
</html>