@include('includes.head') <Style>
.border-form{    border: 1px solid #d2d2d2 !important;}.btn-success {
    background-color: #5cb85c !important; color:white !important; }
 .form-control{ border:1px solid rgba(204,204,204,1) !important;}.form-control, .form-group .form-control{ background-image: linear-gradient(white,white),linear-gradient(white,white) !important;}
 .form-control:focus{ border:1px solid rgba(0,0,153,1) !important;}.pb10{ padding-bottom:20px;}
 .form-group input[type=file]{ opacity: 1; min-height:20px;}

 </style>

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Products & Kits:add Product: Content Sections</h2></div>
</div>
 <div class="col-md-12 pb50">
<h2><a href="#overview">Overview</a> | <a href="#contentsection">Content Section</a> | <a href="#productimages">Product Images</a> </h2>
 </div>
 <div class="col-md-2 col-md-offset-10"><a href="http://localhost/suzeroman/public/addsection"><button type="button" class="btn btn-success">add Section </button></div>

        <?php
         echo Form::open(array('addcontent' => 'addslides','class' => 'form-horizontal'));
           ?>
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
