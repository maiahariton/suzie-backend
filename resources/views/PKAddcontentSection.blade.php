@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12 "><h2>Products & Kits:add Product: Content Sections</h2></div>
</div>
 @include('includes.product-navbar-1')
 <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addsection"><button type="button" class="btn btn-success">add Section </button></a></div>


        {!! Form::open(array('addcontent' => 'addslides','class' => 'form-horizontal')) !!}

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


         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
