
@include('includes.head');

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">

 	<div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-4"><h2>HomePage</h2></div>
</div>
@include('includes.admin-navbar-1')

  {!! Form::open(array('add' => 'promocallout','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Page Title:</label>
  </div>
  <div class="col-md-10">
    	  {!! Form::text('pagetitle',null, array('class' => 'form-control form-border ')) !!}
          </div>
      </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Url:</label>
  </div>
  <div class="col-md-10">
          {!! Form::text('url', null, array('class' => 'form-control ')) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Meta Description:</label>
  </div>
  <div class="col-md-10">
          {!! Form::text('metaDescription',null, array('class' => 'form-control ')) !!}
            </div>
          </div>
           <div class="form-group">
      <div class="col-md-2">
     <label for="email">Meta Keywords:</label>
  </div>
  <div class="col-md-10">
          {!! Form::text('metaKeywords',null, array('class' => 'form-control ')) !!}
           </div>
        </div>

            <div class="form-group">
       <div class="col-md-2">
     <label for="email">Facebook Image:</label>
  </div>
        <div class="col-md-10">
         {!! Form::file('Facebookimage'); !!}
          </div>
        </div>
          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		  {!! Form::submit('Save!', array('class' => 'btn btn-success')) !!}
		</div>
    {!! Form::close() !!}
		 </div>
   </div>

   <div class="col-md-12 ">
 <div class="col-md-12">
 <div class="col-md-12"><h2 class="pb20">Newsletter Signup Call Out</h2></div>
 </div>
{!! Form::open(array('url' => 'newsletterPage','class' => 'form-horizontal')) !!}
            <div class="form-group">
      <div class="col-md-2">
     <label for="email">Headlines:</label>
  </div>
  <div class="col-md-10">
          <?php  echo Form::text('nleadlines',null, array('class' => 'form-control ')); ?>
           </div>
        </div>

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Body/HTML:</label>
  </div>
  <div class="col-md-10">
    	 {!! Form::textarea('bodyhtml',null,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}

          </div>
  </div>
 <div class="col-md-offset-2 col-md-10">
		   <?php echo Form::submit('Save!', array('class' => 'btn btn-success')); ?>
		</div>

  {!! Form::close() !!}

		 </div>

         <div class="col-md-12 ">
 <div class="col-md-12">
 <div class="col-md-12"><h2 class="pb20">Promo Call Out</h2></div>
 </div>

         {!! Form::open(array('url' => 'promocallout','class' => 'form-horizontal')) !!}

	<div class="form-group">
      <div class="col-md-2">
     <label for="email">Headlines:</label>
  </div>
  <div class="col-md-10">
          {!! Form::text('promoheadlines',null, array('class' => 'form-control ')) !!}
           </div>
</div>

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Body/Html:</label>
  </div>
  <div class="col-md-10">
    	 {!! Form::textarea('promobodyhtml',null,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}

  </div>

  </div>

 <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')) !!}
		</div>

        {!! Form::close() !!}

		 </div>

   </div>

 </div> <!--col-md-9-->
 </div>
</div>
     @include('includes.footer');
