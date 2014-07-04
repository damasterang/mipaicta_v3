$(document).ready(function(){

	$( '.hasSub' ).hover(function() {
		var id = $(this).attr('id');
		$(this).css({'background': '#2980B9', 'color': '#fff'});
			// $('.sub').hide();
		$('.'+id).css({
			visibility: 'visible',
			display: 'none'
		}).slideDown('fast');
	}, function() {
		$(this).css({'background': 'transparent', 'color': '#000'});
		var id = $(this).attr('id');
		$('.'+id).css({
			visibility: 'hidden'
		});
	});

	$('.imgTrigger').click(function(){
		$('.expandOption').fadeOut();
		var id = $(this).attr('id');
		var id = id.split("_");
		$('#'+id[1]+'_option').fadeIn();
	});

	$('.optionO').click(function(){
		var id = $(this).attr('id');
		var id = id.split("_");
		var inputVal = id[1];
		$('input[name='+id[0]+']').val(inputVal);
		$('#'+id[0]+'_val').text(id[2]);
		$('#'+id[0]+'_option').fadeOut();
	});

	$( '.sub' ).hover(function() {
		$(this).css({
			visibility: 'visible'
		});
	}, function() {
		$(this).slideUp('fast');
	});

	$('.os').hover(function() {
		$('#os').css({'background': '#2980B9', 'color': '#fff'});
	}, function() {
		$('#os').css({'background': 'transparent', 'color': '#000'});
	});

	$('.merk').hover(function() {
		$('#merk').css({'background': '#2980B9', 'color': '#fff'});
	}, function() {
		$('#merk').css({'background': 'transparent', 'color': '#000'});
	});

	$('.price').hover(function() {
		$('#price').css({'background': '#2980B9', 'color': '#fff'});
	}, function() {
		$('#price').css({'background': 'transparent', 'color': '#000'});
	});


	$(function() {
  		$('a[href*=#]:not([href=#])').click(function() {
    		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      	var target = $(this.hash);
      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
        		$('html,body').animate({
          		scrollTop: target.offset().top
        		}, 1000);
        		return false;
      	}
    		}
  		});
	});

	$(".circle").bind('mouseover',function(){
		$('.par').hide();
		$('#showCircle').show();
		var eqVal = $(this).index();
		$('.circleArrow').eq( eqVal ).fadeIn();
		$('.par').eq( eqVal ).fadeIn();
	});
	$(".circle").bind('mouseout',function(){
		$('.par').hide();
		$('.circleArrow').hide();
		// $('#KArrow, #SArrow').fadeOut();
		$('#showCircle').hide();
	});

	//////////
	//ajax
	/////////

	$('#go').click(function() {
		
		$('.contentItem').html("<div class='center middle loading'><img src='img/circle-loading-animation.gif'/></div>");
		$('.page').html('');

		var target = 'process.php';
		if (idPage == 'harga1') {
			target = 'processHarga.php?kk=harga1';
		} else if (idPage == 'harga2') {
			target = 'processHarga.php?kk=harga2';
		}

		$.post(target,
			{
				os : $("input[name='os']").val(),
				ds : $("input[name='ds']").val(),
				mi : $("input[name='mi']").val(),
				me : $("input[name='me']").val(),
				ram : $("input[name='ram']").val(),
				cp : $("input[name='cp']").val(),
				lyr : $("input[name='lyr']").val(),
				kp : $("input[name='kp']").val(),
				ks : $("input[name='ks']").val(),
				bat : $("input[name='bat']").val(),
				hrg : $("input[name='hrg']").val(),
				dr : $("input[name='dr']").val()
			},
			function(data) 
			{
				var newData = data.split("||"); // memisah data dari server menjadi array data_baru
				var outputHtml = '';
				for (i = 0; i < newData.length - 1; i++) {
					var newItem = newData[i].split('|'); // memisah data dari data_baru menjadi newItem
					// $string .= $merk . "|" . $tipe . "|" . $persen . "|" . $gambar . "||";
					var height = newItem[2]*1.8;

					outputHtml += "<div onclick='detailPlay("+newItem[4]+")' class='bigBrow'><div class='imgWrapper'><img src='"+newItem[3]+"' alt='phone' class='imgItem'></div><div class='tipe'>" + newItem[0] +" "+ newItem[1] + "</div><div class='wrapperPercent'><div class='percent' style='height: "+height+"px'></div><div class='whitePercent'></div><div class='percentVal'>"+newItem[2]+"%</div></div></div>";
					// <div class="wrapperPercent">
					// 		<div class="percent" style="height: 90px"></div>
					// 		<div class="percentVal">90%</div>
					// 	</div>
				}



				$('.contentItem').delay(2000).html(outputHtml)
				// $('#content').html(data);

				$('.whitePercent').animate({height: 0}, 5000);

				$.get('pageParser.php?calcPage=1205', 
					function(data) {
						$('.page').html(data);

						$('.pageBtn').eq(0).css({
							'color': '#2980B9',
							'background-color': '#fff',
							'border': '1px solid #2980B9'
						});						

						$('.pageBtn').click(function(){
							$('.pageBtn').css({
								'background-color': '#2980B9',
								'color': '#fff'
							});
							$(this).css({
								'color': '#2980B9',
								'background-color': '#fff',
								'border': '1px solid #2980B9'
							});
						});
				});

			});

	});


})

