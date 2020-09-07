@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Results</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($customers as $customer)
                            <li class="list-group-item">
                                <a title="Show details" href="/customer/{{ $customer->id }}">Customer: {{ $customer->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-2">
                <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">Back</a>
                <a href="/" class="btn btn-primary btn-sm">Menu</a>
            </div>
            
        </div>
    </div>
</div>
@endsection