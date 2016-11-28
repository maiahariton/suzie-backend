@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2>Blog : Add Post</h2></div>
</div>

      {!! Form::open(array('url' => 'addblogPost','files'=>'true','class' => 'form-horizontal')); !!}
		   <div class="form-group">
<div class="col-md-2">
     <label for="text">Page Title:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('pagetitle',null, array('class' => 'form-control')) !!}
          </div>
        </div>
        <div class="form-group">
 <div class="col-md-2">
      <label for="text">URL:</label>
   </div>
   <div class="col-md-10">
     {!! Form::text('url',null, array('class' => 'form-control')) !!}
           </div>
         </div>

         <div class="form-group">
  <div class="col-md-2">
       <label for="text">Meta Description</label>
    </div>
    <div class="col-md-10">
      {!! Form::text('metaDescription',null, array('class' => 'form-control')) !!}
            </div>
          </div>

          <div class="form-group">
   <div class="col-md-2">
        <label for="text">Meta Keywords:</label>
     </div>
     <div class="col-md-10">
       {!! Form::text('metakeywords',null, array('class' => 'form-control')) !!}
             </div>
           </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Thubmnail:</label>
  </div>
  <div class="col-md-10">
{!! Form::file('timage',array('class','form-control')) !!}
            </div>
          </div>

          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Featured Images:</label>
  </div>
  <div class="col-md-10">
{!! Form::file('fimage',array('class','form-control')) !!}
            </div>
          </div>

          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Preview Blurb:</label>
          </div>
          <div class="col-md-10">
          {!! Form::text('blurb',null, array('class' => 'form-control')) !!}
             </div>
           </div>
           <div class="form-group">
             <div class="col-md-2">
         <label for="email">Body Html:</label>
         </div>
         <div class="col-md-10">
         {!! Form::textarea('bodyHtml',null,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}
           </div>
          </div>

          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Tags</label>
          </div>
          <div class="col-md-10">
          {!! Form::text('tags',null, array('class' => 'form-control')) !!}
             </div>
           </div>

           <div class="form-group">
           <div class="col-md-2">
           <label for="text">Slug/Url:</label>
           </div>
           <div class="col-md-10">
           {!! Form::text('slug',null, array('class' => 'form-control')) !!}
              </div>
            </div>

          <div class="form-group">
           <div class="col-md-2">
         <label for="select">Visibility:</label>
       </div>
       <div class="col-md-10">
            <select name="visibility" class="form-control">
            <option value="1">Visibile</option>
            <option value="0">Hidden</option>
          </div>
        </div>

  <div class="form-group">
 <div class="col-md-offset-2 col-md-10">
{!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
</div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
