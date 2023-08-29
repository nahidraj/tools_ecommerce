<?php
include("website-layout/header.php");
?>

<section class="dashboard">
  <!-- this is dashboard topbar -->
  <?php
  include("dashboard-layout/header.php")
  ?>
  <!-- this is dashboard main -->
  <div class="dashboard_main_widget">
    <div class="row">
      <!-- this is dashboard sidebar menu -->
      <div class="col-lg-2">
        <?php
        include("dashboard-layout/sidebar.php")
        ?>
      </div>
      <!-- this is dashboard main content -->
      <div class="col-lg-10">
        <!-- this is dashboard content -->
        <div class="dashboard_main_content">
          <!-- statistics part -->
          <div class="content_widget_title">
            <h4>Statistics</h4>
          </div>
          <div class="statistics_widget">
            <div class="row">
              <div class="col-lg-4">
                <div class="statistics_widget_item">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-user"></i>
                      <div class="text">
                        <h5>2500</h5>
                        <h6>Users</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="statistics_widget_item">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-heart"></i>
                      <div class="text">
                        <h6>Favourites</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="statistics_widget_item">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-signal"></i>
                      <div class="text">
                        <h5>2500</h5>
                        <h6>Users</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- operation part -->
          <div class="content_widget_title">
            <h4>Operation</h4>
          </div>
          <div class="operation_widget">
            <div class="row">
              <div class="col-lg-2">
                <div class="operation_widget_item">
                  <div class="text-center icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-user"></i>
                      <div class="text">
                        <h5>2500</h5>
                        <h6>Users</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="operation_widget_item">
                  <div class="text-center icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-user"></i>
                      <div class="text">
                        <h5>2500</h5>
                        <h6>Users</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="operation_widget_item">
                  <div class="text-center icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-user"></i>
                      <div class="text">
                        <h5>BDT: 70,000.00</h5>
                        <h6>Sales Value</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="operation_widget_item">
                  <div class="text-center icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-user"></i>
                      <div class="text">
                        <h5>2500</h5>
                        <h6>Users</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="operation_widget_item">
                  <div class="text-center icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-user"></i>
                      <div class="text">
                        <h5>2500</h5>
                        <h6>Users</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="operation_widget_item">
                  <div class="text-center icon d-flex justify-content-center align-items-center">
                    <div class="info">
                      <i class="fa-solid fa-user"></i>
                      <div class="text">
                        <h5>2500</h5>
                        <h6>Users</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- order part -->
          <div class="order_widget">
            <div class="order_widget_title">
              <div class="row">
                <div class="col-lg-6">
                  <div class="order_title">
                    <h4>Order</h4>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="view_all text-end">
                    <button class="view_all_btn">See All</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="order_widget_table table-responsive">
              <table class="table table-bordered table-striped">
                <thead class="table-dark">
                  <tr>
                    <th>SL No</th>
                    <th>Product Title</th>
                    <th>Selling Price</th>
                    <th>Product Code</th>
                    <th>Seller ID</th>
                    <th>Order Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td>SID001</td>
                    <td width="120" class="text-center">
                      <button class="product_view"><i class="fa-regular fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td>SID001</td>
                    <td width="120" class="text-center">
                      <button class="product_view"><i class="fa-regular fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td>SID001</td>
                    <td width="120" class="text-center">
                      <button class="product_view"><i class="fa-regular fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td>SID001</td>
                    <td width="120" class="text-center">
                      <button class="product_view"><i class="fa-regular fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td>SID001</td>
                    <td width="120" class="text-center">
                      <button class="product_view"><i class="fa-regular fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td>SID001</td>
                    <td width="120" class="text-center">
                      <button class="product_view"><i class="fa-regular fa-eye"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
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