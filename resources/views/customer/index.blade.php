@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All the Customers</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($customer as $customer)
                            <li class="list-group-item">
                                <a title="Show details" href="/customer/{{ $customer->id }}">{{ $customer->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-2">
            <a href="/customer/create" class="btn btn-success btn-sm">Create new customer</a>
            </div>

        </div>
    </div>
</div>
@endsection