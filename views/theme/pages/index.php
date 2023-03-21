<? foreach($items as $item){?>
			<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">

											  <img src="<?=THEME . $item['img']?>" width="255px" height="300px"/>
											<h2>$<?=$item['price']?></h2>
											<p><a style="color: white;"  href=""></a><?=$item['name']?></p>
											<a href="" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$<?=$item['price']?></h2>
												<p><a style="color: white;"  href="?view=product-details?id=<?=$item['id']?>"><?=$item['name']?></a></p>

												<a href="" class="btn btn-default add-to-cart" data-id="<?=$item['id']?>" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
				</div>


     <? }?>

		 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		   <div class="modal-dialog" role="document">
		     <div class="modal-content">
		       <div class="modal-header">
		         <h3 class="modal-title" id="exampleModalLabel">Корзина</h3>
		         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		           <span aria-hidden="true">&times;</span>
		         </button>
		       </div>
		       <div class="modal-body">
						 <?include "ajax.php";?>
		       </div>
		       <div class="modal-footer">
						 <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
		         <button type="button" class="btn btn-primary">Сохранить</button>
		       </div>
		     </div>
		   </div>
		 </div>
