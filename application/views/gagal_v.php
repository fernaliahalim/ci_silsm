<?php
	$this->load->view('header_vv');
	$i=1;
?>
<div id="content">
<br/>
<br/>
<div id="tes" style="padding:50px">
	<h2>Maaf, Anda belum lolos. Silahkan coba lagi!</h2>
    <form action="<?php echo base_url();?>tes" method="post">
    	<button>Coba Lagi</button>
    </form>
</div>
</div>
</div>
<div class="clear"></div>
<?php
	$this->load->view('footer_v');
?>