<?php 
session_start();
include("dashbordfun.php");

if ($_SESSION['sid'] == "") {
	// code...
	header('location:login.php');
}else{



 ?>


<?php 
error_reporting(1);
$con=mysqli_connect("localhost","root","","phpojt");
if (isset($_GET['action'])) {
	if ($_GET['action'] == "remove") {
		$rid = $_GET['id'];
		$rmv = "DELETE FROM `tblitem` WHERE id = $rid";
		$query = mysqli_query($con,$rmv);
	}
}


if(isset($_POST['utp'])){
	$pname = $_POST['pname'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$uid = $_POST['uid'];

	$upt = "UPDATE `tblitem` SET `pname`='$pname',`category`='$category',`price`='$price',`description`='$description' WHERE `id`='$uid'";
	$query = mysqli_query($con,$upt);
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
							<a href="productlist.php" class="dropdown-toggle no-arrow">
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
							<a href="register.php" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-person-rolodex"></span
								><span class="mtext">UserList</span>
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
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0"></h2>
				</div>
  
				<div class="row pb-10">
					<div class="col-xl-4 col-lg-4 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									
									<div class="weight-700 font-24 text-dark"><?php getTotalProduct(); ?></div>

									<div class="font-14 text-secondary weight-500">
										Total Product
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-calendar1"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php getTotalOrder(); ?></div>
									<div class="font-14 text-secondary weight-500">
										Total Order
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-heart"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php getTotalUser(); ?></div>
									<div class="font-14 text-secondary weight-500">
										Total User
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-stethoscope"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>



				
				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Item List</div>
					<table class="data-table table nowrap">
						<thead>
							<tr>
								<th class="table-plus">ItemName</th>
								<th>Category</th>
								<th>Price</th>
								<th>Description</th>
								
								<th class="datatable-nosort">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php 
									$con=mysqli_connect("localhost","root","","phpojt");
									$query = "SELECT * FROM tblitem";
									$result = mysqli_query($con,$query);

									while($row = mysqli_fetch_array($result)){?>
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										<div class="avatar mr-2 flex-shrink-0">
											<img
												src="image/<?= $row['image']; ?>"
												class="border-radius-100 shadow"
												width="40"
												height="40"
												alt=""
											/>
										</div>
										<div class="txt">
											<div class="weight-600"><?= $row['pname']; ?></div>
										</div>
									</div>
								</td>
								<td><?= $row['category']; ?></td>
								<td><?= $row['price']; ?></td>
								<td><?= $row['description']; ?></td>
								
								<td>
									<div class="table-actions">
										<a href="index.php?action=remove&id='<?= $row['id']; ?>'" data-color="#e95959"
											><i class="icon-copy dw dw-delete-3"></i
										></a>

										<a href="#" data-color="#265ed7"
										data-toggle="modal" data-target="#myModal-<?= $row['id']; ?>"
											>
											<i class="icon-copy dw dw-edit2"></i
										></a>
										<!-- ============================================== -->
										<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal-<?= $row['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title">Edit Item</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <form action="index.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
       
        
        	<div class="form-group">
										<label>Item Name</label>
										<input class="form-control" type="text" name="pname" value="<?= $row['pname']; ?>">
									</div>
									<div class="form-group">
										<label>Select Category</label>
										<select
										class="custom-select2 form-control"
										name="category"
										style="width: 75%; height: 38px"
										>
										<optgroup label="Categories">
											<option selected value="<?= $row['category']; ?>"><?= $row['category']; ?></option>
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
									<input class="form-control" type="number" name="price" value="<?= $row['price']; ?>">
								</div>

								
								<div class="form-group">
									<label>Description</label>
									<input class="form-control" type="text" name="description" value="<?= $row['description']; ?>">
								</div>
								<input type="text" name="uid" value="<?= $row['id']; ?>" hidden>
        
      </div>
      <div class="modal-footer">
      	<input type="submit" name="upt" value="Update Item" class="btn btn-info">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
      </form>
    </div>

  </div>
</div>
										<!-- ========================================== -->

										
									</div>
								</td>
							</tr>
							<?php } ?>

							
						</tbody>
					</table>
				</div>

				

				

				<div class="footer-wrap pd-20 mb-20 card-box">
					
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					<span role="img" aria-label="gratitude">❤️</span>
					မင်္ဂလာပါ
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/ThetNaingTunVenus"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">MY GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/ThetNaingTunVenus"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				MY GITHUB
				<i class="fa fa-github"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Learn about the following Programmings:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				
				<i class="icon-copy ion-social-python"></i>
				<i class="icon-copy fa fa-wordpress" aria-hidden="true"></i>
				<i class="icon-copy ion-social-nodejs"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			 မင်္ဂလာပါ
		</button>
		<!-- welcome modal end -->
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


<?php 

}
 ?>
