<?php 
	$redis = new Redis();
	$redis -> connetc('127.0.0.1');
	$redis ->auth('wzf12345');

	$total = 100;
	for($i=1;$i<=$total;$i++)
	{
		echo " &nbsp;&nbsp; <button class='seat'>($i)</button> &nbsp;&nbsp";
		if($i%10 == 0){
			echo "<br>";
		}
	}

?>
	<script>
	var seata = document.getElementsByClassName("seat");

	for(var $i=0;i<seats.length;i++)
	{
		seats[i].addEventListener('click',function()){
			alert(this.innerHTML);
		}
	}


	</script>
