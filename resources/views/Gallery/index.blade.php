@include('Inc.header')
@include('Inc.navbar')
    <div class="container-fluid container p-5">
        <div class="row">
            @foreach ($gallery as $image)
                <div class="col-md-4 ">
                <a href="/gallery/img/{{$image->id}}">
                <img  src=" {{asset('images/' . $image->image)}}" style="width: 100%; height: 220px;margin-bottom: 20px;">
                </a>
                </div>
            @endforeach
            </div>
        </div>
@include('Inc.footer')


