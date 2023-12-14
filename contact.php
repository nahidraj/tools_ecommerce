<?php
include("website-layout/header.php");
?>

<div class="bread-crumb text-center">
  <div class="container">
    <div class="text">
      <h4>Contact Us!</h4>
    </div>
  </div>
</div>

<!-- contact form part start -->
<section class="contact_form">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 mx-auto">
        <div class="title text-center">
          <img src="images/customer-care.png" alt="customer-care" width="60">
          <h3>Contact Form</h3>
        </div>
        <div class="form_main">
          <form action="#">
            <div class="input_groups d-flex">
              <label>Full Name: </label>
              <input type="text">
            </div>
            <div class="input_groups d-flex">
              <label>Emal Address: </label>
              <input type="text">
            </div>
            <div class="input_groups d-flex">
              <label>Subject: </label>
              <input type="text">
            </div>
            <div class="input_groups d-flex">
              <label>Message:</label>
              <textarea placeholder="Please write your message here..."></textarea>
            </div>
            <div class="button">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form part end ch-->


<?php
include("website-layout/footer.php");
?>