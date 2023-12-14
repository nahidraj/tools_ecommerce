<?php
include("website-layout/header.php");
?>


<!-- customer registration panel start -->
<section class="customer_login">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 mx-auto">
        <div class="title">
          <h3>Marchent Account Login!</h3>
          <h5>(Secure Your Account)</h5>
        </div>
        <div class="form_main">
          <div class="form_box">
            <form action="#">
              <div class="user_icon">
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="input_groups">
                <input type="text" placeholder="Username">
              </div>
              <div class="input_groups">
                <input type="text" placeholder="Password">
              </div>

              <div class="button">
                <button type="submit">Login
                </button>
              </div>
            </form>
          </div>
          <div class="fotter_part d-flex justify-content-between">
            <div class="btn_item">
              <a href="" class="action_btn create">Create Account</a>
            </div>
            <div class="btn_item">
              <a href="" class="action_btn forgot">Forget Passwod</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- customer registration panel end ch-->


<?php
include("website-layout/footer.php");
?>