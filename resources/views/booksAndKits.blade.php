@include('includes.head')

<!--intro-->
<div class="intro waitforimages2">
    <div class="intro-bg">
        <img src="http://placehold.it/2560x768" class="img-responsive" alt="">
    </div>
</div>
<!--/intro-->



<!--sale section-->
<div class="page-section products-section">
    <div class="products-section--title">

<h2 class="font-light font-40">Best Seller</h2>
       <hr>

        <div class="products-slider" id="bestsellers">




    @foreach($results['bestseller'] as $task)
            <div class="products-slider-wrap">



                <div class="products-slider-item card-raised" style="min-height:500px; height:500px;">
                    <div class="card-raised--content text-center">
                        <img src="app/uploads/{!! $task->productImage !!}" class="img-responsive center-block" alt="">
                        <hr class="v-hidden">
                        <h3 class="font-bold text-black font-25">{!! $task->title !!}</h3>
                        <p class="font-21">
                          {!! $task->headlines !!}
                        </p>
                        <hr class="v-hidden">
                        <span class="d-block text-black font-w-600 font-25"><del>{!! $task->listPrice !!}</del> ${!! $task->salesPrice !!}</span>
                        <a href="" class="font-bold font-25 btn btn-purple btn-rounded btn-lg">More Details</a>
                    </div>
                </div><div class="ribbon"><span>SALE</span></div>
            </div>@endforeach


        </div>
    </div>
</div>
<!--/sale section-->

<div class="page-section products-section">
    <div class="products-section--title">
        <h2 class="font-light font-40">Collections & Kits</h2>
        <hr>
        @foreach($results['collection'] as $task)
        <div class="products-slider" id="collectionskits">
            <div class="products-slider-wrap"  style="min-height:500px; height:500px;">
                <div class="products-slider-item card-raised">
                    <div class="card-raised--content text-center">
                        <img src=app/uploads/"{!! $task->productImage !!}" class="img-responsive center-block" alt="">
                        <hr class="v-hidden">
                        <h3 class="font-bold  text-black font-25">{!! $task->title !!}</h3>
                        <p class="font-21">
                          {!! $task->headlines !!}
                        </p>
                        <hr class="v-hidden">
                        <span class="d-block text-black font-w-600 font-25"><del>{!! $task->listPrice !!}</del> ${!! $task->salesPrice !!}</span>
                        <a href="" class="font-bold font-25 btn btn-purple btn-rounded btn-lg">More Details</a>
                    </div>
                </div>
                <div class="ribbon"><span>SALE</span></div>
            </div>

        </div>@endforeach
    </div>
</div>

<div class="page-section products-section" >
    <div class="products-section--title">
        <h2 class="font-light font-40">Books</h2>
        <hr>
          @foreach($results['audioproduct'] as $task)
        <div class="products-slider" id="Books">

            <div class="products-slider-wrap"  style="min-height:500px; height:500px;">
                <div class="products-slider-item card-raised">
                    <div class="card-raised--content text-center">
                        <img src="app/uploads/{!! $task->productImage !!}" class="img-responsive center-block" alt="">
                        <hr class="v-hidden">
                        <h3 class="font-bold text-black font-25">{!! $task->title !!}</h3>
                        <p class="font-21">{!! $task->headlines !!}
                        </p>
                        <hr class="v-hidden">
                        <a href="" class="font-bold font-25 btn btn-purple btn-rounded btn-lg">More Details</a>
                    </div>
                </div>
            </div>

        </div>@endforeach
    </div>
</div>

<div class="page-section products-section">
    <div class="products-section--title">
        <h2 class="font-light font-40">Audio CDs</h2>
        <hr>
          @foreach($results['audioproduct'] as $task)
        <div class="products-slider" id="audicd">
            <div class="products-slider-wrap"  style="min-height:500px; height:500px;">
                <div class="products-slider-item card-raised">
                    <div class="card-raised--content text-center">
                        <img src="app/uploads/{!! $task->productImage !!}" class="img-responsive center-block" alt="">
                        <hr class="v-hidden">
                        <h3 class="font-bold  text-black font-25">{!! $task->title !!}</h3>
                        <p class="font-21">
                          {!! $task->headlines !!}
                        </p>
                        <hr class="v-hidden">
                        <a href="" class="font-bold font-25 btn btn-purple btn-rounded btn-lg">More Details</a>
                    </div>
                </div>
                <div class="ribbon"><span>SALE</span></div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="page-section products-section">
  <div class="products-section--title">
      <h2 class="font-light font-40">Audio CDs</h2>
      <hr>
        <hr>
            @foreach($results['audioproduct'] as $task)
        <div class="products-slider" id="videodvd">
            <div class="products-slider-wrap"  style="min-height:500px; height:500px;">
                <div class="products-slider-item card-raised">
                    <div class="card-raised--content text-center">
                        <img src="app/uploads/{!! $task->productImage !!}" class="img-responsive center-block" alt="">
                        <hr class="v-hidden">
                        <h3 class="font-bold  text-black font-25">{!! $task->title !!}</h3>
                        <p class="font-21">{!! $task->headlines !!}
                        </p>
                        <hr class="v-hidden">
                        <a href="" class="font-bold font-25 btn btn-purple btn-rounded btn-lg">More Details</a>
                    </div>
                </div>
                <div class="ribbon"><span>SALE</span></div>
            </div>
          @endforeach
        </div>
    </div>
