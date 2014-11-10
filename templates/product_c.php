<div class="col-xs-9 col-lg-10 col-md-8">

<div class="row">
<?php foreach ($rows as $row): ?>
		
			<div class="col-xs-3 lg-7">
				<div class="thumbnail">
					<?php $name="/img/pictures/".$row["P_mimg"]; ?>
					<a href="#"><img src=<?=$name?> alt="" class="img-responsive">
					<pre><?=$row["model"]?></pre></a>

				</div>
			</div>

<?php endforeach ?>
</div>

</div>