<?php
    $arr= array();
	$r = array("id"=> "sp1", "name"=> "Sản phẩm 1 ");
	$arr[] = $r;
	$r = array("id"=> "sp2", "name"=> "Sản phẩm 2 ");
	$arr[] = $r;
	$r = array("id"=> "sp3", "name"=> "Sản phẩm 3 ");
	$arr[] = $r;
	$i=0;
	?>
<table border=1>
	<tr><td>STT</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td></tr>
    <?php
    // $r= array("r1"=>array("id"=> "sp1", "name "=> "Sản phẩm 1 "),"r2"=>array("id"=> "sp2", "name "=> "Sản phẩm 2 "),"r3"=>array("id"=> "sp3", "name "=> "Sản phẩm 3 "));

	foreach($arr as $v)
	{	
		$i++;
		?>
		<tr><td> <?php echo $i; ?></td>
		<td> <?php echo $v['id']; ?></td>
		<td> <?=$v['name'];?></td></tr>
		<?php	
	}
	?>
</table>