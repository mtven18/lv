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
            @foreach ($tasks as $task)
              <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->name}}</td>
                <form action="/task/upgrade/{{$task->id}}" method="POST">
                  {{ csrf_field() }}
                	<td><input name="discription" type="textarea" value="{{$task->discription}}"></td>
	                <td>
	                	<input type="submit" value="Upgrade">
	                </td>
                </form>
                <td>
                	<a href="/task/delete/{{$task->id}}"><button>Delete task</button></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div>
        <a href="/task/new"><button>New task</button></a>
      </div>

    </div>
  </body>
</html>