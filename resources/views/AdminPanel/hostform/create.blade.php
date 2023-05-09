@extends('layouts.layouts')
    
@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        <a href="{{ url('hostingform') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-hostingform') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">الاسم</label>
                            <input type="text" name="name" class="form-control">
                        </div>
             
                        <div class="form-group mb-3">
                            <label for=""> رقم الجوال</label>
                            <input type="text" name="number" class="form-control" accept="image/*">
                        </div>

                        <div class="form-group mb-3">
                            <label for=""> ميزانية</label>
                            <input type="tel" name="budget" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">الايميل</label>
                            <input type="email" name="email" class="form-control" accept="image/*">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">المساحة </label>
                            <input type="text" name="space" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">bandwidth </label>
                            <input type="text" name="bandwidth" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">عنوان الطلب</label>
                            <input type="text" name="subjects" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">  الطلب  </label>
                            <input type="text" name="requests" class="form-control" accept="image/*">
                        </div>
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">اضف </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@stop