<?php
include("website-layout/header.php");
?>

<div class="bread-crumb text-center">
  <div class="container">
    <div class="text">
      <h4>Enjoy Shopping</h4>
    </div>
  </div>
</div>

<!-- cart page start -->
<section class="cart_page">
  <div class="container">
    <div class="cart_table">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>SL No</th>
              <th>Products</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>01</td>
              <td><a href="">Fluke 101 Digital multimeter</a></td>
              <td class="d-flex align-items-center quantity">
                <button class="decrement quantity_btn"><i class="fa-solid fa-minus"></i></button>
                <input type="text" value="1" readonly>
                <button class="increment quantity_btn"><i class="fa-solid fa-plus"></i></button>
              </td>
              <td>BDT: 5999</td>
              <td><button class="close"><i class="fa-solid fa-xmark"></i></button></td>
            </tr>
            <tr>
              <td>01</td>
              <td><a href="">Fluke 101 Digital multimeter</a></td>
              <td class="d-flex align-items-center quantity">
                <button class="decrement quantity_btn"><i class="fa-solid fa-minus"></i></button>
                <input type="text" value="1" readonly>
                <button class="increment quantity_btn"><i class="fa-solid fa-plus"></i></button>
              </td>
              <td>BDT: 5999</td>
              <td><button class="close"><i class="fa-solid fa-xmark"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="continue_text">
      <h4>Continue Shopping
      </h4>
      <a href="" class="next_shopping">Next</a>
    </div>
  </div>
</section>
<!-- cart page end ch-->


<?php
include("website-layout/footer.php");
?>