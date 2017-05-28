<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <div class="below-slideshow">

         <div class="container">
          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="txt-block">


               <h1 class="head-line">Book A Place!</h1>

             </div>
           </div>
         </div>

       </div>
     </div>
     <!-- PARALLAX LIKE SECTION END-->
     <div class="container " >
       <div class="row ">

       </div>
       <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <hr />
          <div class="flexslider carousel">
            <ul class="slides">
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
              <li>
                <img src="assets/img/client.jpg" />
              </li>
            </ul>
          </div>
          <hr />
          <br />
        </div>
      </div>
    </div>
    <!-- BELOW SLIDESHOW SECTION END-->
    <!-- TAG HOME SECTION END-->
    <div class="just-sec">

      <div class="container">
       <dialog id="confirm-register" class="site-dialog" style='z-index: 10000;box-shadow: 3px 2px 10px'>
          <header class="dialog-header">
            <h1>Registered already?</h1>
          </header>
          <div class="dialog-content">
            <p>Please kindly login to retrieve your previous account information</p>
          </div>
          <div class="btn-group cf">
            <button class="btn btn-success" ng-click='haveAccount()'>Yes</button>
            <button class="btn btn-cancel" ng-click="dontHaveAccount()">No</button>

          </div>
</dialog>
          <form class="row" id="form">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="just-txt-div">

             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h3 class="head-line" style="font-weight:bold;font-size:22px;font-family: 'Open Sans Condensed'">Personal Information</h3>
              <br />
            </div>

            <div class="form-group">
              <input class="form-control reg-widget" id="fullname" name="fullname" ng-model='data.fullname' type="text" placeholder="Fullname" required="" data-parsley-length="[4, 100]"/>
            </div>
            <div class="form-group">
              <input class="form-control reg-widget" id="nsb" name="nsb" ng-model='data.nsbno' type="text" placeholder="NSB N0. (optional)" />
            </div>
            <div class="form-group">
              <input class="form-control reg-widget" id="school-name" name="school-name" ng-model='data.school' type="text" placeholder="School (optional)" />
            </div>
            <div class="form-group">

              <div class="form-group">
                <input class="form-control reg-widget" id="phone" name="phone"  ng-model='data.phone' type="tel" placeholder="Phone Number" required="" data-parsley-length="[10,15]" />
              </div>
              <div class="form-group">
                <input class="form-control reg-widget" id="emergency-phone" name="emergency-phone" ng-model='data.emergencyPhone' type="tel" placeholder="Emergency Phone Number" required=""/>
              </div>

            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h3 class="head-line" style="font-weight:bold;font-size:22px;font-family: 'Open Sans Condensed'">Login Information</h3>
              <br />
            </div>


            <input class="form-control reg-widget" id="email" name="email" ng-model='data.email' type="text" placeholder="Email" required="" data-parsley-type="email"/>
          </div>
          <div class="form-group">
            <input class="form-control reg-widget" id="password" name="password" ng-model='data.password' type="password" placeholder="Password" required="" />
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="just-txt-div">

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h3 class="head-line" style="font-weight:bold;font-size:22px;font-family: 'Open Sans Condensed';">Conference Information</h3>
             <br />
           </div>


           <div class="form-group">
             Special Meal Or Treatment <br>

             <div class="radio-inline">
              <label> <input type="radio" name="special" value='yes' ng-model='data.needSpecialTreatment' checked="">Yes</label>
            </div>
            <div class="radio-inline">
              <label><input type="radio" name="special" checked="checked" value="no" ng-model='data.needSpecialTreatment'  required="">No</label>
            </div>
            <div>
              <textarea class="form-control reg-widget" name="why-treatment" placeholder="Why special treatment?"
              data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.." data-parsley-validation-threshold="10" ng-model='data.specialTreatment'
              ></textarea>
            </div>
          </div>

          <div class="form-group">
           Will you need Accomodation? <br>

           <div class="radio-inline">
            <label> <input type="radio" name="accomodation" ng-model='data.accomodation' value="yes">Yes</label>
          </div>
          <div class="radio-inline">
            <label><input type="radio" name="accomodation" ng-model='data.accomodation' value="no" checked="checked">No</label>
          </div>
        </div>
        <div class="form-group">
          <label for="sel1">Payment Method:</label>
          <select class="form-control .reg-widget" id="payment-method" name="payment-method" ng-model='data.paymentMethod'>
            <option value='mtn'>MTN mobile money</option>
            <option value='vodafone'>Vodafone Cash</option>
            <option value='tigo'>Tigo cash</option>
            <option value='airtel'>Airtel money</option>
            <option value='bank'>Bank</option>
          </select>
        </div>
        <div class="form-group">
         Is the provided phone number your mobile money contact? <br>

         <div class="radio-inline">
          <label> <input type="radio" name="phone-money" ng-model='data.isPhoneMobileMoney' value="yes">Yes</label>
        </div>
        <div class="radio-inline">
          <label><input type="radio" name="phone-money" ng-model='data.isPhoneMobileMoney' value="no" checked="checked">No</label>
        </div>
        
      </div>
      <div class="form-group">
       If already paid? (optional)
       <div class="form-group" id="money-reference">
         Please input <br>
         <div class="form-group">
          <input class="form-control reg-widget" type="text"  ng-model='data.mobileMoneyNo'  placeholder="mobile money phone number" name="money-phone-number"/>
        </div> 
        <input class="form-control reg-widget" type="text" ng-model='data.mobileMoneyReferenceNo' placeholder="mobile money reference number" name="money-reference"/>
      </div> 
      
      <div class="form-group" id="receipt">
        Upload bank receipt
        <input type="file" name='receipt' placeholder="upload bank receipt" />
      </div> 
    </div>

  </div>
</div>
<div class="col-md-offset-2 col-md-6 col-sm-12"><button id="submit-btn"type="submit" ng-click='register()' class="btn btn-success btn-lg" style="width:40%; margin-left:10%;">SEND</button>
</div>
</form>

</div>
      
<style>

  .btn {
    float: right;
    margin-left: 20px;
  }
}

.site-dialog {
  overflow: hidden;
  position: absolute;
  width: 95%;
  max-width: 500px;
  padding: 0;
  border-width: 0;
  border-radius: 5px;
  background: #01a2a6;
  box-shadow: 10px 10px 20px 10px rgba(0, 0, 0, .3);

  h1 {
    font-size: 16px;
    font-weight: normal;
    margin: 0;
    color: #fff;
  }
  p {
    font-size: 14px;
  }
  .dialog-header {
    padding: 12px 20px;
    background-color: @heading-bg;
  }
  .dialog-content {
    padding: 30px 20px;
    color: @gray-darker;
    background-color: #fff;
    p:last-of-type, p:only-child {
      margin-top: 0;
      margin-bottom: 0;
    }
  }


}
</style>

<script>
$(function(){


});

</script>
</div>