<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="card.css">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
</head>
<body>
    <?php
    $name = $_GET['fullname'];
    $mail = $_GET['email'];
    $mobile = $_GET['mobile'];
    $web = $_GET['website'];
    $companyname = $_GET['companyname'];
    $Designation = $_GET['Designation'];
    $id = $_GET['id'];
    $DOB = $_GET['DOB'];

    ?>

   <div class="card">
    <div id="companyName">
        <!-- Use PHP to display the variable value -->
        <img src="https://assets-global.website-files.com/6257adef93867e50d84d30e2/636e0a6a49cf127bf92de1e2_icon_clyde_blurple_RGB.png" alt="logo">
        <?php echo $companyname; ?>
    </div>
    <div class="profilepic"><img src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_1280.png" alt="profille pic"></div>
    <!-- Use PHP to display the variable value -->
    <div class="name"> <?php echo $name; ?></div>
    <div class="position"> <?php echo $Designation; ?> </div>

    <div class="detail">
        Id No  : <?php echo $id; ?> <br>
        DOB    : <?php echo $DOB; ?> <br>
        Phone  : <?php echo $mobile; ?> <br>
        E-mail : <?php echo $mail; ?> 
    </div>
    <div class="qrcode"><img src="https://camo.githubusercontent.com/440cf3d781a770b4819394dad722b8cacf53d5ad6acc6badaeff0e86b7f4c00a/68747470733a2f2f70726173616e6e61626f67612e6769746875622e696f2f64656d6f5f61726a7330322f696d616765732f677265656e5f323530783235302e706e67" alt="qrCode"></div>
   </div>
    
</body>
</html>
