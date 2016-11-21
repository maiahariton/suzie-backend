@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar')
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12">
 	<h2>HomePage: Main Slide Show Video </h2>
</div>
 @include('includes.admin-navbar-1')

 <div class="col-md-2 col-md-offset-10"><a href="http://localhost/suzeroman/public/addvideo"><button type="button" class="btn btn-success"><p class="text-white">add Video </p></a></button></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>#</th>
      <th colspan="5">Title</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
   @if(empty($video))
   <h3 class="text-danger	">{!! "Sorry !! Records Not Exists" !!}</h3>
   @endif
      <tr>
      @foreach($video as $dbGetter)
              <td>  {!! $dbGetter->id !!}</td>
              <td colspan="5" class="text-center">  {!! $dbGetter->title !!}</td>
              <td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateVideos/'. $dbGetter->id).'/edit' !!}">Edit this Slider</a>
              </td>
         </tr>

            @endforeach
  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
