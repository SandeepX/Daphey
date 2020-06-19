@include('Inc.header')
@include('Inc.navbar')
    <div class="container">
        <div class="articles-wrapper">
            <div class="row">
                @foreach($articles as $article)
                <div class="col-12 ">
                    <h1><a href="/article-show/{{$article->id}}">{{$article->title}}</a></h1>
                    <div class="card articles-card mb-2">
                        <div class="articles-img-wrapper">
                            <img src="{{asset('images/' . $article->image)}}" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Card title</a></h5>
                            <p class="card-text">{!!str_limit($article->body, 5)!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach()
            </div>
        </div>
    </div>
@include('Inc.footer')


