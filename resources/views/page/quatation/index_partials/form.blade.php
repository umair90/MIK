<div class="container margin_60">
        	<div class="row">
                <div class="col-md-12">
                        {!! Form::open(array('url' => 'api/v1/quotation', 'method' => 'POST', 'class' => 'add_bottom_30', 'id' => 'custom')) !!}
                        <fieldset title="Step 1">
                        <legend>Choose a Service</legend>
                        <div class="row">
                        <div id="accordion">
                                <div class="panel-group panel col-md-4">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="collapse('one');">Economic Service<i class="indicator icon_plus_alt2 pull-right"></i></a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse">
                                    <li class="list-group-item">Transpotation</li>
                                </div>
                                </div>
                                <div class="panel-group panel col-md-4">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" onclick="collapse('two');" >Standard Service<i class="indicator icon_plus_alt2 pull-right"></i></a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse">
                                    <li class="list-group-item">Transpotation</li>
                                    <li class="list-group-item">Loading</li>
                                    <li class="list-group-item">Unlaoding</li>  
                                </div>
                                </div>
                                <div class="panel-group panel col-md-4">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="list-group-item" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" onclick="collapse('three');">Premium Service<i class="indicator icon_plus_alt2 pull-right"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse">
                                        <li class="list-group-item">Transpotation</li>
                                        <li class="list-group-item">Loading</li>
                                        <li class="list-group-item">Unlaoding</li>
                                        <li class="list-group-item">Packing</li>
                                        <li class="list-group-item">Unpacking</li>
                                 </div>
                                 </div>
                        </div>
                       </div><!-- End row-->

                       <div id="collapseAlertOne" role="tabpanel" class="collapse">
                                  <div class="alert alert-info" role="alert" id="myAlert1">
                                          <strong>Only Transpotation (Cheapest Option!) </strong> We drive, customers load and unload. Before the drivers arrival please ensure that all items are brought down to the ground floor.
                                  </div>
                       </div>
                       <div id="collapseAlertTwo" role="tabpanel" class="collapse">
                                  <div class="alert alert-info" role="alert" id="myAlert2">
                                          <strong>Need Help?</strong> The driver will help you to load and unload. This service is good for customers who need help to load and unload their items. You and the driver will load
										  and unload together.
                                  </div>
                       </div>
                       <div id="collapseAlertThree" role="tabpanel" class="collapse">
                                  <div class="alert alert-info" role="alert" id="myAlert3">
                                          <strong>Need Full service?</strong>  We pack, load, unload and unpack. This service is good for customers who do not have time to prepare for moving.
                                  </div>
                       </div>

                    </fieldset><!-- End Step one -->
                        <fieldset title="Step 2">
                          <legend>Personal info</legend>
                          <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>First name</label>
                                        {!! Form::text('firstname_quote', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        {!! Form::text('lastname_quote', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        {!! Form::text('email_quote', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control email required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        {!! Form::text('phone_quote', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control number required')) !!}
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                	<div class="form-group">
                                        <label>Moving Date</label>
                                        {!! Form::text('date_quote', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required', 'id' => 'date_quote')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                		<label>Passengers</label>
	                                    <div class="form-group">
                                            {!! Form::select('passengers', 
                                                          array('' => 'Select Passengers') + $pessengers, null, 
                                                          ['class' => 'form-control required']) !!}
	                                    </div>
	                            <div class="alert alert-info" role="alert">If the delivery destination is greater than 20Km, MIK recommends that only 1 passenger rides with the driver.</div>
                                </div>
                            </div><!-- End row -->
                            <hr>
                        </fieldset><!-- End Step two -->
                        
                        <fieldset title="Step 3" >
                          <legend>Address</legend>
                          <h4>Pickup Address</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        {!! Form::text('pickup_addr', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Building Name</label>
                                        {!! Form::text('pickup_building', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Floor</label>
                                        {!! Form::select('pickup_floors', 
                                                          array('' => 'Select Floor') + $floors, null, 
                                                          ['class' => 'form-control required']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Room Number</label>
                                        {!! Form::text('pickup_room_no', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control number required')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Elevator</label>
                                        {!! Form::select('pickup_elevator', 
                                                          array('' => 'Select Elevator') + $elevators, null, 
                                                          ['class' => 'form-control required']) !!}
                                    </div>
                                </div>
                            </div><!--End row -->
                            <hr>
                          <h4>Delivery Address</h4>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    {!! Form::text('delivery_addr', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required')) !!}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Building Name</label>
                                    {!! Form::text('delivery_building', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control required')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Floor</label>
                                    {!! Form::select('delivery_floors', 
                                                          array('' => 'Select Floor') + $floors, null, 
                                                          ['class' => 'form-control required']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Room Number</label>
                                        {!! Form::text('delivery_room_no', null, 
                                                                        array(null, 
                                                                              'class'=>'form-control number required')) !!}
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Elevator</label>
                                    {!! Form::select('delivery_elevator', 
                                                          array('' => 'Select Elevator') + $elevators, null, 
                                                          ['class' => 'form-control required']) !!}
                                </div>
                            </div>
                        </div><!--End row -->
                        <div class="row">
                            <div class="col-md-10">
	                            <div class="alert alert-info" role="alert">If you have an additional information, please provide the details in the notes section.</div>
	                        </div>
                        </div>
                        </fieldset><!-- End Step Three -->
                        
                        <fieldset title="Step 5" >
                          <legend>Items & Notes</legend>
                          <h5 style="margin-top:0">Select items</h5>
                          <p class="add_bottom_45">From below list of items, please select an item and number of items that you want to move</p>
                          <div class="row">
                                @foreach($items as $item)
                                   <div class="col-xs-12 col-md-2">
                                    <div class="thumbnail">
                                      <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                      <div style="text-align:center;">
                                            <div style="display:inline-block;width: 100%;">
                                                    <div class="caption">
                                                    <h6 style="min-height:40px;">{{ $item->title }}</h6>
                                                    <div class="form-group">
                                                    {!! Form::select($item->id.'___quantity',
                                                          $quantities, null, 
                                                          ['class' => 'form-control thumbnail_select']) !!}
                                                    </div>
                                                  </div>
                                            </div>
                                            </div>
                                   </div>
                                   </div>
                               @endforeach
                               
                           </div> <!-- End Row -->
                          <legend>Message</legend>
                          <div class="form-group">
                            {!! Form::label('Write your notes or message') !!}
                             {!! Form::textarea('message_quote', null, 
                                                                            array(null, 
                                                                                  'class'=>'form-control required',
                                                                                  'style' => 'height: 100px;')) !!}
						                 </div>
                          <p>
                              {!! Form::checkbox('terms', 'Yes') !!}
                              <a data-toggle="modal" data-target="#term_and_conditions" href="#" >I accept terms and condition </a>
                          </p>
                        </fieldset><!-- End Step six -->
                        
                        {!! Form::submit('Finish', 
                                            array('class'=>'finish')) !!}
                      {!! Form::close() !!}
             
                </div><!-- End col-md-9 -->
                
            </div><!-- End row -->
        </div><!-- End container -->