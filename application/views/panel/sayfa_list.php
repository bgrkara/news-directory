<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view("panel/includes/head");?>
    <?php $this->load->view("panel/sayfa_list/page_style");?>
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php $this->load->view("panel/includes/header");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php $this->load->view("panel/includes/sidebar");?>
        <!-- partial -->
        <div class="main-panel">
            <?php $this->load->view("panel/sayfa_list/main_content");?>
            <?php $this->load->view("panel/includes/footer");?>
            <?php $this->load->view("panel/sayfa_list/page_script");?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
</body>
</html>