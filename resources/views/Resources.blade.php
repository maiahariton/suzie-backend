@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12 pb50">
 	<h2 class="pb50">Resrouces</h2>
</div>

 <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/test/public/addresources"><button type="button" class="btn btn-success">add Resources </button></a></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
  <th class="text-left">Title</h3></th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>


    @foreach($resources as $dbGetter)
    <tr>
  <td class="col-md-9"><h6 class="text-left"> {!! $dbGetter->name !!} </h6></td>
  <td class="col-md-3" > <a class="btn btn-small btn-info" href="{!! URL::to('updateResources/'. $dbGetter->id).'/edit' !!}">Edit this Product</a></div>
</tr>
  @endforeach

  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
