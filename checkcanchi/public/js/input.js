$( document ).ready(function() {
	$('#more-cungtrach').on('click',function(){
		$(this).hide();
		$('.dropdown-cung').show();
	});
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	$('#btn-tra').on('click',function(){
		var elInput = $("#numberYear");
		var year = elInput.val();
		var gioitinh = elInput.attr('data-gioitinh');
		var id_cung = elInput.attr('data-id-cung');
		jQuery.ajax({
			url: '/postDataCungTrach',
			method:'post',
			data: {
				_token: CSRF_TOKEN,
				gioitinh:gioitinh,
				id_cung:id_cung,
				namsinh:year
			},
			dataType: 'JSON',
			success:function(res){
				if(infoMain.gioitinh == 1){
					$('#content-cungtrai').text(infoMain.cung);
					$('#content-cunggai').text(res.cung.cung);

				}else{
					$('#content-cunggai').text(infoMain.cung);
					$('#content-cungtrai').text(res.cung.cung);
				}
				if(res.cungtrach.id_battrach>4){
					$('.result-battrach span').css('color','red');
				}else{
					$('.result-battrach span').css('color','green');
				}
				$('.content-battrach').text(res.cungtrach.ten);
				$('.content-giainghia p').text(res.cungtrach.ketqua);
				
				$('#modalCungTrach').modal('show');
				
			}
		});
	});
});