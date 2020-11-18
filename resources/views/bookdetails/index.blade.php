@extends('layout')
@section('content')

<div id="wrapper">
	<div id="page" class="container">
             @foreach($bookdetails as $bookdetail)

                <div id="content">
                    <div class="title">
                        <h2><a href = "{{route('bookdetails.show',$bookdetail)}}">{{$bookdetail->title}}</a></h2>
                        <!-- <span class="byline">Mauris vulputate dolor sit amet nibh</span>  -->
                    </div> 
                    <!-- <p><img src="/images/beha.png" alt="" class="image image-full" /> </p> -->
                    
                    <!-- {!! $bookdetail->author !!} -->
                </div>

                
            @endforeach
				
			
		
	</div>
</div>

@endsection
