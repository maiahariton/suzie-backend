@include('includes.head');
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Homepage Blog Posts : Edit Callouts</h2></div>
</div>
 @include('includes.admin-navbar-1')

 @foreach($callout as $dbGetter)

{!! Form::open(array('url' => 'updateCallouts/'.$dbGetter->id.'/update','files'=>'true','class' => 'form-horizontal')) !!}

<div class="form-group">
<div class="col-md-2">
<label for="email">Title:</label>
</div>
<div class="col-md-10">
{!! Form::text('title',$dbGetter->title,array('class' => 'form-control')) !!}
   </div>
 </div>
   <div class="form-group">
     <div class="col-md-2">
<label for="image">Background Image:</label>
</div>
<div class="col-md-10">
{!! Form::File('image') !!}
   </div>
  </div>
   <div class="form-group">
  <div class="col-md-2">
<label for="bodyHtml">Body Html:</label>
</div>
<div class="col-md-10">
 {!! Form::textarea('bodyHtml',$dbGetter->bodyHtml,array('class'=>'form-control')) !!}
     </div>
   </div>

   <div class="form-group">
  <div class="col-md-2">
<label for="email">Order:</label>
</div>
<div class="col-md-10">
   {!! Form::text('calloutOrder',$dbGetter->calloutOrder, array('class' => 'form-control ')) !!}
     </div>
   </div>

   <div class="form-group">
  <div class="col-md-2">
<label for="email">page Id:</label>
</div>
<div class="col-md-10">
   {!! Form::text('pageId',$dbGetter->calloutOrder, array('class' => 'form-control ')) !!}
     </div>
   </div>


         <div class="col-md-offset-2 col-md-10">

              {!! Form::submit('update', array('class' => 'btn btn-success')); !!}
              {!! Form::submit('Cancel', array('class' => 'btn btn-success')); !!}
              <a href="{!! url('/deleteCallout') !!}/{!! $dbGetter->id !!}" class="btn btn-warning">Delete</a>


         {!! Form::close() !!}

@endforeach
		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>

</div>
</div>
</div>
    @include('includes.footer');
