<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
<form action="php/create.php" method="post">

    <h4 class="display-4 text-center">Create</h4><hr><br>
    <?php if(isset($_GET['error'])) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET['error'];?>
        </div> 
        <?php } ?>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>
        
        <button type="submit" class="btn btn-primary" name="create">Create</button>
    </form>
</div>
</body>

</html>