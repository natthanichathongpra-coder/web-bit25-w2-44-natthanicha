<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        $front = $_POST['front'];
        $back = $_POST['back'];
        $height = $_POST['height'];
        
       $total = ($front + $back)/2 * $height  
       
       ?> 
       <div class="card">
            <div class="result-item">
                    <span class="front-text">ด้านหน้า</span>
                    <span class="value-front"><?php echo $front?></span>
            </div>
            <div class="result-item">
                    <span class="back-text">ด้านหลัง</span>
                    <span class="value-back"><?php echo $back?></span>
            </div>
            <div class="result-item">
                    <span class="height-text">ความสูง</span>
                    <span class="value-height"><?php echo $height?></span>
            </div>

            <div class="total">
                <span class="total-text">ตารางเซนติเมตร</span>
                <span class="value-total"><?php echo $total?></span>
            </div>
       </div>

   <a href="index.php" class="btn-back">กลับไปหน้าแรก</a>
</body>
</html>