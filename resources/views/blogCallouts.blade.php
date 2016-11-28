
@include('includes.head');

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">

 	<div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-4"><h2>Blog Callouts</h2></div>
</div>

<div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addCallouts"><button type="button" class="btn btn-success">add Callouts </button></a></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>Title</th>

      <th>Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($callout as $dbGetter)

    <tr>

      <td>{!! $dbGetter->title !!}</td>
      <td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateBlogCallouts/'. $dbGetter->id).'/edit' !!}">Edit</a>


       </tr>

       @endforeach
  </tbody>
</table>
		 </div>
     <div class="col-md-12">
      <div class="col-md-4"><h2>Blog Posts</h2></div>
     </div>

     <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addblogpost"><button type="button" class="btn btn-success">add Posts </button></a></div>
       <table class="table table-striped table-border border-form">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>

          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach($callout as $dbGetter)

      <tr>

        <td>{!! $dbGetter->title !!}</td>
        <td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateBlogCallouts/'. $dbGetter->id).'/edit' !!}">Edit</a>


         </tr>

         @endforeach


          <th scope="row">1</th>
          <td>Blog post one</td>
            <td><a href="#edit">edit</a></td>

             </tr>

               <tr>
                 <th scope="row">2</th>
                 <td>Blog post two</td>
                 <td><a href="#edit">edit</a></td>

                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Blog post three</td>
                      <td><a href="#edit">edit</a></td>

                         </tr>

      </tbody>
     </table>

   </div>

 </div> <!--col-md-9-->
 </div>
</div>
     @include('includes.footer');
