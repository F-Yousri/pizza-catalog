@extends('layouts.app')
@section('content')
<pizzas-component :pizzas="{{ json_encode($pizzas) }}"></pizzas-component>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('pizzas.create') }}" type="button"><button class="btn btn-default">Create</button></a>
        </div>
    </div>
</div>
@endsection