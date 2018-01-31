<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
	 crossorigin="anonymous">
	<script src=js/jquery-3.2.1.min.js></script>
	<script src=js/all.js></script>
	<title>Document</title>
</head>

<body>
	<div class="rwap">

		<?php include("include.php"); ?>


		<content>
			<section>
				<div class="container">
					<ul id="progressbar1" class="mt-5 mb-3 hidden-xs hidden-sm">
						<li class="noline active1">確認商品-1</li>
						<li>填寫資料</li>
						<li>前往結帳</li>
						<li>完成</li>
					</ul>
				</div>
			</section>

			<section>
				<div class="container mb-5">
					<h2 class="h4 text-center mt-3 mb-5">確認購買商品</h2>
						<table class="table">
							<thead>
								<tr class="text-center">
									<th colspan="3" width="60%">商品</th>
									<th>單價</th>
									<th >數量</th>
									<th>小計</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle" width="5%"><a href="#removeModal" class="text-muted mr-3" data-toggle="modal" data-target="#trashModel" data-title="刪除 極簡抹綠杯 1 件">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
									</a></td>
									<td class="align-middle pr-0" width="20%"><img class="img-thumbnail mr-3" src="https://images.unsplash.com/photo-1458819757519-7581bade511d?w=150" alt=""></td>
									<td class="align-middle">極簡抹綠杯</td>
									<td class="align-middle text-center">$80</td>
									<td class="align-middle text-center">2件</td>
									<td class="align-middle text-right">$160</td>
								</tr>
								<tr>
									<td class="align-middle" width="5%">
										<a href="#removeModal" class="text-muted mr-3" data-toggle="modal" data-target="#trashModel" data-title="刪除 極簡文字杯 1 件">
											<i class="fa fa-trash-o" aria-hidden="true"></i>
										</a>
									</td>
									<td class="align-middle pr-0" width="20%">
										<img class="img-thumbnail mr-3" src="https://images.unsplash.com/photo-1501857138233-4a69e179cc44?w=150" alt="">
									</td>
									<td class="align-middle">極簡文字杯</td>
									<td class="align-middle text-center">$120</td>
									<td class="align-middle text-center">1件</td>
									<td class="align-middle text-right">$120</td>
								</tr>
								<tr>
									<td class="align-middle" width="5%">
										<a href="#removeModal" class="text-muted mr-3" data-toggle="modal" data-target="#trashModel" data-title="刪除 極簡日系手作杯 1 件">
											<i class="fa fa-trash-o" aria-hidden="true"></i>
										</a>
									</td>
									<td class="align-middle pr-0" width="20%">
										<img class="img-thumbnail mr-3" src="https://images.unsplash.com/photo-1495100497150-fe209c585f50?w=150" alt="">
									</td>
									<td class="align-middle">極簡日系手作杯</td>
									<td class="align-middle text-center">$380</td>
									<td class="align-middle text-center">1件</td>
									<td class="align-middle text-right">$380</td>
								</tr>
								<tr>
									<td colspan="5" class="text-right">運費</td>
									<td class="text-right">
										<strong>$60</strong>
									</td>
								</tr>
								<tr>
									<td colspan="5" class="text-right">合計</td>
									<td class="text-right">
										<strong>$640</strong>
									</td>
								</tr>
							</tbody>
						</table>

						<div class="d-flex justify-content-end my-5">
							<a href="#" class="btn btn-secondary mr-2">繼續購物</a>
							<button type="submit" class="btn btn-loch w-25">下一步</button>
						</div>
				</div>
			</section>




		</content>



		<footer>
			<div class="bg-loch py-3">
				<div class="container">
					<div class="row text-white">
						<div class="contact col-md-3 col-6 my-2">
							<div class="h5 mb-4">Service</div>
							<p class="mb-2">(333) 123 456</p>
							<p>
								<a class="text-white" href="mailto:john@doe.com">john@doe.com</a>
							</p>
						</div>
						<div class="social col-md-3 col-6 my-2">
							<div class="h5 mb-4">Follow Us</div>
							<ul>
								<li class="mb-2">
									<a href="">
										<i class="fa fa-facebook-official mr-1" aria-hidden="true"></i>Facebook</a>
								</li>
								<li class="mb-2">
									<a href="">
										<i class="fa fa-twitter-square mr-1" aria-hidden="true"></i>Twitter</a>
								</li>
								<li class="mb-2">
									<a href="">
										<i class="fa fa-instagram mr-1" aria-hidden="true"></i>Instagram</a>
								</li>
							</ul>
						</div>
						<div class="social col-md-3 col-6 my-2">
							<div class="h5 mb-4">Customer Help</div>
							<ul>
								<li class="mb-2">
									<a href="">購物說明</a>
								</li>
								<li class="mb-2">
									<a href="">關於我們</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-6 my-2">
							<div class="h5 mb-4">SIGNUP FOR NEWS</div>
							<div class="input-group input-group-sm mb-3">
								<input type="text" class="form-control" placeholder="輸入Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append ">
									<button class="btn btn-outline-light" type="button">送出</button>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</footer>



	</div>


	<!-- loginModel -->
	<div class="modal fade" id="loginModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-loch">
					<h5 class="modal-title text-white" id="exampleModalLabel">登入</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入email">
							<small id="emailHelp" class="form-text text-muted">我們絕不會隨意將你的 email 給予第三者</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">密碼</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="請輸入密碼">
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input"> 記住帳號
							</label>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<a href="" class="mr-auto" data-dismiss="modal" data-toggle="modal" data-target="#registerModel">切換到註冊</a>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
					<button type="button" class="btn btn-loch text-white">登入</button>
				</div>
			</div>
		</div>
	</div>





	<!-- registerModel -->
	<div class="modal fade" id="registerModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header bg-loch">
					<h5 class="modal-title text-white" id="exampleModalLabel">註冊seaside</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<h3>seaside</h3>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae quisquam ipsa dolore, officiis maiores impedit
								laboriosam tempore earum eos minima!</p>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae quisquam ipsa dolore, officiis maiores impedit
								laboriosam tempore earum eos minima!</p>

						</div>
						<div class="col">
							<form>
								<div class="form-group">
									<label for="exampleInputEmail1">Email</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入email">
									<small id="emailHelp" class="form-text text-muted">我們絕不會隨意將你的 email 給予第三者</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">密碼</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="請輸入密碼">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">確認密碼</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="請確認密碼">
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input"> 同意條款
									</label>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="" class="mr-auto" data-dismiss="modal" data-toggle="modal" data-target="#loginModel">切換到登入</a>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
					<button type="button" class="btn btn-loch text-white">註冊</button>
				</div>
			</div>
		</div>
	</div>




	<!-- loginModel -->
	<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-loch">
					<h5 class="modal-title text-white" id="exampleModalLabel">查詢</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="input-group mb-3">
						<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-loch" type="button">查詢</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!-- trash Model -->
	<div class="modal" id="trashModel" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white">刪除商品</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>是否確認刪除商品</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary">否</button>
					<button type="button" class="btn btn-outline-danger px-5" data-dismiss="modal">是</button>
				</div>
			</div>
		</div>
	</div>

	<!--  trash Model END  -->








	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
	 crossorigin="anonymous"></script>
</body>

</html>