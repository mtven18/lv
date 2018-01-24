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
      
        <table>
          <thead>
            <tr>
				        <th>Id</th>
              	<th>Name</th>
              	<th>Text</th>
              	<th>Update</th>
              	<th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($task->id); ?></td>
                <td><?php echo e($task->name); ?></td>
                <form action="/task/upgrade/<?php echo e($task->id); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                	<td><input name="discription" type="textarea" value="<?php echo e($task->discription); ?>"></td>
	                <td>
	                	<input type="submit" value="Upgrade">
	                </td>
                </form>
                <td>
                	<a href="/task/delete/<?php echo e($task->id); ?>"><button>Delete task</button></a>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>

      <div>
        <a href="/task/new"><button>New task</button></a>
      </div>

    </div>
  </body>
</html>