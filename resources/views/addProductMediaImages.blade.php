@include('includes.head')
<style>
.none{ display: none;}
</style>
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 ">
</div>
<div class="col-md-12"><h2 class="pb50">Products & Kits : Add Media</h2></div>


         {!! Form::open(array('url' => 'addmedia','files'=>'true','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="text">name:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('name',null, array('class' => 'form-control')) !!}
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="text">type:</label>
  </div>
  <div class="col-md-10">
    <select name="type" id="videotype" class="form-control">

    <option value="images">Select Media Type</option>
    <option value="images">Image</option>
    <option value="video">Video</option>
    <option value="sound">Sound</option>

    </select>

        </div>
         </div>
          <div class="form-group" id="imageInput" style="display:none;">
         <div class="col-md-2">
     <label for="email">Product Images:</label>
  </div>
  <div class="col-md-10">
  {!! Form::file('image') !!}
            </div>
          </div>


          <div class="form-group" id="videoInput" style="display:none">
         <div class="col-md-2">
     <label for="email">Product Videos:</label>
  </div>
  <div class="col-md-10">
<!--    <input type="text" id="videoInput" style="display:none;" class="form-control"> -->
        {!! Form::url('videoInput',null, array('class' => 'form-control')) !!}
            </div>
          </div>

          <div class="form-group" id="soundInput" style="display:none">
         <div class="col-md-2">
     <label for="email">Sound Url:</label>
  </div>
  <div class="col-md-10">
  <!--    <input type="text" id="videoInput" style="display:none;" class="form-control"> -->
        {!! Form::url('soundInput',null, array('class' => 'form-control')) !!}
            </div>
          </div>


          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Order:</label>
          </div>
          <div class="col-md-10">
          {!! Form::text('order',null, array('class' => 'form-control')) !!}
             </div>
           </div>

  <div class="form-group">
 <div class="col-md-offset-2 col-md-10">
{!! Form::submit('Save', array('class' => 'btn btn-success')); !!}
{!! Form::submit('Cancel', array('class' => 'btn btn-warning')); !!}
</div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
<script type="text/javascript">
$('#videotype').on('change',function(){
      if($(this).val()==="images"){
      $("#imageInput").show();
      $("#videoInput").hide();
      $("#soundInput").hide();

      }
      else if($(this).val()==="video"){
        $("#videoInput").show();
        $("#imageInput").hide();
        $("#soundInput").hide();

      }
      else if($(this).val()==="sound"){
      $("#soundInput").show();
      $("#imageInput").hide();
      $("#videoInput").hide();

      }

  });

</script>

    @include('includes.footer');
