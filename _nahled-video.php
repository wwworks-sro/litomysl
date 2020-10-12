<!--  -----------------------------------Nahled video-----------------------------------------------  -->

<div class="nahled-video">
	<div class="close-video">X</div>
	<div class="video1">
		<iframe width="100%" src="https://www.youtube.com/embed/76DAxhQmgUc" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="video2">
		<iframe width="100%" src="https://www.youtube.com/embed/YktUQw4_Sfk" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="video3">
		<iframe width="100%" src="https://www.youtube.com/embed/jJq_T6PE80g" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="css/tourist.css" />
<script type="text/javascript">
	$('.close-video').click(function(){
		$(".video-triggered").removeClass('video-triggered').removeClass('video1').removeClass('video2').removeClass('video3').attr('video','');
	});
</script>