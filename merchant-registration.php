<?php
include("website-layout/header.php");
?>


<!-- customer registration panel start -->
<section class="merchate_registration">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="title">
          <h3>Welcome to the
          </h3>
          <h3>Marchent Account Registration!</h3>
        </div>
        <form action="#">
          <div class="form_main">
            <div class="user_icon">
              <i class="fa-solid fa-hotel"></i>
            </div>
            <div class="input_groups d-flex align-items-center">
              <label>Full Name: </label>
              <span>*</span>
              <input type="text">
            </div>
            <div class="input_groups d-flex align-items-center">
              <label>Email Address: </label>
              <span>*</span>
              <input type="text">
            </div>
            <div class="input_groups d-flex align-items-center">
              <label>Phone Number: </label>
              <span>*</span>
              <input type="text">
            </div>
            <div class="input_groups d-flex align-items-center">
              <label>Busines Name: </label>
              <span>*</span>
              <input type="text">
            </div>
            <div class="input_groups d-flex align-items-center">
              <label>Shop Address: </label>
              <span>*</span>
              <input type="text">
            </div>
            <div class="form-check d-flex align-items-center">
              <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Are agree with the terms & conditions!
              </label>
            </div>

            <div class="button">
              <button type="submit">Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- customer registration panel end ch-->


<?php
include("website-layout/footer.php");
?>