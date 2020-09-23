<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $sayfa->sayfa_title;?></title>
<meta name="description" content="<?php echo $sayfa->sayfa_description;?>">
<meta name="keywords" content="<?php echo $sayfa->sayfa_keywords;?>">
<link rel="canonical" href="<?php echo base_url("/sayfa/").$sayfa->sayfa_url;?>" />
<?php $this->load->view("includes/include_style");?>
<style> @media screen and (max-width:499px){.col-5 {flex: 1 0 100%; max-width: 100%; margin-right: 1rem; margin-left: 1rem;}} 
@media screen and  (max-width:411px) and (min-width:360px) {.topbar p{font-size: .90rem !important;}}
@media screen and  (max-width:359px) and (min-width:320px) {.topbar p{font-size: .78rem !important;}}
@media screen and (max-width:499px){.col-7 {flex: 0 0 100%;max-width: 100%;margin: 0px auto;margin-left: 1.5rem;}}
.sponsor-content{margin-bottom: 1rem;}

 .col-7 p {
    color: whitesmoke;
    font-size: 1rem;
    font-weight: 900;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169520195-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169520195-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->