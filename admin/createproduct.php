<?php 
error_reporting(1);
$con=mysqli_connect("localhost","root","","phpojt");


if(isset($_POST['insert']))
{
	
	$pname = $_POST['pname'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	
	$p_img = $_FILES['p_img']['name'];
	
	
	
	move_uploaded_file($_FILES['p_img']['tmp_name'],"product_images/$p_img");
	
	$insert_p = "INSERT INTO tblitem VALUES('','$pname','$category','$price','$description','$p_img')";
	$query = mysqli_query($con,$insert_p);
	echo "<script>alert('Product has been successfully inserted into the database.')</script>";
	echo "<script>window.open('createproduct.php','_self')</script>";	
	
	
}




?>





<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>DeskApp</title>

	<!-- Site favicon -->
	<link
	rel="apple-touch-icon"
	sizes="180x180"
	href="vendors/images/apple-touch-icon.png"
	/>
	<link
	rel="icon"
	type="image/png"
	sizes="32x32"
	href="vendors/images/favicon-32x32.png"
	/>
	<link
	rel="icon"
	type="image/png"
	sizes="16x16"
	href="vendors/images/favicon-16x16.png"
	/>

	<!-- Mobile Specific Metas -->
	<meta
	name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1"
	/>

	<!-- Google Font -->
	<link
	href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
	rel="stylesheet"
	/>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
	<link
	rel="stylesheet"
	type="text/css"
	href="vendors/styles/icon-font.min.css"
	/>
	<link
	rel="stylesheet"
	type="text/css"
	href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
	/>
	<link
	rel="stylesheet"
	type="text/css"
	href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
	/>
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script
	async
	src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
	></script>
	<script
	async
	src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
	crossorigin="anonymous"
	></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
			var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	

	<div class="header">
		<div class="header-left">
			<div class="menu-icon bi bi-list"></div>
			
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a
					class="dropdown-toggle no-arrow"
					href="javascript:;"
					data-toggle="right-sidebar"
					>
					<i class="dw dw-settings2"></i>
				</a>
			</div>
		</div>
		
		<div class="user-info-dropdown">
			<div class="dropdown">
				<a
				class="dropdown-toggle"
				href="#"
				role="button"
				data-toggle="dropdown"
				>
				<span class="user-icon">
					<img src="vendors/images/photo1.jpg" alt="" />
				</span>
				<span class="user-name">KoThet</span>
			</a>
			<div
			class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
			>
			<a class="dropdown-item" href="thetnaingtun.php"
			><i class="dw dw-user1"></i> Profile</a
			>
			
			<a class="dropdown-item" href="logout.php"
			><i class="dw dw-logout"></i> Log Out</a
			>
		</div>
	</div>
</div>
<div class="github-link">
	<a href="https://github.com/ThetNaingTunVenus" target="_blank"
	><img src="vendors/images/github.svg" alt="github"
	/></a>
</div>
</div>
</div>

<div class="right-sidebar">
	<div class="sidebar-title">
		<h3 class="weight-600 font-16 text-blue">
			Layout Settings
			<span class="btn-block font-weight-400 font-12"
			>User Interface Settings</span
			>
		</h3>
		<div class="close-sidebar" data-toggle="right-sidebar-close">
			<i class="icon-copy ion-close-round"></i>
		</div>
	</div>
	<div class="right-sidebar-body customscroll">
		<div class="right-sidebar-body-content">
			<h4 class="weight-600 font-18 pb-10">Header Background</h4>
			<div class="sidebar-btn-group pb-30 mb-10">
				<a
				href="javascript:void(0);"
				class="btn btn-outline-primary header-white active"
				>White</a
				>
				<a
				href="javascript:void(0);"
				class="btn btn-outline-primary header-dark"
				>Dark</a
				>
			</div>

			<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
			<div class="sidebar-btn-group pb-30 mb-10">
				<a
				href="javascript:void(0);"
				class="btn btn-outline-primary sidebar-light"
				>White</a
				>
				<a
				href="javascript:void(0);"
				class="btn btn-outline-primary sidebar-dark active"
				>Dark</a
				>
			</div>

			<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
			<div class="sidebar-radio-group pb-10 mb-10">
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebaricon-1"
					name="menu-dropdown-icon"
					class="custom-control-input"
					value="icon-style-1"
					checked=""
					/>
					<label class="custom-control-label" for="sidebaricon-1"
					><i class="fa fa-angle-down"></i
					></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebaricon-2"
					name="menu-dropdown-icon"
					class="custom-control-input"
					value="icon-style-2"
					/>
					<label class="custom-control-label" for="sidebaricon-2"
					><i class="ion-plus-round"></i
					></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebaricon-3"
					name="menu-dropdown-icon"
					class="custom-control-input"
					value="icon-style-3"
					/>
					<label class="custom-control-label" for="sidebaricon-3"
					><i class="fa fa-angle-double-right"></i
					></label>
				</div>
			</div>

			<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
			<div class="sidebar-radio-group pb-30 mb-10">
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebariconlist-1"
					name="menu-list-icon"
					class="custom-control-input"
					value="icon-list-style-1"
					checked=""
					/>
					<label class="custom-control-label" for="sidebariconlist-1"
					><i class="ion-minus-round"></i
					></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebariconlist-2"
					name="menu-list-icon"
					class="custom-control-input"
					value="icon-list-style-2"
					/>
					<label class="custom-control-label" for="sidebariconlist-2"
					><i class="fa fa-circle-o" aria-hidden="true"></i
					></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebariconlist-3"
					name="menu-list-icon"
					class="custom-control-input"
					value="icon-list-style-3"
					/>
					<label class="custom-control-label" for="sidebariconlist-3"
					><i class="dw dw-check"></i
					></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebariconlist-4"
					name="menu-list-icon"
					class="custom-control-input"
					value="icon-list-style-4"
					checked=""
					/>
					<label class="custom-control-label" for="sidebariconlist-4"
					><i class="icon-copy dw dw-next-2"></i
					></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebariconlist-5"
					name="menu-list-icon"
					class="custom-control-input"
					value="icon-list-style-5"
					/>
					<label class="custom-control-label" for="sidebariconlist-5"
					><i class="dw dw-fast-forward-1"></i
					></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input
					type="radio"
					id="sidebariconlist-6"
					name="menu-list-icon"
					class="custom-control-input"
					value="icon-list-style-6"
					/>
					<label class="custom-control-label" for="sidebariconlist-6"
					><i class="dw dw-next"></i
					></label>
				</div>
			</div>

			<div class="reset-options pt-30 text-center">
				<button class="btn btn-danger" id="reset-settings">
					Reset Settings
				</button>
			</div>
		</div>
	</div>
</div>

<div class="left-side-bar">
	<div class="brand-logo">
		<a href="#">
			<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
			<img
			src="vendors/images/deskapp-logo-white.svg"
			alt=""
			class="light-logo"
			/>
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">
				
				
				<li>
					<a href="index.php" class="dropdown-toggle no-arrow">
						<span class="micon bi bi-house-fill"></span
						>
						<span class="mtext">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="createproduct.php" class="dropdown-toggle no-arrow">
						<span class="micon bi bi-cart-plus-fill"></span
						><span class="mtext">Create Product</span>
					</a>
				</li>
				<li>
					<a href="product.php" class="dropdown-toggle no-arrow">
						<span class="micon bi bi-ui-checks"></span
						><span class="mtext">Product List</span>
					</a>
				</li>
				<li>
					<a href="orders.php" class="dropdown-toggle no-arrow">
						<span class="micon bi bi-cart-plus-fill"></span
						><span class="mtext">OrderList</span>
					</a>
				</li>
				<li>
					<a href="customerlist.php" class="dropdown-toggle no-arrow">
						<span class="micon bi bi-person-rolodex"></span
						><span class="mtext">CustomerList</span>
					</a>
				</li>
				<li>
					<div class="dropdown-divider"></div>
				</li>
				<li>
					<div class="sidebar-small-cap">Extra</div>
				</li>
				
			</ul>
		</div>
	</div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="pd-20 card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Create New Product</h4>
				</div>
				<div class="pb-20">					
					<form method="post" action="createproduct.php" enctype="multipart/form-data">
						<div class="form-group">
							<label>Item Name</label>
							<input class="form-control" type="text" name="pname">
						</div>
						<div class="form-group">
							<label>Select Category</label>
							<select
							class="custom-select2 form-control"
							name="category"
							style="width: 100%; height: 38px"
							>
							<optgroup label="Categories">
								<option value="MobilePhone">MobilePhone</option>
								<option value="Tablet">Tablet</option>
								<option value="Computer">Computer</option>
								<option value="Desktop">Desktop</option>
								<option value="Printer">Printer</option>
							</optgroup>
							
						</select>
					</div>
					
					<div class="form-group">
						<label>Sale Price</label>
						<input class="form-control" type="number" name="price">
					</div>
					
					<div class="form-group">
						<label>Image</label>
						<!-- <input name="img" type="file"> -->
						<input type="file" name="p_img" class="form-control-file form-control height-auto">
					</div>
					<div class="form-group">
						<label>Description</label>
						<input class="form-control" type="text" name="description">
					</div>
					<div class="form-group">

						<input type="submit" name="insert" value="Save Item" class="form-control btn btn-primary">
					</div>
					
					
				</form>



				<h4><?php echo $err;?></h4>

				<h4><?php echo $errimg;?></h4>

			</div>
		</div>
		

	</div>
	<div class="footer-wrap pd-20 mb-20 card-box">
		Developed By - Thet Naing Tun (STUDENT ID- 4475)
		
	</div>
</div>
</div>




<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="vendors/scripts/datatable-setting.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript
><iframe
src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
height="0"
width="0"
style="display: none; visibility: hidden"
></iframe
></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
