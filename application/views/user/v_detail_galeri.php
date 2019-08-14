<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/admin/sb_admin/css/bootstrap.css") ?>">
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/user")?>/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<style type="text/css">
	.card:hover{
		box-shadow: 0px 2px 25px rgba(255,245,45,45);
	}
</style>
<div class="row">
<?php foreach ($detail_galeri as $key){
 ?>

  <div class="col-md-2 text-center">
  	<div class="card" style="width: 18rem; ">
	  <img src="<?php echo base_url('assets/uploads/galeri')?>/<?php echo $key->gambar; ?>" class="card-img-top img-thumbnail" alt="..." onclick="view_image('<?php echo $key->id_detail ?>')">
	  <div class="card-body">
	  </div>
	</div>
  </div>
 <?php  } ?>
</div>
<script src="<?php echo base_url("assets/user")?>/vendor/jquery/jquery.min.js"></script>
  
  
<script type="text/javascript" src="<?php echo base_url("assets/user")?>/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
	function view_image(id){
		// alert(id);
		$.fancybox.open({
         href : "<?php echo base_url();?>Detail_galeri/view_galeri/"+id,
         type : 'iframe',
         helpers : {
             media: true 
         },
         width: "60%",
         height: 800,
         autoSize: false,
         scrolling: false
		});
		
	}
</script>