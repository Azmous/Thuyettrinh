
<table border=1>
	<tr><td>index</td><td>Value</td></tr>
    <?php
    $a = array(1, 3, 7, 8, 9 );
	$i=0;
	foreach($a as $k=>$v)
	{	$i++;
		echo "<td>$k</td>";
		echo "<td>$v</td></tr>";
	}
	?>
</table>
