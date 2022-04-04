@extends('layouts.app')

@section('content')
<div class="container" style="border: 1px solid black;">
    <div class="row">
        <div class="col-3 p-5" style="text-align: center">
            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="rounded-circle" style="width: 150px">
        </div>
        <div class="col-9 pt-5">
            <div><h1 style="color: #ffffff">Hello,{{Auth::user()->surname}} {{Auth::user()->name}}</h1></div>

            <div class="d-flex" style="color: #ffffff">
                <div style="padding-right: 55px"><strong>7</strong> hours</div>
                <div style="padding-right: 55px"><strong>56</strong> minutes</div>
                <div style="padding-right: 55px"><strong>39</strong> seconds</div>
            </div>

            <div class="pt-4">
                <h3 style="color: #ffffff">{{Auth::user()->job_title}}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 p-5" style="border: 1px solid black"></div>
        <div class="col-6 p-5" style="border: 1px solid black"></div>
    </div>
</div>
@endsection
