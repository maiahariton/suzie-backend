@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2> Suze's :About</h2></div>
</div>
<img src=''></img>
        <?php
         echo Form::open(array('url' => 'addquote','class' => 'form-horizontal'));
           ?>

           <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addfeaturedimg"><button type="button" class="btn btn-success">add Featured Images </button></a></div>
             <table class="table table-striped table-border border-form">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Wils & trust</td>
            <td><a href="#edit">edit</a></td>

                   </tr>

                     <tr>
                       <th scope="row">2</th>
                       <td>Home Ownership</td>

                       <td><a href="#edit">edit</a></td>

                          </tr>

            </tbody>
          </table>


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

           <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addcallouts"><button type="button" class="btn btn-success">add Callouts</button></a></div>
             <table class="table table-striped table-border border-form">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Wils & trust</td>
            <td><a href="#edit">edit</a></td>

                   </tr>

                     <tr>
                       <th scope="row">2</th>
                       <td>Home Ownership</td>

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
