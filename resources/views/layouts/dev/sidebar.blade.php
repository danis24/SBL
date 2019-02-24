<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link" href="/home">
				<i class="mdi mdi-view-dashboard-outline menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#offices" aria-expanded="false" aria-controls="offices">
				<i class="mdi mdi-file-document-box-outline menu-icon"></i>
				<span class="menu-title">Offices</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="offices">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"> <a class="nav-link" href="">Branch</a>
					<li class="nav-item"> <a class="nav-link" href="">Departement</a>
					<li class="nav-item"> <a class="nav-link" href="">User Position</a>
					</li>
				</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
				<i class="mdi mdi-database menu-icon"></i>
				<span class="menu-title">Master Data</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="master">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="">Provinsi</a></li>
					<li class="nav-item"><a class="nav-link" href="">Daerah (Kab/Kota)</a></li>
					<li class="nav-item"><a class="nav-link" href="">Kecamatan</a></li>
					<li class="nav-item"><a class="nav-link" href="">Kelurahan</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('airport.index')}}">Master Airport</a></li>
					<li class="nav-item"><a class="nav-link" href="">Master Airlines</a></li>
					<li class="nav-item"><a class="nav-link" href="">Master Airlines Pricing</a></li>
					<li class="nav-item"><a class="nav-link" href="">Customer</a></li>
					<li class="nav-item"><a class="nav-link" href="">Booking Package</a></li>
					<li class="nav-item"><a class="nav-link" href="">Vendor</a></li>
					<li class="nav-item"><a class="nav-link" href="">Data Harga Vendor</a></li>
				</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#finances" aria-expanded="false" aria-controls="finances">
				<i class="mdi mdi-finance menu-icon"></i>
				<span class="menu-title">Finances</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="finances">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="">Account Receivable</a></li>
					<li class="nav-item"><a class="nav-link" href="">Account Payable</a></li>
				</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#logisticsManagement" aria-expanded="false"
				aria-controls="logisticsManagement">
				<i class="mdi mdi-ferry menu-icon"></i>
				<span class="menu-title">Logistics Management</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="logisticsManagement">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="">Surat Muatan Udara</a></li>
					<li class="nav-item"><a class="nav-link" href="">Booking</a></li>
					<li class="nav-item"><a class="nav-link" href="">Booking Charge List</a></li>
				</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#progressBooking" aria-expanded="false"
				aria-controls="progressBooking">
				<i class="mdi mdi-truck-fast menu-icon"></i>
				<span class="menu-title">Progress Booking</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="progressBooking">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="">Pembayaran</a></li>
					<li class="nav-item"><a class="nav-link" href="">Penjemputan</a></li>
					<li class="nav-item"><a class="nav-link" href="">Packing</a></li>
					<li class="nav-item"><a class="nav-link" href="">Packing Selesai</a></li>
					<li class="nav-item"><a class="nav-link" href="">Pengiriman</a></li>
					<li class="nav-item"><a class="nav-link" href="">Sampai di Cabang</a></li>
					<li class="nav-item"><a class="nav-link" href="">Pengantaran Ketujuan</a></li>
					<li class="nav-item"><a class="nav-link" href="">Barang Diterima</a></li>
					<li class="nav-item"><a class="nav-link" href="">Barang Diterima</a></li>
					<li class="nav-item"><a class="nav-link" href="">Pemesanan Selesai</a></li>
					<li class="nav-item"><a class="nav-link" href="">Pemesanan Selesai</a></li>
				</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#FleetManagement" aria-expanded="false"
				aria-controls="FleetManagement">
				<i class="mdi mdi-car menu-icon"></i>
				<span class="menu-title">Fleet Management</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="FleetManagement">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="">Jenis Armada</a></li>
					<li class="nav-item"><a class="nav-link" href="">Data Armada</a></li>
				</ul>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-toggle="collapse" href="#Monitoring" aria-expanded="false"
				aria-controls="Monitoring">
				<i class="mdi mdi-monitor-multiple menu-icon"></i>
				<span class="menu-title">Monitoring</span>
				<i class="menu-arrow"></i>
			</a>
			<div class="collapse" id="Monitoring">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="">Outstanding Booking</a></li>
					<li class="nav-item"><a class="nav-link" href="">Lead Time Control</a></li>
					<li class="nav-item"><a class="nav-link" href="">Finance Report</a></li>
					<li class="nav-item"><a class="nav-link" href="">Bandingkan Maskapai</a></li>
					<li class="nav-item"><a class="nav-link" href="">Tiket Support</a></li>
				</ul>
			</div>
		</li>
	</ul>
</nav>