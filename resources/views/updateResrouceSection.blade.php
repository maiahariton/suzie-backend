@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2 class="pb50 padtop40">Resrouces :Edit Content Section</h2></div>
</div>

@foreach($resContent as $dbGetter)

{!! Form::open(array('url' => 'updateResContent/'.$dbGetter->resContentId.'/update','method'=>'post','files'=>'true','class' => 'form-horizontal')) !!}
		   <div class="form-group">
<div class="col-md-2">
     <label for="text">Name:</label>
  </div>
  <div class="col-md-10">
    	  {!! Form::text('name',$dbGetter->resContentName, array('class' => 'form-control')) !!}
          </div>
        </div>

         <div class="form-group">
  <div class="col-md-2">
       <label for="text">body/Html:</label>
    </div>
    <div class="col-md-10">

    {!! Form::textarea('bodyHtml',$dbGetter->bodyHtml,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}

            </div>
          </div>
          <div class="form-group">
   <div class="col-md-2">
        <label for="text">Order:</label>
     </div>
     <div class="col-md-10">
           {!! Form::text('order',$dbGetter->order, array('class' => 'form-control')) !!}
             </div>
           </div>

           <div class="form-group">
    <div class="col-md-2">
         <label for="text">Resources Id:</label>
      </div>
      <div class="col-md-10">
            {!! Form::text('resourceId',$dbGetter->resourceId, array('class' => 'form-control')) !!}
              </div>
            </div>

          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
		{!! Form::submit('Cancel!', array('class' => 'btn btn-success')); !!}
  </div>
         {!! Form::close() !!}
@endforeach
		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
