<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>
   <div id="wrapper">
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">            
                <div class="card" >
                    <div class="card-header">                      
                       <h2 class="float-left"> Task List</h2>                      
                        <h2 class="float-right"> 
                           <a href="{{ route('tasks.create')}}" class="btn btn-outline-primary">+ New Task</a>
                       </h2>                      
                       <div class="clearfix"></div>
                    </div>                    
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($tasks as $task)
                              <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$task->title}}</td>
                                <td>{{$task->details}}</td>
                                <td>{{$task->created_at->diffForHumans()}}</td>  
                                <td>
 @if ($task->status === "Open") 
 <span class="badge alert-success">{{$task->status}}</span>     
 @else
 <span class="badge alert-danger">{{$task->status}}</span> 
 @endif
                                     
                                 
                                  
                                </td>                                
                                                              
                                <td>                                    
                                    <a class="btn btn-outline-success" href="/">Edit</a>
                                    <a class="btn btn-outline-danger"  href="/">Delete</a>                                    
                                </td>
                              </tr>                               
                              @endforeach
                              
                            </tbody>
                          </table>                      
                    </div>
                  </div>   
                </div> 
           </div>
       </div>
   </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/botstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>