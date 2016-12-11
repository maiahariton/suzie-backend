@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12">
 	<h2>Product & Kits</h2>
</div>
 @include('includes.admin-navbar-1')
 <div class="col-md-2 col-md-offset-10 pb10"><a href="/addproduct"><button type="button" class="btn btn-success">Add Product </button></a></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Product Category</th>
      <th>Flag</th>
      <th class="text-center alignment_adjust">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $dbGetter)
<tr>

  <td>  {!! $dbGetter->id !!}</td>
  <td>{!! $dbGetter->title !!}   </td>
  <td>{!! $dbGetter->name !!}</td>
  <td>{!! $dbGetter->flag !!}</td>
  <td class="action alignment_adjust" > <a class="btn btn-small btn-info" href="{!! URL::to('updateProduct/'. $dbGetter->id).'/edit' !!}">Edit this Product</a>
  </td>
</tr>

@endforeach
  </tbody>
</table>
 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
