@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-3 p-5" style="text-align: center; border: 1px solid black">
            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="rounded-circle" style="width: 150px">
        </div>
        <div class="col-9 pt-5" style="color: white">
            <div><h1>Hello,{{Auth::user()->surname}} {{Auth::user()->name}}</h1></div>

            <div class="d-flex">
                <div style="padding-right: 55px"><strong>7</strong> hours</div>
                <div style="padding-right: 55px"><strong>56</strong> minutes</div>
                <div style="padding-right: 55px"><strong>39</strong> seconds</div>
            </div>

            <div class="pt-4">
                <h3>{{Auth::user()->job_title}}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 p-5" style="border: 1px solid black"></div>
    </div>
</div>
@endsection
