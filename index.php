
<!DOCTYPE html>
<html>
<head>

<!--   <base href="http://survey.theporter.in/" >
 -->



  <link href='https://fonts.googleapis.com/css?family=Dosis:300,400,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <script src='https://www.google.com/recaptcha/api.js'></script>

  <script>
    pageType = "admin-place-order" ;
  </script>


  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link data-turbolinks-track="true" href="css/file1.css" media="all" rel="stylesheet" />

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
  

  <script src="js/msjs.js"></script>

  <script src="js/js1.js"></script>
    <script src="js/js2.js"></script>


</head>
<body>
<header class="navbar navbar-static-top swatch-blue-white" id="masthead">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" data-original-title="" title="">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/administrators/login_home">Mohit</a>

    </div>
    <nav class="collapse navbar-collapse main-navbar" role="navigation">
      <div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="javascript:void(0)">ashokkyadav1994@gmail.com</a></li>
          <li><a class="dropdown-toggle" href="/administrators/new_administrator">New Administrator</a>
          <li><a class="dropdown-toggle" href="/administrators/edit">Edit Password</a>
          </li>
          <li><a class="dropdown-toggle" href="/administrators/new_employee">New Employee</a>
          </li>
          <li><a class="dropdown-toggle" href="/administrators/driver_form_option">Edit Driver</a>
          </li>
          <li><a class="dropdown-toggle" href="/administrators/new_driver">New Driver</a>
          <li><a data-method="delete" href="/administrators/sign_out" rel="nofollow">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<div id="content" role="main">
  <!-- Content Div start-->


</head>
<body>

  

<div class="crm_forms common_form">
<section class="section section-nopadding swatch-breadcrumb-blue clearfix">

        <nav class="breadcrumb">
          <span><a href="/administrators/login_home">Home</a></span>
          <span class="last">Place Order</span>
        </nav>

</section>


