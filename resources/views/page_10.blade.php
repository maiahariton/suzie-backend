@include('includes.head')
        <!--intro-->



            
<div class="page-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="card-raised select-year">
                    <div class="card-raised--content">
                        <div class="bg-white rounded bordered padded mh-1">
                            <h3 class="text-center text-dark-blue font-bold">Year</h3>
                            <hr>
                            <div class="year-scroll">
                                <ul class="list-unstyled font-25 text-center">
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2016" class="text-dark-gray">2016</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2015" class="text-dark-gray">2015</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2014" class="text-dark-gray">2014</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2013" class="text-dark-gray">2013</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2012" class="text-dark-gray">2012</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2011" class="text-dark-gray">2011</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2010" class="text-dark-gray">2010</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2009" class="text-dark-gray">2009</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2008" class="text-dark-gray">2008</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2007" class="text-dark-gray">2007</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2006" class="text-dark-gray">2006</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2005" class="text-dark-gray">2005</a> <i
                                            class="fa fa-angle-down font-18"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2004" class="text-dark-gray">2004</a> <i class="fa fa-angle-down"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2003" class="text-dark-gray">2003</a> <i class="fa fa-angle-down"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2002" class="text-dark-gray">2002</a> <i class="fa fa-angle-down"></i>
                                    </li>
                                    <li class="font-bold">
                                        <a href="/scrapeBook/2001" class="text-dark-gray">2001</a> <i class="fa fa-angle-down"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-10">
            @if(is_null($results))
                <span class="errorDiv">Nothing Found in Scrape Book!!</span>
            @else 
            @foreach($results as $data)
                <div class="year-card pull-left">
                    <div class="year-card-content">
                        <img src="{!! asset('app/uploads/').'/'.$data->image !!}" class="full-img" alt="">
                        <span class="font-21 font-bold text-black">{!! $data->caption !!}</span>
                        <div class="years-card-text">
                            <div class="d-table fullwidth">
                                <div class="d-table-cell">
                                    <span class="font-bold text-dark-blue font-30">{!! $data->caption !!}</span>
                                    <br><br>
                                    <span class="text-dark-blue font-24">
                                        Click to enlarge
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
            @endif
               
               
            </div>
        </div>
    </div>
</div>
<style>
.full-img {
    display: block;
    width: 100%;
    height: auto;
    max-width: 295px;
    max-height: 185px;
}
</style>
     @include('includes.footer');
