@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Project</div>
                    <div class="card-body">
                        <form action="/project" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"></div>
                                    <div class="form-group">
                                        <label for="customer_id">Customer</label>
                                        <select class="custom-select-value form-control" name="customer_id" id="customer_id">
                                            <option value="">Select customer</option>
                                            @foreach($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach
                                        </select>    
                                    </div>
                                <div class="form-group">  
                                    <input class="btn btn-primary" type="submit" value="Save project">
                                </div>  
                        </form>
                        <a class="btn btn-primary float-right" href="/project"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection