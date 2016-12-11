
@include('includes.head');

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">

 	<div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-4"><h2> Callouts</h2></div>
</div>

<div class="col-md-2 col-md-offset-10 pb10 text-right" style="text-align:right: !important;"><a href="/addCallouts"><button type="button" class="btn btn-success">Add Callouts </button></a></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>Title</th>

      <th style="text-align:right !important; padding-right:20px;" >Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($callout as $dbGetter)

    <tr>

      <td class="col-md-8">{!! $dbGetter->title !!}</td>
      <td class="action" class="text-center col-md-4"> <a class="btn btn-small btn-info alignment_adjust" href="{!! URL::to('updateBlogCallouts/'. $dbGetter->id).'/edit' !!}"><span class="text-right">Edit</span></a>


       </tr>

       @endforeach
  </tbody>
</table>
		 </div>
     <div class="col-md-12">
      <div class="col-md-4"><h2>Blog Posts</h2></div>
     </div>

     <div class="col-md-2 col-md-offset-10 pb10"><a href="/addblogpost"><button type="button" class="btn btn-success">Add Posts </button></a></div>
       <table class="table table-striped table-border border-form">
      <thead>
        <tr>
          <th class="col-md-2">#</th>
          <th class="col-md-8">Title</th>

          <th class="col-md-2" style="text-align:right !important; padding-right:20px;">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($posts as $dbGetter)

      <tr>
        <td class="col-md-2">{!! $dbGetter->id !!}</td>
        <td class="col-md-6">{!! $dbGetter->pagetitle !!}</td>

<td class="text-center col-md-4"> <a class="btn btn-small btn-info alignment_adjust" href="{!! URL::to('updateBlogPosts/'. $dbGetter->id).'/edit' !!}"><span class="text-right">Edit</span></a>


         </tr>

         @endforeach

      </tbody>
     </table>

   </div>

 </div> <!--col-md-9-->
 </div>
</div>
     @include('includes.footer');
