@extends('layout')
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>{{$bookdetail->title}}</h2>
                    <span class="byline">Behavioural Psychology</span> 
                </div>
                <p><img src="/images/beha.png" alt="" class="image image-full" /> </p>
                
                {{$bookdetail->prologue}}
            </div>
            
            </div>
        </div>
    </div>

@endsection
