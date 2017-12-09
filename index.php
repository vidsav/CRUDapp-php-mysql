<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <title>Crud App</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="container">
        <div class="row" style="margin-top:70px;">
            <div class="col-md-12 text-center">
            <h1>Todo list</h1>
            </div> 
                <div class="table-responsive">
                <table class="table">
                    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add task</button>
                    <button type="button" class="btn btn-default float-right">Print</button>
                    <hr><br>
                    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add task</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label>Task Name</label>
                <input type="text" required name="task" class="form-control">
            </div>
            <input type="submit" name="send" value="send" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Task</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td class="col-md-10">Mark</td>
                      <td><a href="" class="btn btn-primary">Edit</a></td>     
                      <td><a href="" class="btn btn-danger">Delete</a></td>     
                    </tr>
                  </tbody>
                </table>
                </div>
            </div>
            </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>