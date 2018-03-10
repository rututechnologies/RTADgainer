<form method="post" id="save_new_accounts_billing_form">
{{csrf_field()}}
  <div class="row">
    <div class="col-md-12">
      <div class="ibox">
        <div class="ibox-title bg-muted">
          <strong>General Billing Details</strong>
          <div class="ibox-tools pull-right">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>
        
        <div class="ibox-content">
          <div class="row">
            <div class="form-group col-md-6">
              <label>Billing Type</label>
              <select class="form-control" id="billing_type" name="billing_type">
                <option>MAIL-IN</option>
                <option>AUTOPAY CC</option>
                <option>CALL IN CC</option>
              </select>
            </div>
          
            <div class="form-group col-md-6">
              <label>Billing Date</label>
              <input type="date" class="form-control" name="billing_date" id="billing_date" placeholder="Enter Billing Date Here">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label>Name On Card</label>
              <input placeholder="Enter Name on the card" type="text" class="form-control" name="name_on_card" id="name_on_card">
            </div>
            <div class="form-group col-md-6">
              <label>Card Number</label>
              <input placeholder="Enter Card Number Here" type="text" class="form-control" name="card_number" id="card_number">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label>Expiration</label><br>
              <label>MM:</label>
              {!! Form::selectMonth('month','expiration_month',['class'=>'form-control']) !!}

             <!--  <select class="form-control" id="expiration_month" name="expiration_month">

                <option>january</option>
                <option>february</option>
              </select> -->
              <label>YY:</label>
              {!! Form::selectRange('expiration_year', '1900', '2018',['class'=>'form-control']) !!}

             <!--  <select class="form-control" id="expiration_year" name="expiration_year">
                <option>2017</option>
                <option>2018</option>
              </select>
 -->

            </div>
            <div class="form-group col-md-6">
              <label>CVV Security Code</label>
              <input placeholder="Enter CVV Security Code here" type="text" class="form-control" name="cvv" id="cvv">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Billing address details section start -->
  <div class="row">
    <div class="col-md-12">
      <div class="ibox">
        <div class="ibox-title bg-muted">
          <strong>Billing Address Details</strong>
          <div class="ibox-tools pull-right">
            <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>
        
        <div class="ibox-content">
          <div class="row">
            <div class="form-group col-md-6">
              <label>Billing Address</label>
              <!-- <label class="checkbox-inline"><input type="checkbox" value="">Billing Address Same as Location</label> -->
              <input id="address_as_location" type="text" name="address_as_location" required="true" class="form-control col-md-6">
            </div>

            <div class="form-group col-md-6">
              <label>Billing Address 1</label>
              <input type="text" name="billing_address1" id="billing_address1" class="form-control col-md-6">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label>Billing City<span class="required_inputs_star text-danger">*</span></label>
              <input id="city" type="text" name="city" required="true" class="form-control col-md-6">
            </div>

            <div class="form-group col-md-6">
              <label>Billing State</label>
              <input type="text" name="state" id="state" class="form-control col-md-6">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label>Billing Zip</label>
              <input type="text" name="zip" id="zip" class="form-control col-md-6">
            </div>
            
            <div class="form-group col-md-6">
              <label>Billing Country</label>
              <select class="form-control" id="country" name="country">
                <option>--Select Country--</option>
                <option>India</option>
                <option>America</option>
                <option>Japan</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-md-6">
    </div>
    <input class="btn btn-sm btn-primary pull-right" type="submit" value="Save" style="margin-right: 14px;" name="Save">
  </div>
</form>