<style type="text/css">
	.borderless tbody tr td, .borderless tbody tr th, .borderless thead tr th {
    border: none;
}
</style>
<table class="table">
<?php 
for($i=0; $i<5; $i++){ 
?>
	<tr>
		<td class="text-center" style="border:none">
			<a href="<?= $myFeed[$i][1] ?>"><?= $myFeed[$i][0]?></a><br>
		</td>
	</tr>
<?php	}
?>
</table>
	