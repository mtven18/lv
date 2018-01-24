<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo</title>
  </head>
  <body>
    

    <div>
      <div> <h1>ToDo</h1> </div>
          
          <form role="form" action="/task/create" method="POST">
            <?php echo e(csrf_field()); ?>

            <label for="name">Name</label>
            <input required type="text" name="name" id="name" placeholder="Name">
           </div>
            <label for="text">Discription</label>
            <input required type="textarea" id="text" name="discription" placeholder="Discription">

           <input type="submit" value="Create task">
          </form>


      </div>
    </div>
  </body>
</html>