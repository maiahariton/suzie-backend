@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2>Blog :add Post</h2></div>
</div>
<!--updateblogpost/'<!--.$dbGetter->id.'/update'-->
  {!! Form::open(array('url' => 'updateblogpost','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="text">page Title:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('ptitle',null, array('class' => 'form-control')) !!}
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
     <label for="email">Thubmnail:</label>
  </div>
  <div class="col-md-10">
{!! Form::file('thumbnail',array('class','form-control')) !!}
            </div>
          </div>

          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Featured Images:</label>
  </div>
  <div class="col-md-10">
{!! Form::file('fImages',array('class','form-control')) !!}
            </div>
          </div>

          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Preview Blurb:</label>
          </div>
          <div class="col-md-10">
          {!! Form::text('pblurb',null, array('class' => 'form-control')) !!}
             </div>
           </div>
           <div class="form-group">
             <div class="col-md-2">
         <label for="email">Body Html:</label>
         </div>
         <div class="col-md-10">
         {!! Form::textarea('bodyhtml',null,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}
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
           {!! Form::text('url',null, array('class' => 'form-control')) !!}
              </div>
            </div>

          <div class="form-group">
           <div class="col-md-2">
         <label for="select">Slug/Url:</label>
            </div>
          <div class="col-md-10">
            <select name="visibility" class="form-control">
            <option value="visible">Youtube</option>
            <option value="etc">Youtube</option>
            <option value="etc">Youtube</option>
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
 <div class="col-md-12">
   <h2>Blog Post: Comments Needing Moderation </h2>
</div>
 <table class="table table-striped table-border border-form">
 <thead>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Comments</th>
    <th>Date</th>
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

 <div class="col-md-12">
   <h2>Blog Post: Comments</h2>
 </div>
 <table class="table table-striped table-border border-form">
 <thead>
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Comments</th>
    <th>Date</th>
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
    @include('includes.footer');
