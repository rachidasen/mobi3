<div class="jumbotron">
<div class="row">
  		<table class="table">
			<thead>
				<th>PRODUCT </th>
				<th>PRICE</th>
			</thead> 
			<tbody>
				<?php foreach ($pro as $prod): ?>
					<tr>
						<td><?=$prod["name"]." ".$prod["model"]?></td>
						<td><?=$prod["price"]?></td>
					
						<td>	
					<form action="track.php" method="POST">
							<input type="hidden" name="del" value="del" />
								<button type="button" class="btn btn-xs btn-danger">
								  <span class="glyphicon glyphicon-remove"></span>;
								</button>
					</form>		

					</td>
					</tr>
				<?php endforeach ?>
				<tr>
					<th>TOTAL PRICE</th>
					<th><?=$total?></th>
					<th>
						<a href="buy.php" class="btn btn-primary">BUY </a>
						
					</th>

				</tr>
			</tbody>
		</table>
  </div>
  
 </div>