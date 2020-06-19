<h1>Create Gallery Images</h1>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


    {!! Form::open(['action' => 'GalleryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::file('image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
<h3>Feature Images</h3>
    <div class="row">
        @foreach ($gallery as $image)
            <div class="col-md-2 ">
                <a href="/imageCreate/{{$image->id}}">
                <img  src=" {{asset('images/' . $image->image)}}" style="width: 80%">
                </a>
            </div>
        @endforeach
    </div>
