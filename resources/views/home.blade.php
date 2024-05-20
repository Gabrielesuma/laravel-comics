@extends('layouts.app')

@section('title', 'home')

@section('content')
<section class="container">
    <div class="row">

        @foreach ($series as $serie)
            <div class="col-12 col-md-6 col-lg-2 mb-4">
                <div class="card">
                    <img src="{{$serie['thumb']}}" class="card-img-top" alt="Thumb">
                    <div class="card-body">
                        <h5 class="card-title">{{$serie['title']}}</h5>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
@endsection