<!DOCTYPE html>
<html lang="tr">
<head>
<?php $this->load->view("includes_sayfa/head"); ?>
</head>
<body>
<?php $this->load->view("includes_sayfa/header");?>
<!--Main Content Start-->
<?php $this->load->view("sayfa/main_content");?>
<!--Main Content End-->
<!--Footer Start-->
<?php $this->load->view("includes_sayfa/footer");?>
<!--Footer End-->
<?php $this->load->view("includes_sayfa/include_script");?>
</body>
</html>