</div>


<!-- footer -->
<footer class="footer">
    <div class="container">
        <span class="d-block footer-slogan text-center font-40">
            <img src="../img/footer-quote.jpg" class="center-block img-responsive" alt="">
        </span>
        <div class="row">
            <div class="col-sm-4">
                <h4 class="font-bold">Sign up to stay in touch plus get my free video series!</h4>
                <div class="footer-subscribe">
                    <div class="subscribe-form">
                        <form action="">
                            <input type="text" placeholder="enter name..">
                            <input type="email" placeholder="enter email...">
                            <button type="submit" class="btn-purple font-heading font-18">Sign Up</button>
                        </form>
                    </div>
                </div>
                <div class="footer-social">
                    <ul class="list-inline list-unstyled">
                        <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play fa-2x"></i></a></li>
                    </ul>
                </div>
                <h4 class="footer-widget-title font-bold">
                    Calculators
                </h4>
                <ul class="list-unstyled footer-widget-links">
                    <li><a href="#">Debt Eliminator</a></li>
                    <li><a href="#">Expense Tracker</a></li>
                    <li><a href="#">Compound Interest Forecaster</a></li>
                    <li><a href="#">Average Cost Basis Analyzer</a></li>
                    <li><a href="#">Mortage Refinance Calculator</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <h4 class="footer-widget-title font-bold">Suze's Books and Kits</h4>
                <h5 class="font-bold font-14">BOOKS</h5>
                <ul class="list-unstyled footer-widget-links">
                    <li><a href="#">The Money Class</a></li>
                    <li><a href="#">The 9 Steps To Financial Freedom</a></li>
                    <li><a href="#">Action Plan</a></li>
                    <li><a href="#">2009 Action Plan</a></li>
                    <li><a href="#">Women & Money</a></li>
                    <li><a href="#">Young, Fabulous & Broke </a></li>
                    <li><a href="#">Financial Guidebook </a></li>
                    <li><a href="">The Road to Wealth</a></li>
                    <li><a href="">The Laws of Money</a></li>
                    <li><a href="">The Courage to Be Rich</a></li>
                    <li><a href="">You've Earned It, Don't Lose It!</a></li>
                    <li><a href="">Women & Money - Spanish Edition</a></li>
                </ul>
                <h5 class="font-bold font-14">COLLECTION & KITS</h5>
                <ul class="list-unstyled footer-widget-links">
                    <li><a href="#">Protection Portfolio</a></li>
                    <li><a href="#">Insurance Evaluator</a></li>
                    <li><a href="#">Must Have Documents</a></li>
                    <li><a href="#">The Money Tools</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h4 class="footer-widget-title font-bold">Resource Center</h4>
                <ul class="list-unstyled footer-widget-links">
                    <li><a href="#">Will and Trusts</a></li>
                    <li><a href="#">Managing Debt</a></li>
                    <li><a href="#">Home Ownership</a></li>
                    <li><a href="#">Financial Intimacy</a></li>
                    <li><a href="#">Explanation of Kinds of Insurance</a></li>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">Mutual Funds</a></li>
                    <li><a href="">Retirement Planning</a></li>
                    <li><a href="">Record Keeping</a></li>
                    <li><a href="">Care.com - for your Home Hiring Needs</a></li>
                    <li><a href="">Good Credit Unions</a></li>
                    <li><a href="">Cohabitation Agreement</a></li>
                    <li><a href="">South Africa</a></li>
                    <li><a href="">Identity Theft</a></li>
                    <li><a href="">Paying for College</a></li>
                    <li><a href="">Stocks</a></li>
                    <li><a href="">Bonds and Bond Funds</a></li>
                    <li><a href="">Annuities</a></li>
                    <li><a href="">Taxes and Charitable Giving</a></li>
                    <li><a href="">Online Calculators</a></li>
                    <li><a href="">Sites to See</a></li>
                </ul>
            </div>
        </div>
    </div>
@include('includes.footer')
