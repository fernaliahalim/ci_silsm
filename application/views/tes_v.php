<?php
	$this->load->view('header_vv');
	$i=1;
?>
<div id="content" style="text-align:left">
<br/>
<br/>
<div id="tes" style="padding:50px">
<table border="1" cellpadding="10px">
	<tr>
    	<th>No</th>
    	<th>ID Tes</th>
    	<th>Nama Tes</th>
        <th>Pilihan</th>
    </tr>
    
    <?php
	foreach($data_tes as $row)
	{
		echo '<tr>';
			echo '<td>'.$i.'</td>';$i++;
			echo '<td>'.$row->id_tes.'</td>';
			echo '<td>'.$row->nama_tes.'</td>';
			echo '<td><a href="'.site_url().'soal/index/'.$row->id_tes.'">Ikuti</a></td>';
		echo '</tr>';	
	}
	
    ?>
</table>
</div>
</div>
</div>
<div class="clear"></div>
<?php
	$this->load->view('footer_v');
?>