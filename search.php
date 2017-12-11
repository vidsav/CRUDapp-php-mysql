<!DOCTYPE html>

<?php include('db.php');

ini_set('display_errors',1);

if(isset($_POST['search'])){
    $name = htmlspecialchars($_POST['search']);
    $sql = "select * from tasks where name like '%$name%' ";
    $rows = $db->query($sql);
}

?>
<html>
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
        <div class="container">
        <div class="row" style="margin-top:70px;">
            <div class="col-md-12 text-center">
            <h1>(<?php echo mysqli_num_rows($rows); ?>) reults found</h1><br>
            </div>
            <div class="col-md-12 text-center">
            <?php if(mysqli_num_rows($rows) < 1): ?>
            <h2 class="text-danger text-center">No results found! :(</h2><br>
            <a href="index.php" class="btn btn-danger">Back</a>
            </div>    
            <?php else: ?>
                <div class="table-responsive">
                <table class="table table-hover">
                    <a class="btn btn-primary" href="index.php">Back</a>
                    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add task</button>
                    <button type="button" class="btn btn-default float-right"><i class="fa fa-print" aria-hidden="true" onclick="print()"></i> Print</button>
                    <hr><br>
                    <div class="col-md-12 text-center">
                <h3>Search</h3>
                <form class="form-group" action="search.php" method="post">
                    <input type="text" placeholder="Search" name="search" class="form-control">
                </form>
            </div><br>
                    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="add.php">
            <div class="form-group">
                <label>Task Name</label>
                <input type="text" required name="task" class="form-control">
            </div>
            <input type="submit" name="send" value="Add" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                 <tbody>
                    <tr>
                      <th scope="col">Created</th>  
                      <th scope="col">ID</th>
                      <th scope="col">Task</th>   
                    </tr>
                
                 
                    <tr>
                    <?php while($row = $rows->fetch_assoc()): ?>
                        
                        
                        <td><small><?php echo $row['created_time'] ?></small></td>    
                      <td><?php echo $row['id'] ?></td>    
                      <td class="col-md-10"><?php echo $row['name'] ?></td>
                      <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></td>     
                      <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>     
                    </tr>
                      <?php endwhile; ?>
                  </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
            </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>