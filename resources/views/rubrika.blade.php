@extends('main')

@section('content')
             @foreach($statyas as $statya)
                <article class="blog_post">

                    <div class="three columns">
                        <a href="#" class="th"><img src="{{ URL::to('/') }}/images/{{$statya->image}}" alt="desc" /></a>
                    </div>
                    <div class="nine columns">
                        <a href="{{route('show',$statya->id )}}"><h4>{{$statya->title}}</h4></a>
                        <p> {{$statya->lid}}</p>
						<p><a href="{{ url('delete', $statya->id) }}"><h4>Удалить</h4></a></p>
                    </div>

                </article>
             @endforeach

@endsection


         