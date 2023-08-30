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
          <div class="all_order_and_search">
            <div class="row">
              <div class="col-lg-8 align-self-center">
                <div class="title">
                  <h4>All Orders</h4>
                </div>
              </div>
              <div class="col-lg-4 align-self-center">
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
          <div class="order_table_widget table-responsive mt-4">
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










            <!-- <table class="table table-bordered table-striped">
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
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Fluke 101 Digital multimeter</td>
                    <td>BDT: 5999</td>
                    <td>F001</td>
                    <td class="danger">Pending</td>
                    <td width="150" class="text-center">
                      <button class="product_status">Update <i class="fa-solid fa-caret-right"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="hidden_info">
                      <table width="100%">
                        <tr>
                          <td colspan="6">fsafsef</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
 -->







          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include("website-layout/footer.php");
?>