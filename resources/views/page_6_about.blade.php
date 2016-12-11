@include('includes.head')
        <!--intro-->



            <!--intro-carousel-->
        <div id="achievement-carousel" class="owl-carousel">
          @foreach($results['aboutcontent'] as $tasks)
            <div class="owl-slide" style="background-image: url('app/uploads/{!! $tasks->image !!}');">
                    <div class="achievement-text text-white">
                    <span class="font-30 font-w-600 font-i">"
                        <span class="font-21 font-light">

                        </span>
                        <span class="font-30 font-w-600 font-i">
                    {!! $tasks->bodyText !!}
                    </span><br>
                       <span class="font-21 font-light">

                        </span>
                        <span class="font-30 font-w-600 font-i">
                            POWERHOUSE
                        </span>"
                    </span>
                    <br>
                    <span class="font-i">USA TODAY</span>
                    <br><br>  <br><br>
                    <span>click through Suze's achievements below</span>
                </div>
            </div>

            @endforeach
        </div>
        <!--/intro-carousel-->

        <div class="achievements-slider-wrap">
            <div class="container">
                <div class="achievements-slider">

@foreach($results['aboutcontent'] as $tasks)
                    <div class="slide-item ">
                        <div class="card-raised">
                            <div class="card-raised--content">
                                <img src="app/uploads/{!! $tasks->image !!}" class="img-responsive center-block" alt="">
                            </div>
                        </div>
                    </div>

@endforeach
                </div>
                <span class="shadow"></span>
            </div>
        </div>

        <!--section-->
        <div class="page-section">
            <div class="container">
                <div class="row">  @foreach($results['aboutstaticcontent'] as $task)
                    <div class="col-md-12 text-center font-21">

                        <h2 class="font-60 font-light">{!! $task->headlines !!}</h2>
                        <br><br>
                      {!! $task->bodyHtml !!}


                        <div class="raised-el d-inline-block">
                            <a href="#"
                               class="btn btn-purple btn-text-xs text-no-transform font-18 mtop20">Read
                                More</a>
                        </div>
                    </div>  @endforeach
                </div>
            </div>
        </div>
        <!-- section-->

        <!--section--><!--Scrap Book-->
        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="row">

                           @foreach($results['scrapBook'] as $task)
                            <div class="col-md-4">
                                <div class="card-raised">
                                    <div class="card-raised--content">
                                        <div class="bg-white rounded-15 bordered padded card-raised-inside">
                                            <div>
                                                <img src="app/uploads/{!! $task->image !!}" class="img-responsive center-block scrapBlock"
                                                     alt="">
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="btn btn-green-turquoise btn-padded-medium btn-rounded font-18 mtop10">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section-->
     @include('includes.footer');