<div class="form-container">
  <form accept-charset="UTF-8" action="/place_order_thank_you" class="new_order" id="place_order" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="5en/L1sM0IYBHk5ecouyCW8kHgVCxXwP0yLr755J2wA=" /></div>

    <div class="outer-common" id="profile_section_top">

      <h1 class="alert alert-info place-order-section-heading"> Guest </h1>
  <div class="content-common">
    <div><span class='error'></span></div>
    <div class="disabled-fields">
      <div class="inputBlock">
        <label for="first_name">First Name:</label>
        <input id="first_name" name="first_name" placeholder="First Name" type="text" />
      </div>

      <div class="inputBlock">
        <label for="last_name">Last Name:</label>
        <input id="last_name" name="last_name" placeholder="Last Name" type="text" />
      </div>

      <div class="inputBlock">
        <label for="order_customer_mobile">Mobile:</label>
        <input id="order_customer_mobile" name="order[customer_mobile]" placeholder="phone" type="text" validation_required="req, numeric, maxlength=11,minlength=10" value="9987911337" />
        <span style='display: block' id='place_order_order_customer_mobile_errorloc' class='error'></span>
      </div>

      <input id="order_customer_id" name="order[customer_id]" type="hidden" value="4544" />

      <div class="inputBlock">
        <input name="order[is_premium]" type="hidden" value="0" /><input id="order_is_premium" name="order[is_premium]" style="width:auto !important;" type="checkbox" value="1" /> <b> &nbsp; Premium Customer</b>
      </div>

      <div class="extra_sms_mobiles_div clearfix">
        <div id="sms_number_list">
        </div>
        <button type="button" class="btn btn-primary" id="add_sms_numbers">Add Extra Number For Sms</button>
      </div>



          <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#completed_orders" aria-controls="completed_orders" role="tab" data-toggle="tab">Completed
                  Orders</a></li>
              <li role="presentation">
                <a href="#saved_orders" aria-controls="saved_orders" role="tab" data-toggle="tab">Saved Queries</a></li>
              <li role="presentation">
                <a href="#live_orders" aria-controls="live_orders" role="tab" data-toggle="tab">Live Orders</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="completed_orders">

                <div class='last-order-details'>
                  <p class='last-order-heading'> Order Details </p>
                          <p class='last-order-row'>
                            <span class='key'><input type='radio' name='order_id' value=CRN70460333 class='order-radio'></span>
                            <span class='from'>Marol Naka, Marol Maroshi Road, Andheri East, Mumbai, Maharashtra, India</span>
                            <span class='to'>Andheri East, MIDC Industrial Estate, Mumbai, Maharashtra, India</span>
                            <span class='vehicle'>Tata Ace</span>
                          </p>
                          <p class='last-order-row'>
                            <span class='key'><input type='radio' name='order_id' value=CRN66883292 class='order-radio'></span>
                            <span class='from'>Asalpha Link Road, Asalpha, Mumbai, Maharashtra, India</span>
                            <span class='to'>Bandra Kurla Complex, Mumbai, Maharashtra, India</span>
                            <span class='vehicle'>Tata Ace</span>
                          </p>
                          <p class='last-order-row'>
                            <span class='key'><input type='radio' name='order_id' value=CRN83047355 class='order-radio'></span>
                            <span class='from'>Bhatwadi, Ghatkopar West, Mumbai, Maharashtra, India</span>
                            <span class='to'>Marol, Mumbai, Maharashtra, India</span>
                            <span class='vehicle'>Tata Ace</span>
                          </p>
                          <p class='last-order-row'>
                            <span class='key'><input type='radio' name='order_id' value=CRN10056791 class='order-radio'></span>
                            <span class='from'>Ghatkopar West, Mumbai, Maharashtra, India</span>
                            <span class='to'>Kajupada, Mumbai, Maharashtra, India</span>
                            <span class='vehicle'>Tata Ace</span>
                          </p>
                          <p class='last-order-row'>
                            <span class='key'><input type='radio' name='order_id' value=CRN45653103 class='order-radio'></span>
                            <span class='from'>Sakinaka, Safed Pul, Mumbai, Maharashtra, India</span>
                            <span class='to'>Chakala Cigarette Factory, Sahar Road, Andheri East, Mumbai, Maharashtra, India</span>
                            <span class='vehicle'>Tata Ace</span>
                          </p>
                </div>
              </div>


              <div role="tabpanel" class="tab-pane" id="saved_orders">
                <div class='last-order-details'>
                  <p class='last-order-heading'> Order Details </p>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="live_orders">

                <div class='last-order-details'>
                  <p class='last-order-heading'> Order Details </p>
                          <p class='last-order-row'>
                            <span class='key'><input type='radio' name='order_id' value=CRN89170531 class='order-radio'></span>
                            <span class='from'>90 Feet Road, Ghatkopar East, Mumbai, Maharashtra, India</span>
                            <span class='to'>Oshiwara Police Station, Andheri West, Mumbai, Maharashtra, India</span>
                                <span class='vehicle'>Tata Ace</span>
                          </p>
                </div>
              </div>
            </div>
          </div>

    </div>
  </div>

</div>

    <div class="outer-common" id="location_section">
  <h1 class="alert alert-info place-order-section-heading" id='location-heading'> Location </h1>

  <div class="address-nature-of-goods-block content-common ">


     <div class="from-to-block">

        <div class="left-block">

          <div class="inputBlock cityBlock">
            <label for="order_geo_region_id">Region </label>
            <select id="order_geo_region_id" name="order[geo_region_id]"><option value="">Select Region</option>
