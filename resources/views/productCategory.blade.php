@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12">
 	<h2>Product Category</h2>
</div>
 @include('includes.admin-navbar-1')
 <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addcategory"><button type="button" class="btn btn-success">add Category </button></a></div>


<tr>


   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
       @foreach($product as $dbGetter)
    <tr>
      <td scope="row">{!! $dbGetter->id !!}</td>
      <td>{!! $dbGetter->name !!}</td>
      <td> <a class="btn btn-small btn-info" href="{!! URL::to('editCategory/'. $dbGetter->id).'/edit' !!}">Edit</a></td>

         </tr>

    @endforeach
  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
