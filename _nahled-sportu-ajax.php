
<!DOCTYPE html>

    <?php  include("layouts/_head.php");  ?>
	

<!--  -----------------------------------Nahled sportu-----------------------------------------------  -->

<div class="nahled-sportu">
	<div class="close-sport">X</div>
    <h2>Jachting</h2>
    <div class="sport-wrap-mid">
        Pireo - škola tenisu, windsurfingu a paddleboardingu<br>
			- tenisová škola<br>
			- tenis servis<br>
			- ski servis<br>
			- škola windsurfingu<br>
			škola paddleboardingu
    </div>
</div>
<script type="text/javascript">
	$('.close-sport').click(function(){
		$(".sport-triggered").removeClass('sport-triggered').attr('type','');
	});
</script>