<option value="2">Delhi NCR</option>
<option selected="selected" value="1">Mumbai</option>
<option value="3">Bangalore</option></select>
          </div>

          <div class='from_address_landmark_block inputBlock'>

            <label for="order_from_address_landmark" style="margin-top:10px;">From Address Landmark: </label>
            <div style="display: inline-block;vertical-align: top">
              <input class="wrong-input dynamic-border-input" id="from_address_landmark" name="order[from_address_landmark]" placeholder="From landmark" type="text" validation_required="req" />
              <input id="from_address_lat" name="order[from_address_lat]" type="hidden" />
              <input id="from_address_long" name="order[from_address_long]" type="hidden" />
              <input id="from_address_state" name="from_address_state" type="hidden" />
              <div>
                <span style='' id='place_order_from_address_landmark_errorloc' class='error'></span>
                <span style='' id='place_order_from_address_lat_errorloc' class='error'></span>
                <span style='' id='place_order_from_address_long_errorloc' class='error'></span>
              </div>
            </div>
          </div>
          <div class='to_address_landmark_block inputBlock'>

            <label for="order_to_address_landmark" style="margin-top:10px;">To Address Landmark: </label>

            <div style="display: inline-block;vertical-align: top">
              <input class="wrong-input dynamic-border-input" id="to_address_landmark" name="order[to_address_landmark]" placeholder="To landmark" type="text" validation_required="req" />
              <input id="to_address_lat" name="order[to_address_lat]" type="hidden" />
              <input id="to_address_long" name="order[to_address_long]" type="hidden" />
              <input id="order_source" name="order[source]" type="hidden" value="tele_agent" />
              <input id="order_tele_agent_id" name="order[tele_agent_id]" type="hidden" value="8" />
              <input id="to_address_state" name="to_address_state" type="hidden" />
              <div>
                <span style="" id='place_order_to_address_landmark_errorloc' class='error'></span>
                <span style="" id='place_order_to_address_lat_errorloc' class='error'></span>
                <span style="" id='place_order_to_address_long_errorloc' class='error'></span>
              </div>
            </div>
          </div>

          <div id="waypoints">
          </div>

          <p align="left"><a class="btn btn-primary" id="add_waypoint" href="javascript:void(0)" onClick="addWaypoints('waypoints')">Add Waypoint</a></p>
          <p align="left">
            <a class="btn btn-info refresh_vehicles_and_fare"  id="refresh_vehicles_and_fare" href="javascript:void(0)" onclick="req_dist();" >
              Refresh For Vehicles And Fare
            </a>
          </p>

          <div class="dont_show" id='return_fare_div'>
            <input name="order[is_return]" type="hidden" value="0" /><input id="order_is_return" name="order[is_return]" style="width:auto;" type="checkbox" value="1" /> <b> &nbsp; Return Fare</b>
          </div>
        </div>

        <div class="right-block">
          <div class="map-container" style="width:650px;height:400px;">
            <div id="map-canvas" class="dashboard-map"></div>
          </div>
        </div>
     </div>
  </div>
</div>

<div class="modal fade" id="warning_modal_crm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Warning</h4>
      </div>
      <div class="modal-body">
        <p class="alert alert-danger" id="reminder_message"> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<input id="waypoint_count" name="waypoint_count" type="hidden" value="0" />




    <input id="order_fare_id" name="order_fare[id]" type="hidden" />
    <input id="order_fare_order_id" name="order_fare[order_id]" type="hidden" />
    <input id="order_fare_fare_type" name="order_fare[fare_type]" type="hidden" />
    <input id="order_fare_base_fare" name="order_fare[base_fare]" type="hidden" value="0.0" />
    <input id="order_fare_waiting_time" name="order_fare[waiting_time]" type="hidden" value="0.0" />
    <input id="order_fare_waiting_charge" name="order_fare[waiting_charge]" type="hidden" value="0.0" />
    <input id="order_fare_travel_distance" name="order_fare[travel_distance]" type="hidden" value="0.0" />
    <input id="order_fare_distance_charge" name="order_fare[distance_charge]" type="hidden" value="0.0" />
    <input id="order_fare_travel_duration" name="order_fare[travel_duration]" type="hidden" value="0.0" />
    <input id="order_fare_travel_duration_charge" name="order_fare[travel_duration_charge]" type="hidden" value="0.0" />
    <input id="order_fare_n_waypoints" name="order_fare[n_waypoints]" type="hidden" value="0" />
    <input id="order_fare_waypoint_charge" name="order_fare[waypoint_charge]" type="hidden" value="0.0" />
    <input id="order_fare_road_tax" name="order_fare[road_tax]" type="hidden" value="0.0" />
    <input id="order_fare_toll" name="order_fare[toll]" type="hidden" value="0.0" />
    <input id="order_fare_travel_fare" name="order_fare[travel_fare]" type="hidden" value="0.0" />
    <input id="order_fare_n_overnights" name="order_fare[n_overnights]" type="hidden" value="0" />
    <input id="order_fare_overnight_charge" name="order_fare[overnight_charge]" type="hidden" value="0.0" />
    <input id="order_fare_premium_discount" name="order_fare[premium_discount]" type="hidden" value="0.0" />
    <input id="order_fare_return_discount" name="order_fare[return_discount]" type="hidden" value="0.0" />
    <input id="order_fare_fare" name="order_fare[fare]" type="hidden" value="0.0" />
    <input id="order_fare_created_at" name="order_fare[created_at]" type="hidden" />
    <input id="order_fare_updated_at" name="order_fare[updated_at]" type="hidden" />
    <input id="order_fare_states_traversed" name="order_fare[states_traversed]" type="hidden" />
    <input id="order_fare_labor_charge" name="order_fare[labor_charge]" type="hidden" />
    <input id="order_fare_loading_time" name="order_fare[loading_time]" type="hidden" />
    <input id="order_fare_unloading_time" name="order_fare[unloading_time]" type="hidden" />
    <input id="order_fare_referral_discount" name="order_fare[referral_discount]" type="hidden" value="0.0" />
    <input id="order_fare_coupon_discount" name="order_fare[coupon_discount]" type="hidden" value="0.0" />

    <div class="outer-common" id='vehicle_container'>
  <h1 class="alert alert-info place-order-section-heading"> Vehicle Type </h1>

  <div class="vehicle_outer_block content-common">

    <p align="left">
      <a class="btn btn-info refresh_vehicles_and_fare"  href="javascript:void(0)" onclick="req_dist();" >
        Refresh For Vehicles And Fare
      </a>
    </p>
