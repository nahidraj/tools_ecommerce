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
<section class="checkout_page">
  <div class="container">
    <form action="#">
      <div class="checkout_info">
        <div class="title">
          <h3>Customer Information</h3>
        </div>
        <div class="form_main">
          <div class="input_groups d-flex">
            <label>Name </label>
            <input type="text">
          </div>
          <div class="input_groups d-flex">
            <label>Emal Address </label>
            <input type="text">
          </div>
          <div class="input_groups d-flex">
            <label>Contact Number </label>
            <input type="text">
          </div>
        </div>
      </div>
      <div class="checkout_info mt-5">
        <div class="title">
          <h3>Billing Information</h3>
        </div>
        <div class="form_main">
          <div class="input_groups d-flex">
            <label>Name </label>
            <input type="text">
          </div>
          <div class="input_groups d-flex">
            <label>Emal Address </label>
            <input type="text">
          </div>
          <div class="input_groups d-flex">
            <label>Contact Number </label>
            <input type="text">
          </div>
          <div class="input_groups d-flex">
            <label>Payment: &nbsp;&nbsp;&nbsp;&nbsp; Bkash merchent </label>
            <input type="text">
          </div>
        </div>
      </div>
      <div class="button">
        <button type="submit">Order Now
        </button>
      </div>
    </form>
  </div>
</section>
<!-- about us part end -->



<?php
include("website-layout/footer.php");
?>