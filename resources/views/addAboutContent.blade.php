@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2> Suze's : About Content</h2></div>
</div>
<img src=''></img>

        {!! Form::open(array('url' => 'addAboutContent','files'=>'true','class' => 'form-horizontal')) !!}

        <div class="form-group">
        <div class="col-md-2">
        <label for="text">Image:</label>
        </div>
        <div class="col-md-10">
        {!! Form::file('image') !!}
           </div>
         </div>

         <div class="form-group">
         <div class="col-md-2">
         <label for="text">Body/Text:</label>
         </div>
         <div class="col-md-10">
         {!! Form::text('bodyText',null, array('class' => 'form-control')) !!}
            </div>
          </div>


          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Healines:</label>
          </div>
          <div class="col-md-10">
          {!! Form::text('headline',null, array('class' => 'form-control')) !!}
             </div>
           </div>

           <div class="form-group">
          <div class="col-md-2">
      <label for="bodyHtml">Body Html:</label>
   </div>
   <div class="col-md-10">
         {!! Form::textarea('bodyHtml',null,array('class'=>'form-control')) !!}
             </div>
           </div>

           <div class="form-group">
          <div class="col-md-offset-2 col-md-10">

            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
 		   {!! Form::submit('Save', array('class' => 'btn btn-success')); !!}
 		</div>
          {!! Form::close() !!}

 		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
