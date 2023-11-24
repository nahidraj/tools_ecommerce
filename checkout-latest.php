<?php
include("website-layout/header.php");
?>

<div class="bread-crumb text-center">
  <div class="container">
    <div class="text">
      <h4>Checkout</h4>
    </div>
  </div>
</div>

<!-- about us part start -->
<section class="checkout_latest_page">
  <div class="checkout_title_bg">
    <div class="container">
      <h3 class="checkout_title py-3">Checkout</h3>
    </div>
  </div>
  <div class="container">
    <form action="#">
      <div class="row">
        <div class="col-lg-6">
          <div class="checkout_latest_form">
            <div class="row">
              <div class="col-lg-12">
                <div class="input_groups">
                  <label>Name </label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input_groups">
                  <label>Phone Number </label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input_groups">
                  <label>District </label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input_groups">
                  <label>Upazila </label>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input_groups">
                  <label>Address </label>
                  <textarea rows="3"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input_groups">
                  <label>Note </label>
                  <textarea rows="6"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <button type="button" class="add_delivery_address"><i class="fas fa-plus"></i> Add another delivery address
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="billing_address">
            <h3 class="checkout_title">Bill Info</h3>
            <div class="bill_information mt-4">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td>Voucher Code</td>
                    <td>:</td>
                    <td>
                      <input type="text">
                    </td>
                  </tr>
                  <tr>
                    <td>Voucher Discount</td>
                    <td>:</td>
                    <td>
                      ট 0
                    </td>
                  </tr>
                  <tr>
                    <td>Total Price</td>
                    <td>:</td>
                    <td>
                      ট 1200
                    </td>
                  </tr>
                  <tr>
                    <td>Total Discount</td>
                    <td>:</td>
                    <td>
                      ট 50
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td>
                      <h4><b>Grand Total</b></h4>
                    </td>
                    <td>:</td>
                    <td>ট 1300</td>
                  </tr>
                </tfoot>
              </table>
              <div class="payment_option">
                <h3 class="title">Choose your payment option</h3>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    <img src="images/payment1.png" alt="payment1" width="90">
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input shadow-none" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Pay Later within 48 Hours
                  </label>
                </div>

              </div>
            </div>
            <div class="submit_checkout_btn text-center mt-5">
              <button type="submit">Confirm Order</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- about us part end -->



<?php
include("website-layout/footer.php");
?>