@extends('layouts.home')
@section('content')
<div class="hero-unit">
              <h1>{!!$categoryList['1'] ['text']!!}</h1>
          </div>
 @forelse($news as $k => $n)
    @isset($n['text'])
        @if($n['category_id']== '1')
        <div class="span4">
             <h2>{!! $n['text']!!}<br></h2>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
             <p><a class="btn" href="#">Читать &raquo;</a></p>
        </div><!--/span-->
        @endif
     @endisset
  @empty
  <h2>Новостей нет</h2>
@endforelse
@stop
