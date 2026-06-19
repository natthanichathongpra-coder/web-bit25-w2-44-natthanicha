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
        $dan = $_POST['dan'];
        $lang = $_POST['lang'];
        $height = $_POST['height'];
        
       $total = ($dan + $lang)/2 * $height  
       
       ?> 
       <div class="card">
            <div class="result-item">
                    <span class="dan-text">ด้านหน้า</span>
                    <span class="value-dan"><?php echo $dan?></span>
            </div>
            <div class="result-item">
                    <span class="lang-text">ด้านหลัง</span>
                    <span class="value-lang"><?php echo $lang?></span>
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