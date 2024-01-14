@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <h2>Edit Student's Info</h2>
                        <form action="{{ route('student.update',$student->id) }}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="mb-3 mt-3">
                            <label class="form-label">Name<small class="text-danger">*</small></label>
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control @error('name') is-invalid
                                
                            @enderror" value="{{ old('name') }}">
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>     
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Roll Number<small class="text-danger">*</small></label>
                            <input type="number" name="roll_no" value="{{ $student->roll_no }}" class="form-control @error('roll_no') is-invalid
                                
                            @enderror" value="{{ old('roll_no') }}">
                            @error('roll_no')
                            <div class="text-danger">
                                {{ $message }}
                            </div>     
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email<small class="text-danger">*</small></label>
                            <input type="email" name="email" value="{{ $student->email }}" class="form-control @error('email') is-invalid
                                
                            @enderror" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>     
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age<small class="text-danger">*</small></label>
                            <input type="number" name="age" value="{{ $student->age }}" class="form-control @error('age') is-invalid
                                
                            @enderror" value="{{ old('age') }}">
                            @error('age')
                            <div class="text-danger">
                                {{ $message }}
                            </div>     
                            @enderror
                        </div>
                        <div class="mb-4">
                            <a href="{{ route('student.index') }}" class="btn btn-dark">Back</a>
                            <button class="btn btn-dark">Update</button>
                        </div>
                     </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
