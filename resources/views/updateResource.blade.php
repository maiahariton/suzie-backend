@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2 class="pb50">Resources : Edit Resources</h2></div>
</div>
  @foreach($resources as $dbGetter)

<img src="/app/uploads/{!! $dbGetter->image !!}" height="200" width="200" class="pb50">
  {!! Form::open(array('url' => 'updateResource/'.$dbGetter->id.'/update','files'=>'true','class' => 'form-horizontal')) !!}
	 <div class="form-group">
<div class="col-md-2">
     <label for="text">Name:</label>
  </div>
  <div class="col-md-10">
    	  {!! Form::text('name',$dbGetter->name, array('class' => 'form-control')) !!}
          </div>
        </div>

         <div class="form-group">
  <div class="col-md-2">
       <label for="text">Background-Image:</label>
    </div>
    <div class="col-md-10">
{!! Form::File('image') !!}

            </div>
          </div>
          <div class="form-group">
   <div class="col-md-2">
        <label for="text">Order:</label>
     </div>
     <div class="col-md-10">
          {!!Form::text('order',$dbGetter->order, array('class' => 'form-control')) !!}
             </div>
           </div>

          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save', array('class' => 'btn btn-success')); !!}
		{!! Form::submit('Cancel', array('class' => 'btn btn-success')); !!}
  </div>
         {!! Form::close() !!}
@endforeach
		 </div>
     <div class="col-md-12">
     	<div class="col-md-12 pb50"><h2>Resources : Content Section</h2></div>
    </div>
 <div class="col-md-2 col-md-offset-10 pb10"><a href="/addresourcesection"><button type="button" class="btn btn-success">Add Section </button></a></div>
    <table class="table table-striped table-border border-form">
   <thead>
     <tr>
       <th>#</th>
       <th>Title</th>
       <th class="text-center">Action</th>

     </tr>
   </thead>
   <tbody>  @foreach($resContent as $dbGetter)

     <tr>
       <td scope="row">{!! $dbGetter->resContentId !!}</td>
       <td>{!! $dbGetter->resContentName !!}</td>
  <td class="action" class="text-right"> <a class="btn btn-small btn-info" href="{!! URL::to('updateResContent/'. $dbGetter->resContentId).'/edit' !!}">Edit this Product</a>


          </tr>
@endforeach;

   </tbody>
 </table>
    		 </div>

   </div>
 <!--col-md-9-->


  </div>
</div>
    @include('includes.footer');
