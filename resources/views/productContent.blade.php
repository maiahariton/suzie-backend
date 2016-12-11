@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Products & Kits:add Product: Content Section</h2></div>
</div>
 <div class="col-md-12 pb50">
<h2><a href="#overview">Overview</a> | <a href="#contentsection">Content Section</a> | <a href="#productimages">Product Images</a> </h2>
 </div>

        <?php
         echo Form::open(array('url' => 'addslides','class' => 'form-horizontal'));
           ?>

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
    	  <?php  echo Form::text('Title',null, array('class' => 'form-control')); ?>
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Headlines:</label>
  </div>
  <div class="col-md-10">
         {!! Form::text('headlines', null, array('class' => 'form-control ')) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Sales Message:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('salesmessage',null, array('class' => 'form-control ')) !!}
            </div>
          </div>

            <div class="form-group">
       <div class="col-md-2">
     <label for="email">Offer Expires:</label>
  </div>
        <div class="col-md-10">
          {!! Form::text('offerexpire',null, array('class' => 'form-control ')) !!}
           </div>
        </div>
        <div class="form-group">
         <div class="col-md-2">
     <label for="email">List Price:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('listprice',null, array('class' => 'form-control ')) !!}
      </div>
          </div>
          <div class="form-group">
           <div class="col-md-2">
       <label for="email">Sales Price:</label>
    </div>
    <div class="col-md-10">
      {!! Form::text('salesprice',null, array('class' => 'form-control ')) !!}
        </div>
            </div>
            <div class="form-group">
             <div class="col-md-2">
         <label for="email">Magento Sku:</label>
      </div>
      <div class="col-md-10">
        {!! Form::text('magentosku',null, array('class' => 'form-control ')) !!}
          </div>
              </div>
              <div class="form-group">
               <div class="col-md-2 text-left">
           <label for="email">Magento Add to Cart URL:</label>
        </div>
        <div class="col-md-10">
          {!! Form::text('magentoaddtocarturl',null, array('class' => 'form-control ')) !!}
            </div>
                </div>
                <div class="form-group">
                 <div class="col-md-2">
             <label for="email">Amazon Url:</label>
          </div>
          <div class="col-md-10">
            {!! Form::text('amazon url',null, array('class' => 'form-control ')) !!}
              </div>
                  </div>
                  <div class="form-group">
                   <div class="col-md-2">
               <label for="email">Product Images:</label>
            </div>
            <div class="col-md-10">
              {!! Form::file(null) !!}
                </div>
                    </div>
                    <div class="form-group">
                     <div class="col-md-2">
                 <label for="email">Login Url:</label>
              </div>
              <div class="col-md-10">
                {!! Form::text('loginurl',null, array('class' => 'form-control ')) !!}
                  </div>
                      </div>
                      <div class="form-group">
                       <div class="col-md-2">
                   <label for="email">Activation Url:</label>
                </div>
                <div class="col-md-10">
                  {!! Form::text('activationurl',null, array('class' => 'form-control ')) !!}
                    </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-2">
                     <label for="email">Product Description Url:</label>
                  </div>
                  <div class="col-md-10">
                    {!! Form::textarea('productdescriptionurl',null,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}

                      </div>
                          </div>

          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save', array('class' => 'btn btn-success')); !!}
		</{!! Form::submit('Cancel', array('class' => 'btn btn-success')); !!}
  </div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
