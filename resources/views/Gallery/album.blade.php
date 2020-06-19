@include('Inc.header')
@include('Inc.navbar')
<div class="container-fluid container p-5">
    <div class="row">
        @foreach ($images as $pic)
            <div class="col-md-4 ">
                <a data-fancybox="gallery" href="{{asset('uploads/' . $pic->picture)}}">
                    <img  src=" {{asset('uploads/' . $pic->picture)}}" style="width: 100%;height: 220px;margin-bottom: 20px;">
                </a>
            </div>
        @endforeach
    </div>
</div>
@include('Inc.footer')