<div id="mohit" ></div>

    <div class="nature-of-goods-block">
      <div class="inputBlock">
        <label for="order_business_types_id">Nature of goods:</label>
        <select class="wrong-input dynamic-border-input" id="order_business_types_id" name="order[business_types_id]"><option value="">Please select</option>
<option value="1">Timber, Furniture and Veneer</option>
<option value="2">Stone, Ceremics and Sanitory</option>
<option value="3">Utensils, Metals &amp; Scrap</option>
<option value="4">Paint, Plastics &amp; Polymers</option>
<option value="5">Services</option>
<option value="6">Electrical &amp; Electronics</option>
<option value="7">Textiles &amp; Garments</option>
<option value="8">Paper, Printing and Packaging</option>
<option value="9">Machine and Tools</option>
<option value="10">Others</option>
<option value="11">Household Items</option></select>
        <div class="inputBlock" id="business_type_description_div" style='display: none'>
          <label for="order_business_type_description">Business Description</label>
          <input class="wrong-input dynamic-border-input" id="order_business_type_description" name="order[business_type_description]" placeholder="Business Description" type="text" validation_required="" />
          <span style="margin-left: 170px; display: block" id='place_order_order_business_type_description_errorloc' class='error'></span>
        </div>
      </div>

      <div class="inputBlock">
        <label for="order_quantity_of_goods">Quantity :</label>
        <input class="wrong-input dynamic-border-input" id="order_quantity_of_goods" name="order[quantity_of_goods]" placeholder="kgs , volume or No. of boxes" type="text" validation_required="req" />
        <span style="margin-left: 170px; display: block" id='place_order_order_quantity_of_goods_errorloc' class='error'></span>
      </div>

    </div>
    <div style="position: relative; padding-bottom: 126px">
    <div class="vehicle_selection_block">
    <br/>
    <span id='place_order_vehicle_id_errorloc' class='error'></span>
    </div>
    <div class="confirm_vehicle_block">

      <span class="close_confirm_vehicle_block"> <i class="fa fa-close"></i> </span>

      <div class="vehicle_details">
        <div class="left-details confirm-vehicle-section">
          <div class="vehicle_mini-details">
            <div class="vehicle_name">

            </div>
            <div class="vehicle_icon">

            </div>



            <div class="expected_time_arrival">
              <span></span>
            </div>

            <div class="vehicle_fare">
              <span></span>
            </div>
            <div class="vehicle_details">
              <div class="capacity">
              </div>
              <div class="size">

              </div>
            </div>

            <div class="num_of_vehicles_available alert alert-success" style="margin-top: 20px;font-weight: bold">

            </div>

          </div>

        </div>
        <div class="fare-breakup confirm-vehicle-section">
          <div class="fare-break-up-sections" style="width: 150px;margin-right: 0px;">
            <p class="estimated_fare"></p>
            <span> ( Estimated Fare ) </span>
            <p class="travel_distance"></p>
            <span> ( Estimated Distance ) </span>
            <p class="total_duration"></p>
            <span> ( Estimated Duration ) </span>

          </div>
          <div class="fare-break-up-sections">
            <h2> Fare BreakUp</h2>

            <p class="fare-details-each">
              <span class="field "> Base Fare </span>
              <span class="value base_fare">  </span>
            </p>
            <p class="fare-details-each">
              <span class="field "> Toll Tax </span>
              <span class="value toll_tax">  </span>
            </p>
            <p class="fare-details-each">
              <span class="field"> Road Tax </span>
              <span class="value road_tax">  </span>
            </p>
            <p class="fare-details-each">
              <span class="field"> Duration Charge </span>
              <span class="value duration_charge">  </span>
            </p>
            <p class="fare-details-each">
              <span class="field"> Base Km Charge </span>
              <span class="value base_km_charge">  </span>
            </p>
            <p class="fare-details-each">
              <span class="field"> Extra Km Charge </span>
              <span class="value extra_km_charge">  </span>
            </p>

            <div class="distance_split"></div>
          </div>

          <div class="fare-break-up-sections">
            <h2> Duration,Other Details </h2>

            <p class="fare-details-each">
              <span class="field "> Travel Duration </span>
              <span class="value travel_duration">  </span>
            </p>

            <p class="fare-details-each">
              <span class="field "> Waiting Time </span>
              <span class="value waiting_time">  </span>
            </p>

            <p class="fare-details-each" style="color: green">
              <span class="field "> Premium Discount </span>
              <span class="value premium_discount">  </span>
            </p>

            <p class="fare-details-each" style="color: green">
              <span class="field "> Return Discount </span>
              <span class="value return_discount">  </span>
            </p>

          </div>

        </div>
        <div class="book-actions confirm-vehicle-section" style="text-align: center">
          <div class="clearfix" style="margin-bottom: 30px">
            <button type="button" id="book_order_now" class="btn btn-primary btn-lg"> Book Now</button>
          </div>
          <div class="clearfix">
          <button type="button" id="book_order_later" class="btn btn-primary btn-lg"> Book Later</button>
          </div>
          <div class="pickup_time_block" style="margin-top: 20px;">
            <div class='inputBlock' style="width: auto;text-align: center;">
              <label for="order_pickup_time">Pick Up Date &amp; Time: </label>
              <input class="wrong-input dynamic-border-input" id="datetimepicker" name="order[pickup_time]" placeholder="2014/03/15 05:06" style="width:210px;text-align:center;" type="text" />
            </div>
          </div>

        </div>
      </div>
      <div class="terms_and_condition  " style='padding-top: 2px; padding-bottom: 5px;'>
        <h3 style = 'margin-bottom: 10px'> Terms and Conditions </h3>
          <div style="display: block">
          <input checked="checked" id="overloading" name="overloading" type="checkbox" validation_required="tick_checkbox" value="1" />
          <label for="overloading" style="margin-right: 30px; width: 250px">Oversize and Overloading not allowed</label>
          <span style="margin-left: 20px" id='place_order_overloading_errorloc' class='error'></span>
        </div>
        <div style="display: block">
          <input checked="checked" id="parking_charges" name="parking_charges" type="checkbox" validation_required="tick_checkbox" value="1" />
          <label for="parking_charges" style="margin-right: 30px; width: 250px">Parking Charges</label>
          <span style="margin-left: 20px" id='place_order_parking_charges_errorloc' class='error'></span>
        </div>
        <div style="display: block">
          <input checked="checked" id="toll_charges" name="toll_charges" type="checkbox" validation_required="tick_checkbox" value="1" />
          <label for="toll_charges" style="margin-right: 30px; width: 250px">Toll Charges</label>
          <span style="margin-left: 20px" id='place_order_toll_charges_errorloc' class='error'></span>
        </div>
        <div style="display: block">
          <input checked="checked" id="octroi" name="octroi" type="checkbox" validation_required="tick_checkbox" value="1" />
          <label for="octroi" style="margin-right: 30px; width: 250px">Octroi Charges</label>
          <span style="margin-left: 20px" id='place_order_octroi_errorloc' class='error'></span>
        </div>
      </div>
    </div>
    </div>
  </div>
  <input id="order_vehicle_id" name="order[vehicle_id]" type="hidden" validation_required="req" />
