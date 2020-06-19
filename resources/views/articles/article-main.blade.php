@include('Inc.header')
@include('Inc.navbar')


<div class="container">
    <div class="articles-wrapper">
        <div class="row">
                <div class="col-12 ">
                    <a href="/article-show/{{$articles->id}}">
                        <h1>{{$articles->title}}</h1>
                        <div class="card articles-card mb-2">
                            <div class="articles-img-wrapper">
                                <img src="{{asset('images/' . $articles->image)}}" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Card title</a></h5>
                                <p class="card-text">{!!$articles->body!!}</p>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    </div>
</div>
@include('Inc.footer')


