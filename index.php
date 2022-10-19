<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <title>Student ID System</title>
</head>
<body>

    <?php 
        echo "<div class='navbar bg-light'>";
        echo "<div class='container-fluid'";
        echo "<a href='' class='navbar-brand'>Student ID System</a>";
        echo "</div>";
        echo "</div>";
        echo "<div class='container-fluid'>";
        echo "<div class='row'>";
        echo "<div class='col-lg-6 inputarea'>";
        echo "<div class='container-fluid'>";
        echo "<img src='/logo-placeholder-image.png' alt=''>";
        echo "</div>";
        echo "<input type='text' name='ID' class='form-control' placeholder='Student ID' maxlength='11'>";
        echo "<input type='password' name='password' class='form-control' placeholder='Password'>";
        echo "<button type='submit' class='btn btn-success'>Log In</button>";
        echo "</div>";
        echo "<div class='col-lg-6'></div>";
        echo "</div";
        echo "</div>";
    ?>
    
</body>
</html>