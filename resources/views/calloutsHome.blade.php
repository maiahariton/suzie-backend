@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
  @include('includes.sidebar')
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12">
 	<h2>HomePage Callouts:Blog Callouts</h2>
</div>
 <div class="col-md-2 col-md-offset-10"><a href="http://localhost/suzeroman/public/addcallouts"><button type="button" class="btn btn-success"><p class="text-white">add Callouts</p></a> </button></div>
   <table class="table table-striped border-form table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th colspan="5">Title</th>
      <th colspan="5">Action</th>
    </tr>
  </thead>
  <tbody>
    @if(empty($callout))
    <h3 class="text-danger	">{!! "Sorry !! Records Not Exists" !!}</h3>
    @endif
       <tr>
       @foreach($callout as $dbGetter)
               <td>  {!! $dbGetter->id !!}</td>
               <td colspan="5" class="text-center">  {!! $dbGetter->title !!}</td>
               <td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateCallouts/'. $dbGetter->id).'/edit' !!}">Edit</a>
               </td>
          </tr>

             @endforeach

  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
