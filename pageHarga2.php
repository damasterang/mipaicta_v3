<!DOCTYPE html>
<html>
	<head>
		<title>inaicta</title>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<script type="text/javascript">
			var idPage = 'harga2';
		</script>
		<script type="text/javascript" src="js/jqueryKu.js"></script>
	</head>
	<body>
		<div id="headerPlacePage"></div>

		<div id="main">
			<div id="content">
				<div class="contentItem">
					<!-- <div class="bigBrow">
						<div class="imgWrapper">
							<img src="img/phone.jpg" alt="phone" class="imgItem">
						</div>
						<div class="tipe">LG LG LG LG LG</div>
						<div class="wrapperPercent">
							<div class="percent" style="height: 90px"></div>
							<div class="percentVal">90%</div>
						</div>
					</div> -->
				</div>
				<div class="page">
					<!-- <button class="pageBtn">page 1</button>
					<button class="pageBtn">page 2</button>
					<button class="pageBtn">page 3</button>
					<button class="pageBtn">page 4</button> -->
				</div>
			</div>
			<div id="bottomOption">
				<div id="lineOne">
					<div class="optionKateg">
						<div class="kategName">OS</div>
						<select name="os" class="optionSelect">
							<option value="android">Android</option>
                  </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">DS</div>
						 <select name="ds" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="y">Ya</option>
                         <option value="">Tidak</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">MI</div>
						<select name="mi" class="optionSelect"> 
                         <option value="4gb">4 GB</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">ME</div>
						<select name="me" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="32gb">32 GB</option>
                         <option value="64gb">64 GB</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">RAM</div>
						<select name="ram" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="<1gb">&lt;1 GB</option>
                         <option value="1gb-2gb">1 - 2 GB</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">Pro</div>
						 <select name="cp" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="1core">Single core</option>
                         <option value="2core">Dual Core</option>
                         <option value="4core">Quad Core</option>
                     </select>
					</div>
				</div>
				<div id="lineTwo">
					<div class="optionKateg">
						<div class="kategName">Layar</div>
						<select name="lyr" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="3-5inc">3" - 5"</option>
                         <option value=">5inc">&gt;5"</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">KP</div>
						<select name="kp" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="4mp">&lt;4 MP</option>
                         <option value="4-8mp">4 - 8 MP</option>
                         <option value="9-13mp">9 - 13 MP</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">KS</div>
						 <select name="ks" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="vga">vga</option>
                         <option value="1-3mp">1 - 3 MP</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">Baterai</div>
						<select name="bat" class="optionSelect"> 
                         <option value="d">none</option> 
                         <option value="4gb">1000 - 2000 mAh</option>
                         <option value="8gb">2001 - 3000 mAh</option>
                         <option value="16gb">3001 - 4000 mAh</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">Harga</div>
						<select name="hrg" class="optionSelect">
                         <option value="1-2jt">1 - 2 jt</option>
                     </select>
					</div>
					<div class="optionKateg">
						<div class="kategName">Dur</div>
						<select name="dr" class="optionSelect">
                         <option value="">Tidak</option>
                     </select>
					</div>
				</div>
				<div class="optionGo">
					<button id="go">Go</button>
				</div>
			</div>
			<!-- <div id="steps">
				<div class="arrowUp"></div>
			</div> -->
		</div>

		<div id="headerPage">
			<div id="logoPage">
				<div class="mindReaderPage">Mind</div>
				<img src="img/logo3.png" alt="logo">
				<div class="mindReaderPage">Reader</div>
			</div>
			<div class="menu">

				<nav>
					<ul class="firstLevel">
						<li id="kategori">Kategori</li>
						<li><a class="hasSub" id="os" href="#">Operation Sistem</a></li>
						<li><a class="hasSub" id="merk" href="#">Merk</a></li>
						<li><a href="kamera.php">Good Camera</a></li>
						<li><a href="performa.php">Good Performance</a></li>
						<li><a href="baterai">Long Battery Life</a></li>
						<li><a href="durabilitas.php">Durability</a></li>
						<li><a href="dualsim.php">Dual Sim</a></li>
						<li><a class="hasSub" id="price" href="#">Price</a></li>
					</ul>
					<ul class="sub os">
						<li><a href="os1.php">Android</a></li>
						<li><a href="os2.php">iOS</a></li>
						<li><a href="os3.php">BlackBerry</a></li>
						<li><a href="os4.php">Windows Phone</a></li>
					</ul>
					<ul class="sub merk">
	               <li><a href="acer.php">Acer</a></li>
	               <li><a href="advan.php">Advan</a></li>
	               <li><a href="apple.php">Apple</a></li>
	               <li><a href="axioo.php">Axioo</a></li>
	               <li><a href="blackberry.php">Blackberry</a></li>
	               <li><a href="evercross.php">Evercross</a></li>
	               <li><a href="HTC.php">HTC</a></li>
	               <li><a href="Huawei.php">Huawei</a></li>
	               <li><a href="Imo.php">Imo</a></li>
	               <li><a href="Ktouch.php">Ktouch</a></li>
	               <li><a href="LG.php">LG</a></li>
	               <li><a href="Lenovo.php">Lenovo</a></li>
	               <li><a href="Nokia.php">Nokia</a></li>
	               <li><a href="Oppo.php">Oppo</a></li>
	               <li><a href="Polytron.php">Polytron</a></li>
	               <li><a href="Smartfren.php">Smartfren</a></li>
	               <li><a href="Sony.php">Sony</a></li>
	               <li><a href="Samsung.php">Samsung</a></li>
					</ul>
					<ul class="sub price">
						<li><a href="harga1.php">&lt; 1 Juta</a></li>
						<li><a href="harga2.php">1 - 2 Juta</a></li>
						<li><a href="harga3.php">2 - 3 Juta</a></li>
						<li><a href="harga4.php">3 - 4 Juta</a></li>
						<li><a href="harga5.php">4 - 5 Juta</a></li>
						<li><a href="harga6.php">5 - 6 Juta</a></li>
						<li><a href="harga7.php">6 - 7 Juta</a></li>
						<li><a href="harga8.php">&gt; 7 Juta</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- <div id="footer">
			<div id="itemFooter">Copyright &copy;2014</div>
		</div> -->
	</body>
</html>