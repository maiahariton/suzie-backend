@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
<div class="col-md-12">
 <div class="col-md-12">
 	<h2>HomePage: Main Slide Show Carousel</h2>

</div>
@include('includes.admin-navbar-1')

 <div class="col-md-2 col-md-offset-10 pb10"><a href="./addslide"><button type="button" class="btn btn-success"><p class="text-white">add Slide</p> </a></button></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>#</th>
      <th colspan="5" class="text-center">Title</th>
      <th class="action" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
          @foreach($user as $task)
<tr>

        <td>  {!! $task->id !!}</td>
        <td colspan="5" class="text-center">  {!! $task->title !!}</td>
        <td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateSlider/'. $task->id).'/edit' !!}">Edit this Slider</a>
        </td>
   </tr>

      @endforeach

  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
