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
      <div class="col-xl-3 col-xxl-2 col-lg-4">
        <?php
        include("dashboard-layout/sidebar.php")
        ?>
      </div>
      <!-- this is dashboard main content -->
      <div class="col-xl-9 col-xxl-10 col-lg-8">
        <!-- this is dashboard content -->
        <div class="dashboard_main_content">
          <div class="all_order_and_search">
            <div class="row">
              <div class="col-xl-8 col-12 align-self-center mb-3 mb-xl-0">
                <div class="title">
                  <h4>All Orders</h4>
                </div>
              </div>
              <div class="col-xl-4 col-12 align-self-center">
                <div class="search text-end">
                  <form action="#">
                    <div class="input_groups position-relative">
                      <input type="text" placeholder="Search By Seller ID">
                      <button type="submit" class="position-absolute">Search</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4">
          <div class="order_table_widget table-responsive text-nowrap mt-4">
            <table class="table table-bordered">
              <thead class="table-dark">
                <tr>
                  <th>SL No</th>
                  <th>Product Title</th>
                  <th>Selling Price</th>
                  <th>Product Code</th>
                  <th>Status</th>
                  <th>Status Update</th>
                </tr>
              </thead>
              <!-- table collapse one -->
              <tr>
                <td>01</td>
                <td>Fluke 101 Digital multimeter</td>
                <td>BDT: 5999</td>
                <td>F001</td>
                <td><span class="status_danger">Pending</span></td>
                <td width="150" class="text-center">
                  <button class="product_status expandChildTable">Update <i class="fa-solid fa-caret-right"></i></button>
                </td>
              </tr>
              <tr class="childTableRow">
                <td colspan="6">
                  <table class="table border-0 mb-0">
                    <tbody>
                      <tr>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                              Sourcing
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked2">
                            <label class="form-check-label" for="flexCheckChecked2">
                              Delivering
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked3">
                            <label class="form-check-label" for="flexCheckChecked3">
                              Pending
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                              Canceled
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked5">
                            <label class="form-check-label" for="flexCheckChecked5">
                              Delivered
                            </label>
                          </div>
                        </td>
                        <td class="border-0" width="320">
                          <div class="live_tracking">
                            <div class="input-group">
                              <span class="input-group-text">Live Track </span>
                              <input type="text" class="form-control shadow-none" placeholder="URL">
                            </div>
                          </div>
                        </td>
                        <td class="border-0" width="140">
                          <button type="button" class="update_status">Update Now</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <!-- table collapse two -->
              <tr>
                <td>01</td>
                <td>Fluke 101 Digital multimeter</td>
                <td>BDT: 5999</td>
                <td>F001</td>
                <td><span class="status_success">Pending</span></td>
                <td width="150" class="text-center">
                  <button class="product_status expandChildTable">Update <i class="fa-solid fa-caret-right"></i></button>
                </td>
              </tr>
              <tr class="childTableRow">
                <td colspan="6">
                  <table class="table border-0 mb-0">
                    <tbody>
                      <tr>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                              Sourcing
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked2">
                            <label class="form-check-label" for="flexCheckChecked2">
                              Delivering
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked3">
                            <label class="form-check-label" for="flexCheckChecked3">
                              Pending
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                              Canceled
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked5">
                            <label class="form-check-label" for="flexCheckChecked5">
                              Delivered
                            </label>
                          </div>
                        </td>
                        <td class="border-0" width="320">
                          <div class="live_tracking">
                            <div class="input-group">
                              <span class="input-group-text">Live Track </span>
                              <input type="text" class="form-control shadow-none" placeholder="URL">
                            </div>
                          </div>
                        </td>
                        <td class="border-0" width="140">
                          <button type="button" class="update_status">Update Now</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <!-- table collapse three -->

              <tr>
                <td>01</td>
                <td>Fluke 101 Digital multimeter</td>
                <td>BDT: 5999</td>
                <td>F001</td>
                <td><span class="status_danger">Pending</span></td>
                <td width="150" class="text-center">
                  <button class="product_status expandChildTable">Update <i class="fa-solid fa-caret-right"></i></button>
                </td>
              </tr>
              <tr class="childTableRow">
                <td colspan="6">
                  <table class="table border-0 mb-0">
                    <tbody>
                      <tr>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked1">
                            <label class="form-check-label" for="flexCheckChecked1">
                              Sourcing
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked2">
                            <label class="form-check-label" for="flexCheckChecked2">
                              Delivering
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked3">
                            <label class="form-check-label" for="flexCheckChecked3">
                              Pending
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked4">
                            <label class="form-check-label" for="flexCheckChecked4">
                              Canceled
                            </label>
                          </div>
                        </td>
                        <td class="border-0">
                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckChecked5">
                            <label class="form-check-label" for="flexCheckChecked5">
                              Delivered
                            </label>
                          </div>
                        </td>
                        <td class="border-0" width="320">
                          <div class="live_tracking">
                            <div class="input-group">
                              <span class="input-group-text">Live Track </span>
                              <input type="text" class="form-control shadow-none" placeholder="URL">
                            </div>
                          </div>
                        </td>
                        <td class="border-0" width="140">
                          <button type="button" class="update_status">Update Now</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include("website-layout/footer.php");
?>