function pageGo (page) {

	$(this).css({
		'color': '#2980B9',
		'border': '1px solid #2980B9'
	});

	$.post('pageParser.php?showPage=1205',
		{
			page : page
		},
		function(data) {
			var newData = data.split("||"); // memisah data dari server menjadi array data_baru
			var outputHtml = '';
			for (i = 0; i < newData.length - 1; i++) {
				var newItem = newData[i].split('|'); // memisah data dari data_baru menjadi newItem
				var height = newItem[2]*1.8;
				outputHtml += "<div onclick='detailPlay("+newItem[4]+")' class='bigBrow'><div class='imgWrapper'><img src='"+newItem[3]+"' alt='phone' class='imgItem'></div><div class='tipe'>" + newItem[0] +" "+ newItem[1] + "</div><div class='wrapperPercent'><div class='percent' style='height: "+height+"px'></div><div class='whitePercent'></div><div class='percentVal'>"+newItem[2]+"%</div></div></div>";
			}

			
			$('.contentItem').html(outputHtml);

			$('.whitePercent').animate({height: 0}, 3000);
	});
}

function detailPlay(no){

	$('.menu').slideUp('fast');
	$('#bottomOption').slideUp(400);

	$.post('detailPlay.php',
		{
			id: no
		}, 
		function(data) {
			var newData = data.split("||"); // memisah data dari server menjadi array data_baru
			var outputHtml = '';
			for (i = 0; i < newData.length - 1; i++) {
				var newItem = newData[i].split('|'); // memisah data dari data_baru menjadi newItem
				// $string .= $id."|".$merk."|".$tipe."|".$os."|".$dualSim."|".$memoriInternal."|".$memoriEksternal."|".$layar."|".$ram."|".$prosessor."|".$kameraPrimer."|".$kameraSekunder."|".$baterai."|".$durability."|".$harga."||";
				if (newItem[9] = 1) {
					newItem[9] = 'Single Core';
				} else if(newItem[9] = 2){
					newItem[9] = 'Dual Core';
				} else if(newItem[9] = 4){
					newItem[9] = 'Quad Core';
				} else if(newItem[9] = 8){
					newItem[9] = 'Octa Core';
				}
				if (newItem[4] == 'Y') {
					newItem[4] = 'Ya';
				};
				outputHtml += '<div id="detailItem"><div id="wrapperItem"><div id="nameItem">'+newItem[1]+' - '+newItem[2]+'</div><img src="img/phone.png" alt="phone"><img onclick="closeWindow()" id="close" src="img/close.png"><table><tr><td><img src="img/os.png"></td><td class="addLeft">'+newItem[3]+'</td><td><img src="img/layar.png"></td><td class="addLeft">'+newItem[7]+' inc</td></tr><tr><td><img src="img/dualSim.png"></td><td class="addLeft">'+newItem[4]+'</td><td><img src="img/kameraPrimer.png"></td><td class="addLeft">'+newItem[10]+' MP</td></tr><tr><td><img src="img/memoriInternal.png"></td><td class="addLeft">'+newItem[5]+' GB</td>	<td><img src="img/kameraSekunder.png"></td><td class="addLeft">'+newItem[11]+' MP</td></tr><tr><td><img src="img/memoriEksternal.png"></td><td class="addLeft">'+newItem[6]+' GB</td><td><img src="img/baterai.png"></td><td class="addLeft">'+newItem[12]+' mAH</td></tr><tr><td><img src="img/ram.png"></td><td class="addLeft">'+newItem[8]+' GB</td><td><img src="img/durability.png"></td><td class="addLeft">'+newItem[13]+'</td></tr><tr><td><img src="img/prosesor.png"></td><td class="addLeft">'+newItem[9]+'</td><td><img src="img/rom.png"></td><td class="addLeft">Rp.'+newItem[14]+'</td></tr></table></div></div>';
			}
			$("#upDetail").html(outputHtml).fadeIn();
			$("#detailItem").fadeIn(300);
	});
}

function closeWindow(){
	$('#upDetail').hide(300);
	$('.menu').slideDown(300);
	$('#bottomOption').css('display', 'none').slideDown('fast');
}
