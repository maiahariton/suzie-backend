@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar')
 </div>

 <div class="col-md-9">
<div class="col-md-12">
 <div class="col-md-12">
 	<h2>Products & Kits : Add Product : Content Section</h2>

</div>
@include('includes.product-navbar-1')
<div class="col-md-2 col-md-offset-10 pb10">
<a href="./pkaddsection"><button type="button" class="btn btn-success"><span class="text-white">add Section</span>
   </a></button></div>

    <table class="table table-striped table-border border-form">
  <thead>
    <tr>

      <th>#</th>
      <th class="text-left">Title</th>
      <th class="action text-center">Action</th>
    </tr>
  </thead>
  <tbody>
          @foreach($product as $task)
<tr>

        <td>  {!! $task->id !!}</td>
        <td>  {!! $task->title !!}</td>
        <td class="action text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updatecontentsection/'. $task->id).'/edit' !!}">Edit this Section</a>
        </td>
   </tr>

      @endforeach

  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
