

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
