@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Resrouces :Edit Resources</h2></div>
</div>

        <?php
         echo Form::open(array('addresrouce' => 'addslides','class' => 'form-horizontal'));
           ?>

		   <div class="form-group">
<div class="col-md-2">
     <label for="text">Name:</label>
  </div>
  <div class="col-md-10">
    	  <?php  echo Form::text('name',null, array('class' => 'form-control')); ?>
          </div>
        </div>

         <div class="form-group">
  <div class="col-md-2">
       <label for="text">Background-Image:</label>
    </div>
    <div class="col-md-10">
      <?php  echo Form::file('bgImage'); ?>

            </div>
          </div>
          <div class="form-group">
   <div class="col-md-2">
        <label for="text">Order:</label>
     </div>
     <div class="col-md-10">
           <?php  echo Form::text('order',null, array('class' => 'form-control')); ?>
             </div>
           </div>

          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
		{!! Form::submit('Cancel!', array('class' => 'btn btn-success')); !!}
  </div>
         {!! Form::close() !!}

		 </div>
     <div class="col-md-12">
     	<div class="col-md-12 pb50"><h2>Resrouces :Content Section</h2></div>
    </div>
 <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addcontentsection"><button type="button" class="btn btn-success">add Section </button></a></div>
    <table class="table table-striped table-border border-form">
   <thead>
     <tr>
       <th>#</th>
       <th>Title</th>
       <th>Product Category</th>
       <th>Flag</th>
       <th>Action</th>

     </tr>
   </thead>
   <tbody>
     <tr>
       <th scope="row">1</th>
       <td>my money tool</td>
           <td>best seller</td>
               <td>sale</td>
       <td><a href="#edit">edit</a></td>

          </tr>

            <tr>
              <th scope="row">2</th>
              <td>My Audio CD's</td>
                  <td>Audio CD's</td>
                      <td>#1 new best seller</td>
              <td><a href="#edit">edit</a></td>

                 </tr>

   </tbody>
 </table>
    		 </div>

   </div>
 <!--col-md-9-->


  </div>
</div>
    @include('includes.footer');