</div>

    <div class="outer-common" id="other_order_parameters">
<h1 class="alert alert-info place-order-section-heading"> Other Order Parameters </h1>

  <div class="other_details content-common">

    <div class="" style="display: inline-block;width: 640px;vertical-align: top">
      <div class='inputBlock' style="width: 620px;display: block">
        <input id="is_an_individual" name="is_an_individual" style="width:auto;margin-top:0px;" type="checkbox" value="individual" />&nbsp;&nbsp;
        <label for="is_an_individual" style="margin-bottom:0px;width:150px;">Is An Individual</label>
        <label for="company_name">Company Name</label>
        <input id="company_name" name="company_name" placeholder="Company Name" style="width:250px;" type="text" value="R S enterprises " />
      </div>


      <div class="inputBlock" style="width: 620px;display: block">
        <div style="display: inline-block; margin-top: 10px">
          <input id="acknowledgement" name="acknowledgement" style="width:auto;margin-top:0px;" type="checkbox" value="acknowledgement" />&nbsp;&nbsp;
          <label for="acknowledgement" style="margin-bottom:0px;width:150px;">Acknowledgement</label>
        </div>
        <div id='email-container' style="display: inline-block; vertical-align: top">
          <label for="email">Email</label>
          <input id="email" name="email" placeholder="email" style="width:250px;" type="text" validation_required="" />
        </div>
        <div>
          <span style="margin-left: 345px" id='place_order_email_errorloc' class='error'></span>
        </div>
    </div>
    </div>

    <div class="" style="display: inline-block;margin-left:50px;">

      <span style="display: inline-block;width: 170px;margin-top: 10px"> <b>Payment Type </b></span>

      <div class="inputBlock"  style="margin-top: 10px;margin-bottom: 35px;width: 330px;">
        <input checked="checked" id="order_postpaid_true" name="order[postpaid]" style="width:auto;margin-top:0px;" type="radio" value="true" />&nbsp;&nbsp;
        <label for="order_postpaid" style="margin-bottom:0px;width:130px;">Postpaid</label>

        <input id="order_postpaid_false" name="order[postpaid]" style="width:auto;margin-top:0px" type="radio" value="false" />&nbsp;&nbsp;
        <label for="order_postpaid" style="margin-bottom:0px;width:130px;">Prepaid</label>
      </div>

      <div class="inputBlock" style="display: block;">
        <label for="order_labourers">Labour:</label>
        <input id="order_labourers" name="order[labourers]" placeholder="Notify about labour requirements" type="text" validation_required="" value="0" />
        <span style="display: inline-block;width: 170px; margin-left: 170px" id='place_order_order_labourers_errorloc' class='error'></span>
      </div>

    </div>

    <div class="exact_address_details">
      <div id="full_from_address" style="display:block" class="full_address_container" >
          <div class='inputBlock'>
            <label for="order_from_address" style="margin-top:10px;">From Full Address:</label>
            <div style="display: inline-block;vertical-align: top">
              <input autocomplete="off" class="wrong-input dynamic-border-input" id="from_address" name="order[from_address]" placeholder="Enter Address" type="text" validation_required="req" />
              <span style="display: block" id='place_order_from_address_errorloc' class='error'></span>
            </div>
          </div>
          <input type="checkbox" value="copy_from_address"  data-copy-to="from_address" data-copy-from="from_address_landmark" class="copy_from_checkbox" /> Copy From Address Landmark
      </div>
      <div id="full_to_address" style="display: block" class="full_address_container">
          <div class='inputBlock'>
            <label for="order_to_address" style="margin-top:10px">To Full Address:</label>
            <div style="display: inline-block;vertical-align: top">
              <input class="wrong-input dynamic-border-input" id="to_address" name="order[to_address]" placeholder="Enter Address" type="text" validation_required="req" />
              <span style="display: block" id='place_order_to_address_errorloc' class='error'></span>
            </div>
          </div>
          <input type="checkbox" value="copy_from_address"  data-copy-to="to_address" data-copy-from="to_address_landmark" class="copy_from_checkbox" /> Copy To Address Landmark
      </div>


    </div>


  </div>
