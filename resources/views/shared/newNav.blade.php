<style>
	.sidebar {
		background-image: url("/img/full-screen-image-3.jpg");
		background-repeat: no-repeat, repeat;
		background-size: cover; 
		background-attachment: fixed;
	}
</style>
<div class="wrapper">
	<div class="sidebar" data-color="blue" data-image="/img/full-screen-image-3.jpg">

		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="index.php" class="simple-text">
					پنل فروشگاه
				</a>
			</div>

			<ul class="nav ">
                <li class="active ">
					<a href="panel.php" class="btn btn-block">
						<i class="pe-7s-graph"></i>
						<p>داشبورد مدیریتی</p>
					</a>
				</li>
                <li class="active">
					<a href="user.hp">
						<i class="pe-7s-user"></i>
						<p>مشخصات فروشگاه</p>
					</a>
				</li>
                <li class="active">
					<a href="order.php">
						<i class="pe-7s-news-paper"></i>
						<p>لیست سفارشات</p>
					</a>
				</li>
                <li class="active">
					<a href="product.php">
						<i class="pe-7s-note2"></i>
						<p>لیست اجناس</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
						<span class="sr-only">باز کردن منو کناری</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
 						<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<p>
										Dropdown
										<b class="caret"></b>
									</p>

							  </a>
							  <ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							  </ul>
						</li>
						<li>
							<a href="logout.php">
								<p>خروج از حساب کاربری</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    </div>
</div>