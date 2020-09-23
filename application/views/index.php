<!DOCTYPE html>
<html lang="tr">
<head>
<?php $this->load->view("includes_home/head"); ?>
</head>
<body>
<?php $this->load->view("includes_home/header");?>
<!--Main Content Start-->
<?php $this->load->view("home/main_content");?>
<!--Main Content End-->
<!--Footer Start-->
<?php $this->load->view("includes_home/footer");?>
<!--Footer End-->
<?php $this->load->view("includes_home/include_script");?>
</body>
</html>