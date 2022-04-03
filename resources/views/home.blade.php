@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="rounded-circle" style="width: 150px">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Hello, {{Auth::user()->name}}</h1></div>

            <div class="d-flex">
                <div style="padding-right: 55px"><strong>7</strong> hours</div>
                <div style="padding-right: 55px"><strong>56</strong> minutes</div>
                <div style="padding-right: 55px"><strong>39</strong> seconds</div>
            </div>

            <div class="pt-4">
                <h3>Software Engineer</h3>
            </div>
        </div>
    </div>
</div>
@endsection
