<!DOCTYPE html>

<?php include('db.php');
ini_set('display_errors',1);

$id = $_GET['id'];

$sql = "select * from tasks where id='$id'";

$rows = $db->query($sql);

$row = $rows->fetch_assoc();

if(isset($_POST['send'])){
    $task = $_POST['task'];
    $sql = "update tasks set name='$task' where id = '$id'";
    $db->query($sql);
    header('location: index.php');
}


?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <title>Crud App</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Edit "<?php echo $row['name']; ?>" task</h2>
                </div>
                <div class="col-md-12">
                    <form method="post">
            <div class="form-group">
                <label><strong>Edit task</strong></label>
                <input type="text" required name="task" value="<?php echo $row['name']; ?>" class="form-control">
            </div>
            <input type="submit" name="send" value="Edit" class="btn btn-success">
        </form>
                </div>
            </div>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>