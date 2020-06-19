@include('Inc.header')
@include('Inc.navbar')

<div class="jumbotron about-us text-center">
    <h1 class="display-4 about-us-title mb-4">What We Are</h1>
    <p class="lead about-us-text">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

</div>

<div class="team-section">
    <h1>OUR TEAM</h1>
    {{--<span class="border"></span>--}}
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card team-card">
                <img src="{{asset('images/PhotoGrid_1508871139187.jpg')}}"  class="img-fluid rounded-circle mx-auto d-block"  alt="">
                <div class="card-body">
                    <h5 class="card-title">Sandeep pant</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card team-card">
                <img src="{{ asset('images/')}}"  class="img-fluid rounded-circle mx-auto d-block"  alt="">
                <div class="card-body">
                    <h5 class="card-title">Sandeep pant</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card team-card">
                <img src="{{asset('images/')}}"  class="img-fluid rounded-circle mx-auto d-block"  alt="">
                <div class="card-body">
                    <h5 class="card-title">Sandeep pant</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Inc.footer')