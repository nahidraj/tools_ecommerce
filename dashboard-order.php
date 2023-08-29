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
          
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include("website-layout/footer.php");
?>