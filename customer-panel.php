<?php
include("website-layout/header.php");
?>

<section class="dashboard">
  <!-- this is dashboard main -->
  <div class="dashboard_main_widget">
    <div class="row">
      <!-- this is dashboard sidebar menu -->
      <div class="col-lg-2">
        <!-- this is dashboard left menu -->
        <div class="dashboard_left_menu">
          <ul class="list-unstyled">
            <!-- use this active class in li for active menu -->
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">My Order</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Track Order</a></li>
            <li><a href="#">Profile</a></li>
          </ul>

        </div>
      </div>
      <!-- this is dashboard main content -->
      <div class="col-lg-10">
        <!-- this is dashboard topbar -->
        <div class="dashboard_top_header mb-4">
          <div class="row">
            <div class="col-lg-4 align-self-center"></div>
            <div class="col-lg-4 align-self-center">
              <div class="dashboard_title text-center">
                <h3>Welcome to Tools Bangladesh!</h3>
              </div>
            </div>
            <div class="col-lg-4 align-self-center">
              <div class="profile_widget">
                <div class="info_box">
                  <div class="image_wrapper d-flex align-items-center">
                    <div class="img">
                      <img src="images/profile.jpg" alt="profile" class="w-100">
                    </div>
                    <div class="text">
                      <h3>Nahid <i class="fa-solid fa-sort-down"></i></h3>
                    </div>
                  </div>
                  <div class="hover_dropdown_menu shadow">
                    <ul class="list-unstyled">
                      <li><a href=""><i class="fa-solid fa-user"></i> Profile</a></li>
                      <li><a href=""><i class="fa-regular fa-pen-to-square"></i> Edit Profile</a></li>
                      <li><a href=""><i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- this is dashboard content -->
        <div class="customer_panel_widget">
          <!-- customer dashboard part start -->
          <div class="short_summery">
            <div class="row">
              <div class="col-lg-3">
                <div class="summery_item">
                  <h4>10</h4>
                  <p>Total Ordered</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="summery_item">
                  <h4>10</h4>
                  <p>Total Delivered</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="summery_item">
                  <h4>10</h4>
                  <p>Pending Order</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="summery_item">
                  <h4>10</h4>
                  <p>Favourites</p>
                </div>
              </div>
            </div>
          </div>
          <div class="continue_shopping text-center">
            <a href="">Continue Shopping</a>
          </div>
          <div class="offer_banner mt-4">
            <img src="images/offer-banner.jpg" alt="offer-banner" class="img-fluid w-100">
          </div>

          <!-- all orders part start -->
          <div class="customer_all_orders mt-4">
            <div class="title">
              <h4>All Orders</h4>
            </div>
            <div class="all_order_table_widget table-responsive mt-3">
              <table class="table table-bordered table-striped">
                <thead class="table-dark">
                  <tr>
                    <th>SL No</th>
                    <th>Product Title</th>
                    <th>Selling Price</th>
                    <th>Product Code</th>
                    <th>Status</th>
                    <th>Track Order</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-info">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-success">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-info">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-success">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-info">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-success">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-info">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td><span class="badge bg-success">Pending</span></td>
                    <td>Tracker</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- customer wishlist part start -->
          <div class="customer_all_wishlist mt-4">
            <div class="title">
              <h4>My Wishlist</h4>
            </div>
            <div class="customer_wishlist_widget mt-3">
              <div class="row g-3">
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/2.jpg" alt="2" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/3.jpg" alt="3" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/2.jpg" alt="2" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/3.jpg" alt="3" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/2.jpg" alt="2" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/3.jpg" alt="3" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/2.jpg" alt="2" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/3.jpg" alt="3" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/2.jpg" alt="2" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/3.jpg" alt="3" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/2.jpg" alt="2" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="common_product_widget">
                    <span class="discount">10% Off</span>
                    <div class="image">
                      <a href="" class="d-block w-100">
                        <img src="images/3.jpg" alt="3" class="img-fluid w-100">
                      </a>
                    </div>
                    <div class="text text-center">
                      <a href="" class="product_title line_limit_2">The title should be within
                        two line</a>
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <span>BDT: <small>00.00</small></span>

                      <div class="product_action d-flex justify-content-between align-items-center">
                        <button class="wishlist"><i class="fa-regular fa-heart"></i></button>
                        <a href="" class="get_quote">Get Quote</a>
                        <button class="cart"><i class="fa-solid fa-cart-shopping"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- customer order tracing part -->
          <div class="customer_order_tracking mt-4">
            <div class="customer_order_widget">
              <div class="row">
                <div class="col-lg-4 mx-auto">
                  <div class="tracking_form text-center">
                    <h4>Track Your Order</h4>
                    <form action="#">
                      <div class="input-groups">
                        <input type="text" placeholder="Type your order ID">
                      </div>
                      <button type="submit">Track Now</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- customer order tracking system part -->
          <div class="customer_order_tracking_status">
            <table class="table table-bordered table-striped">
              <thead class="table-dark">
                <tr>
                  <th>Order ID</th>
                  <th>Product</th>
                  <th>Product Id</th>
                  <th>Price</th>
                  <th>Order Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ID001</td>
                  <td>Fluke 101 Digital multimeter</td>
                  <td>F001</td>
                  <td>BDT: 5999</td>
                  <td>Processing</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- customer profile part -->
          <div class="customer_profile mt-4">
            <div class="title">
              <h4>Users Credentials</h4>
            </div>
            <div class="customer_profile_widget mt-3">
              <div class="row">
                <div class="col-lg-2">
                  <div class="profile_image">
                    <img src="images/pr.jpg" alt="profile" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="profile_information">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th style="width: 240px;">Name</th>
                          <th style="text-align: center; width:50px">:</th>
                          <td>Tahmid Khan</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <th style="text-align: center; width:50px">:</th>
                          <td>tahmidkhan@gmail.com</td>
                        </tr>
                        <tr>
                          <th>Phone Number</th>
                          <th style="text-align: center; width:50px">:</th>
                          <td>017...........</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                  <div class="profile_information">
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <th style="width: 240px;">Username</th>
                          <th style="text-align: center; width:50px">:</th>
                          <td>writeyourusernamehere</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <form action="#">
                <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-10">
                    <div class="password">
                      <h4>Change password</h4>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="input-groups">
                            <input type="PASSWORD" placeholder="Password">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input-groups">
                            <input type="PASSWORD" placeholder="Confirm Password">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="save_btn">
                  <button type="submit">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include("website-layout/footer.php");
?>