</div>

    <div class="outer-common">
      <h1 class="alert alert-info place-order-section-heading" id='preview-heading' style="cursor: pointer;"> Preview And Book </h1>
      <div class="content-common " id='preview-block'>
      </div>
    </div>
    <div class="col-md-12">
      <h1>Comments</h1>
      <textarea id="comment_place_order_body" name="comment_place_order_body">
</textarea>
    </div>
    <div class="content-common">
      <p style="text-align: center;margin-bottom: 20px;">
        <input checked="checked" id="assign_manually" name="assign_manually" type="checkbox" value="1" />
        <label for="assign_manually">Assign driver manually</label>
      </p>
      <p style="text-align: center;margin-bottom: 20px;">
      <input name="commit" type="submit" value="Submit" class="place_order_submit">
      </p>
      <p style="text-align: center;margin-bottom: 20px;" class="">
      <input name="commit" type="submit" id='save_for_later' value="Save For Later"
      class="place_order_submit"
      style='background-color:maroon'>
      </p>
    </div>
</form>
</div>
</div>



<section class="section section-nopadding swatch-breadcrumb-blue padding-blue">
</section>
<footer id="footer" role="contentinfo">
  <section class="section section-short has-top swatch-white-blue">
    <div class="container footer-details" style="color: #ffffff;">
      <div class="row">

        <div class="col-md-4 col-sm-6">
          <h4 style= "padding-bottom: 5px; margin-bottom: 5px; border-bottom: 1px solid; display: inline-block;">
          HEAD OFFICE  
          </h4>
          <div class="address"><div itemscope itemtype="http://schema.org/LocalBusiness">
             <span itemprop="name">RESFEBER LABS PVT LTD</span>
             <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
               <span itemprop="streetAddress">Third Floor, 107, Marol Cooperative Industrial Estate, Sir M.V. Road, Marol,</span>
               <span itemprop="addressLocality">Andheri East</span>,
               <span itemprop="addressRegion">Mumbai</span>
               <span itemprop="postalCode">400059</span>
             </div>
             <span style="display:none" itemprop="telephone">+91-22-6538-2222</span>
          </div> </div>
            <ul>
              <li><span class="fa fa-clock-o margin-right-5"></span> 24 x 7</li>
              <li><span class="fa fa-phone margin-right-5"></span>+91-22-6538-2222</li>
              <li><span class="fa fa-envelope-o margin-right-5"></span><a style="color: #ffffff" href="mailto:info@theporter.in">info@theporter.in</a></li>
            </ul>
          </div>
        </div>
      </div>


    </section>


    <section class="section section-copyright-padding">
      <div class="container">
        <div class="copyright">
          Copyright &copy; 2014 - 2015 - All Rights Reserved - <a href=”https://theporter.in/”>ThePorter.in </a><span class="footer-separator">|</span>
          <a href="/privacy_policy">Privacy Policy</a>
          <span class="footer-separator">|</span>
          <a href="/terms_of_service">Terms Of Services</a>
          <span class="footer-separator">|</span>
          <a href="/contact_us">Contact Us</a>
          <span class="footer-separator">|</span>
          <a href="/sitemap">Sitemap</a>
        </div>

      </div>
    </section>

  </footer>
  <div id="fb-root"></div>

<script>
  var options={valueNames:["name"]};
</script>
<script type="text/javascript">

</script>

<iframe style="height:0px;width:0px;" src="" id="caldistinframe" sandbox="allow-same-origin allow-scripts" ></iframe>
</body>
</html>


