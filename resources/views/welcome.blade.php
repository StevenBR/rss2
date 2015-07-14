<?php
// header('Content-Type: application/json');
// 	var_dump($feed);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
	var pageNumber = 1;
	$(document).ready(function(){
		$('.next').click(function(){
			pageNumber++;
			console.log(pageNumber);
			$.get('/MainController/get_limit/'+pageNumber, function(results){
				// console.log('results', results);
				$('#results').html(results);
			})
		}),
		$(".previous").click(function(){
			if(pageNumber==1)
			{
				return;
			}else{
				pageNumber--;
				console.log(pageNumber);
				$.get('/MainController/get_limit/'+pageNumber, function(results){
				// console.log('results', results);
				$('#results').html(results);
			})
			}
		})
		
		// console.log('here');
	})

</script>

<div class="row">
	<a href="/">
		<image class="image" style="height:90px; width:auto; margin-left:570px" src="http://assets.fontsinuse.com/static/use-media-items/28/27012/full-1400x1400/54d0994b/cnn-logo-square.png?resolution=0">
	</a>
	<a href="/">
		<h1 class="text-center" style="color:red; display:inline;">Top Stories</h1>
	</a>
</div>
<div id='results'>
<table class="table borderless">
<?php 
	for($i=0; $i<5; $i++)
	{
?>
		<tr>
			<td class="text-center" style="border:none;">
				<a href="<?= $feed[$i]['link']?>"><?= $feed[$i]["title"]?></a>
			</td>
		</tr>
<?php
	}
?>
</table>
</div>

<button class="previous btn btn-default" style="margin-left:635px">Previous</button>
<button class="next btn btn-default">Next</button>

