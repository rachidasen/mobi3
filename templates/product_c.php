<div class="col-xs-9 col-lg-10 col-md-8">

<div class="row">
<?php foreach ($rows as $row): ?>
		
			<div class="col-xs-3 lg-7">
				<div class="thumbnail">
					<?php $name="/img/pictures/".$row["P_mimg"]; ?>
					<a href="#"><img src=<?=$name?> alt="" class="img-responsive"></a>
					<p class="caption"><?=$row["model"]?></p>
						<div class="row"><?=$row["price"]?></div>
					<form method="POST" action="cart.php">
						<input type="hidden" name="pid" value="<?=$row["pid"]?>" />
						<input type="submit" class="btn btn-primary btn-justified" value="Add-tocart" />
												
					</form>
				</div>
			</div>

<?php endforeach ?>
</div>

</div>
