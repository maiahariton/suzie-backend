@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12 pb50">
 	<h2>Resrouces/h2>
</div>

 <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addresources"><button type="button" class="btn btn-success">add Product </button></a></div>
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




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
