<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>
   <div id="wrapper">
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">            
                <div class="card" >
                    <div class="card-header">
                        <h2>New Task</h2>                      
                    </div>                    
                    <div class="card-body">
                      <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="title" class="form-label">Title(*)</label>
                          <input type="text" class="form-control" name="title" id="title" required>                         
                        </div>
                        <div class="mb-3">
                          <label for="detail" class="form-label">Detail(Optional)</label>
                         <textarea class="form-control" name="details" id="detail" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="status" class="form-label" >Status</label>
                        <select id="status" class="form-control" name="status">
                          <option value="Open">Open</option>
                          <option value="Closed">Close</option>
                        </select>
                        </div>                       
                        <button type="submit" class="btn btn-primary">Submit</button>
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