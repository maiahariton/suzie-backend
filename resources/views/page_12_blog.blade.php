
@include('includes.head')

<div class="intro waitforimages2">
    <div class="intro-bg">
        <img src="http://placehold.it/2560x768" class="img-responsive" alt="">
    </div>
    <div class="intro-text intro-text-middle">
        <div class="d-table fullwidth">

            <div class="d-table-cell text-center">
                <div class="container text-center">
                    <form class="page-12-search-form">
                        <input type="text" class="resources-src page-12-search-input" name="search" placeholder="Browse by Topic">
                    </form>
                    <h1 class="font-60">
                        <span class="d-block"><b>Suze's Blog</b></span>
                    </h1>
                    <br>

                    <p class=" font-bold font-40">Make the Most of Your 2017 Employee Benefits</p>

                    <p class="font-bold font-18">Read Now</p>
                    <br>
                    <br>

                </div>
            </div>
        </div>

    </div>
</div>
<!--/intro-->

<!--section-->
<div class="page-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              @foreach($results['aboutcontent'] as $task)

                <div class="col-md-4">
                    <div class="padding-top-learn-more">
                        <div>
                            <div class="bg-white rounded-15 bordered padded learn-more-min-height ">
                                <p class="new-rules center-paragraph font-18 text-dark-blue"><strong>{!! $task->pagetitle !!}</strong></p>
                                <br />

                      <div class="page-12-links"><p class="text-dark-gray">
                         @foreach(explode(",",$task->tags) as $val) <a href=''> {!! $val !!}</a>
                         @endforeach

                      <!--              <a href=""><p class="text-dark-gray">Employment,</p></a>
                                    <a href=""><p class="text-dark-gray">Fico,</p></a>
                                    <a href=""><p class="text-dark-gray">Insurance</p></a>-->
                                </div>
                                 <div class="padding-top-learn-more">
                                    <img src="app/uploads/{!! $task->timage !!}" style="max-height:133px;" class="img-responsive center-block"
                                         alt="">
                                </div>
                                <br />

                                <p class="text-dark-blue page-12-description">{!! $task->bodyHtml !!}</p>
                                <br />

                                <div class="padding-top-learn-more text-center ">
                                    <p class="text-light page-12-comments"> 63 comments</p>

                                    <p class="font-bold text-dark-blue font-14">
                                        <i class="material-icons page-12-icon">add</i>

                                      <a href="/blogDetail/{!! $task->id !!}">  Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 @endforeach

                <div class="text-center" style="clear:both">
                    <a href="#" class=" btn btn-purple btn-rounded font-14 font-heading page-12-load-more " >Load
                        More</a>
                </div>
            </div>


            <div class="col-md-4">
@foreach($results['productcontent'] as $product)
                <div class="promo-box first-box">
                    <div class="heading text-center">

                        <h3 class="font-heading">{!! $product->title  !!}</h3>
                    </div>
                    <div class="body clearfix bg-cover clearfix page-12-box-body">
                        <strong class="d-block text-center font-18">You can't afford to miss this HSN Exclusive</strong>

                        <div class="col-sm-8 col-sm-push-4 text-right">
                                    <span class="font-14">
                                        <br>
                                            Get the financial solutions <br>
                                            kit everyone needs
                                            <br>
                                    </span>
                        </div>
                        <div class="col-sm-5 col-sm-push-7 font-14">
                            <a href="#" class="btn btn-dark-blue btn-block btn-rounded font-14 font-heading">Get
                                Access</a>
                            <a href="#" class="btn btn-teal btn-block btn-rounded font-14 font-heading">Buy Now</a>
                        </div>
                    </div>@endforeach
                </div>

                <div class="promo-box second-box">
                    <div class="heading text-center">
                        <h3 class="font-heading">FREE VIDEO SERIES</h3>
                    </div>
                    <div class="body clearfix bg-cover text-center">
                        <div class="d-table fullwidth">
                            <div class="d-table-cell">
                                    <span class="font-14 text-white d-block">
                                        I'll keep you in touch with your money and help boost your confidence and control over your finances by
                                        sharing key steps that you can follow to protect you, your loved ones and your assets!
                                    </span>
                                <a href="#" class="btn btn-purple btn-rounded font-14 font-heading">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="promo-box third-box">
                    <div class="heading text-center">
                        <h3 class="font-heading">GET YOUR MONEY RIGHT!</h3>
                    </div>
                    <div class="body clearfix bg-cover">
                        <div class="col-md-6 col-md-offset-6">
                            <div class="poster-header">
                                         <span class="font-14 text-white  font-light d-block text-right">
                                            Suze teaches you <strong>what you need to know</strong> in...
                                        </span>
                            </div>
                            <div class="poster-body page-12-poster-body text-right line-height-1">
                                <span class="poster-number page-12-poster-number">7</span>
                                <span class="poster-body-text text-white page-12-poster-body-text"><em
                                        class="text-light page-12-easy">easy</em><br> <strong class="page-12-strong">Lessons</strong></span>
                            </div>

                            <div class="poster-buttons text-center">
                                <a href="#" class="btn btn-block btn-rounded btn-green btn-block-new font-14 text-center font-heading">Take
                                    the <br> Course</a>
                            </div>
                        </div>
                    </div>

                    <div class="promo-box fourth-box page-12-fourth-box">
                        <div class="heading text-center">
                            <h3 class="font-heading">MUST HAVE DOCUMENTS</h3>
                        </div>
                        <div class="body  clearfix bg-cover text-center">
                            <div class="d-table fullwidth">
                                <div class="d-table-cell">
                                        <span class="d-block font-14">
                                            <strong>ALL the documents you need to <br> completely protect you and your
                                              family</strong>
                                        </span>
                                    <span class="d-block font-14">
                                            <br>
                                            <em>"Now you and your<br> loved ones are protected!</em>
                                        </span>

                                    <div class="text-center">
                                        <a href="#" data-ripple="#F0F0F0"
                                           class="btn btn-dark-blue btn-default btn-rounded font-14 font-heading mgr-30">
                                            Get Access
                                        </a>
                                        <a href="#" class="btn btn-light-blue btn-rounded font-14 font-heading">
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- section-->
@include('includes.footer')
