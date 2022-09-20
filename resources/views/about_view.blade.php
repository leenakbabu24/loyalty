@extends('indexheader')
@section('indexsection')

<h1 style="text-align: center;">ABOUT US</h1>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <img src="dist/img/about.jpg" width="500px" height="100px" />
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h3 style="margin-top: 120px;">
                @foreach($book as $value)
                {{$value->about}}
                @endforeach</h3>
            </div>
        </div>
    </div>
</div>


@endsection