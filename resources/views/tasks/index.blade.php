<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>

   <div id="wrapper">
    <div class="contener">
       <div class="row justify-content-center">
           <div class="col-md-8">
            
                <div class="card" >
                    <div class="card-header">
                       <h2 class="float-left"> Task List</h2>
                        <h2 class="float-right"> 
                           <a href="" class="btn btn-outline-primary">+ New Task</a>
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
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    
                                    <a class="btn btn-outline-success" href="/">Edit</a>
                                    <a class="btn btn-outline-danger"  href="/">Delete</a>
                                    
                                </td>
                              </tr>
                           
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