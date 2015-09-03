<?php
	$this->load->view('header_vv');
?>
<div id="content" style="text-align:left;">
<div id="tes" style="padding:80px">
<table border = "1" cellpadding="30px">
<form method = "post" action="<?php echo site_url();?>hitung_skor/index/<?php echo $this->uri->segment(3);?>">
<?php
	$i = 1;
	
	foreach($soal as $row)
	{
		echo '<tr>';
			echo '<td>'.$row->nomer.'</td>'; $i++;
			echo '<td>'.$row->soal.'</td>';
			echo '<td>';
			echo'<select name = "jawaban[]">
					<option value = "a">'.$row->a.'</option>
					<option value = "b">'.$row->b.'</option>
					<option value = "c">'.$row->c.'</option>
					<option value = "d">'.$row->d.'</option>
				</select>';
			echo '</td>';
		echo '</tr>';	
	}
?>
</table>
<br/>
<br/>
<button>Selesai</button>
<!--<input type="submit" value="selesai">-->
</form>
</div>
</div>
<div class="clear"></div>
<?php $this->load->view('footer_v'); ?>