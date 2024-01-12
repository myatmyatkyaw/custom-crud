

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <h2>Student's Info</h2>
               <div class="card-body shadow">
               
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                       
                        
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->roll_no }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->age }}</td>
                            <td >
                                
                                        <a href="{{ route('student.edit',$student->id) }}" class="btn btn-outline-warning" >
                                          <i class="fas fa-pencil-alt"> </i>  
                                        </a>
    
                                        <a href="{{ route('student.show',$student->id) }}" class="btn btn-outline-info" >
                                          <i class="fas fa-info"> </i>  
                                        </a>
                                    
                                        <form action="{{ route('student.destroy',$student->id) }}" method="post" class="d-inline-block">
                                          @method('delete')
                                          @csrf
                                         
                                           <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                              
                                       
                                        </form>
                                   
                            </td>
                          </tr>
                     
                    </tbody>
                  </table>
                  <a href="{{ route('student.index') }}" class="btn btn-dark">Back</a>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection