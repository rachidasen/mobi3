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
					</tr>					
				<?php endforeach ?>
				<tr>
					<th>TOTAL PRICE</th>
					<th><?=$total?></th>
					<th>
						<form action="buy.php" method="POST">
							<input type="hidden" name="del" value="del" />
							<input type="submit" class="btn btn-primary" value="BUY" />
						</form>
					</th>

				</tr>
			</tbody>
		</table>
  </div>
  
 </div>