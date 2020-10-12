new WOW().init();

$(document).ready(function(){

	var table = $('#datatable').dataTable({
		"oLanguage": {
			"sStripClasses": "",
			"sSearch": "",
			"sSearchPlaceholder": "Enter Keywords Here",
			"sInfo": "_START_ -_END_ of _TOTAL_"
		},
		"columns" : [
			{ "width" : "5%" },
			{ "width" : "25%" },
			{ "width" : "32.5%" },
			{ "width" : "25%" },
			{ "width" : "12.5%" }
		],
		bAutoWidth: true,
		"autoWidth": true
	});

	$('select').formSelect();
	$('.materialboxed').materialbox();
	$('.parallax').parallax();
	$('.fixed-action-btn').floatingActionButton({ direction : 'left',hoverEnabled : true });
	$('.dropdown-trigger').dropdown({
		inDuration: 300,
		outDuration: 225,
		hover: true,
		belowOrigin: true,
		alignment: 'center' 
	});
	$('ul.tabs').tabs();
	$('.tooltipped').tooltip();
	$('.modal').modal();
	$('.collapsible').collapsible();
	$('.datepicker').datepicker({ container : 'body', format : 'dd-mm-yyyy', yearRange : 30 });
	$('.sidenav').sidenav({ edge : 'right', draggable: true });

	// $('.refresh-dt').click(function(){
	// 	$('#datatable').dataTable().api().ajax.reload();
	// });

	$('#datatable').on('click','#getModals',function(){
		var id = $(this).data('id');
		var page = $(location).attr('href');
		
		$.ajax({
			url: page + "/modal",
			method:"POST",
			data: {id : id},
			success:function(data)
		    {
				$('#take').append(data);
				var elems = $('#datamodals');
				var instances = M.Modal.init(elems, {
					onCloseEnd : function(){
						$('#take').empty();
					}
				});

				var instance = M.Modal.getInstance(elems);
				instance.open();
			},
			fail: function(xhr, textStatus, errorThrown){
				M.toast({html: "Request gagal"});
			}
		});
	});

	$('#datatable').on('click','#delete_data',function(){
		var id = $(this).data('id');
		var team = $(this).data('team');
		var page = $(location).attr('href');
		// console.log(id);
		var toastContent = '<span>Hapus Team '+team+' ?</span>&nbsp;&nbsp; <button class="btn-flat waves-effect waves-red red-text" id="lol" onclick="nowdelete('+id+');M.Toast.getInstance(this.parentElement).dismiss();">Yes</button> <button class="btn-flat waves-effect waves-green green-text" onclick="M.Toast.getInstance(this.parentElement).dismiss();">No</button>';
		M.toast({html: toastContent,displayLength : 8000});
	});

	$('.prev_').on('click', function() {
		$('.tabs').animate({
			scrollLeft: '-=100'
		}, 300, 'swing');
	});

	$('.next_').on('click', function() {
		$('.tabs').animate({
			scrollLeft: '+=100'
		}, 300, 'swing');
	});

	$('#refresh-captcha').click(function(){
		$('#captcha-image').attr('src', 'http://localhost/webitase/public/index/generatecaptcha');
		return false;
	});

	$(".switch").find("input[type=checkbox]").on("change",function() {
		var status = $(this).prop('checked');
		var id = $(this).data('id');
		var page = $(location).attr('href');
		// console.log(status);
		// console.log(page);
    	$.ajax({
			url: page + "/token",
			method:"POST",
			data: {id : id,status : status},
			success:function(data)
		    {
				M.toast({html: data});
			},
			fail: function(xhr, textStatus, errorThrown){
				M.toast({html: "Request gagal"});
			}
		});

	});

	$("input[name='klmpk']").on('click',function(){
		var select_ = $("input[name='klmpk']:checked").val();

		if(select_ == "ind")
		{
			$('#tes_b').css('display','none');$('.lol').css('display','none');
			$('#tes_a').removeClass('l4');$('#tes_a').addClass('l6');

			$('#anggota input:text').val('');$('.materialize-textarea').val('');$('input[type="email"]').val('');

			$('#anggota input:text').removeAttr("required");$('.materialize-textarea').removeAttr("required");
			$('input[type="email"]').removeAttr("required");

		} else {
			$('#tes_b').css('display','block');$('.lol').css('display','block');
			$('#tes_a').removeClass('l6');$('#tes_a').addClass('l4');

			$('#anggota input:text').attr("required", true);$('.materialize-textarea').attr("required", true);
			$('input[type="email"]').attr("required", true);
		}
	});

	// var wrapper = $('#new');

	$('input[name="tgl_anggota2"] .datepicker').on('click',function(e){
		e.preventDefault;

		$(this).trigger('open', ['focus']);
	});

	$("input[name='sum_tim']").on('click',function(){

		var button_sum = $("input[name='sum_tim']:checked").val();

		if(button_sum == 2)
		{
			console.log(button_sum);
			$('#anggota').append('<div id="new"></div>');

			$('#new').append('<div id="new_a" class="col s12 head-anggota white-text"> <i class="material-icons left">group</i> <span class="left">Anggota 2</span> </div>');
			$('#new').append('<div id="new_a" class="input-field col s12"> <i class="material-icons prefix">account_box</i> <input id="icon_anggota_2" name="nm_anggota2" type="text" class="validate" required> <label for="icon_anggota_2">Nama Lengkap</label> </div>');
			$('#new').append('<div id="new_a" class="input-field col s12 l6"> <i class="material-icons prefix">location_city</i> <input id="icon_kampus_ang2" name="kampus_anggota2" type="text" class="validate" required> <label for="icon_kampus_ang2">Kampus</label> </div>');
			$('#new').append('<div id="new_a" class="input-field col s12 l6"> <i class="material-icons prefix">school</i> <input id="icon_prodi_ang2" name="prodi_anggota2" type="text" class="validate" required> <label for="icon_prodi_ang2">Jurusan / Prodi / Fakultas</label> </div>');
			$('#new').append('<div id="new_a" class="input-field col s6 l4"> <i class="material-icons prefix">place</i> <input id="icon_tempat_ang2" name="tempat_anggota2" type="text" class="validate" required> <label for="icon_tempat_ang2">Tempat</label> </div>');
			$('#new').append('<div id="new_a" class="input-field col s6 l8"> <i class="material-icons prefix">date_range</i> <input id="icon_tgl_ang2" name="tgl_anggota2" type="text" class="validate datepicker" placeholder="dd/mm/yyyy" required> <label for="icon_tgl_ang2">Tanggal Lahir</label> </div>');
			$('#new').append('<div id="new_a" class="input-field col s12"> <i class="material-icons prefix">my_location</i> <textarea id="icon_alamat_ang2" class="materialize-textarea" name="alamat_anggota2" required="required"></textarea> <label for="icon_alamat_ang2">Alamat</label> </div>');
			$('#new').append('<div id="new_a" class="input-field col s12 l6"> <i class="material-icons prefix">phone</i> <input id="icon_phone_ang2" name="telp_anggota2" type="text" class="validate" required> <label for="icon_phone_ang2">No. Handphone</label> </div>');
			$('#new').append('<div id="new_a" class="input-field col s12 l6"> <i class="material-icons prefix">email</i> <input id="icon_email_ang2" name="email_anggota2" type="email" class="validate" required> <label for="icon_email_ang2">Email</label> </div>');
		} else {
			$('#new_a').parent('div').remove();
		}

	});

	$("input[name='sum_timb']").on('click',function(){

		var button_sum = $("input[name='sum_timb']:checked").val();

		if(button_sum == 2)
		{
			// console.log(button_sum);
			if($('#new1').length)
			{
				$('#new_1').parent('div').remove();

				if($('#new2').length)
				{
					$('#new_2').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}
				}
			}
			else if($('#new2').length){

				$('#new_2').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}

			} else if($('#new3').length)
			{
				$('#new_3').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}

				} else if($('#new2').length) {
					$('#new_2').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}
			}

			$('#anggota').append('<div id="new1"></div>');

			$('#new1').append('<div id="new_1" class="col s12 head-anggota white-text"> <i class="material-icons left">group</i> <span class="left">Anggota 2</span> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12"> <i class="material-icons prefix">account_box</i> <input id="icon_anggota_2" name="nm_anggota2" type="text" class="validate" required> <label for="icon_anggota_2">Nama Lengkap</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">assignment_ind</i> <input id="icon_kampus2" name="nimanggota2" type="text" class="validate" required> <label for="icon_kampus2">NIM/NIS</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">school</i> <input id="icon_prodi2" name="univanggota2" type="text" class="validate" required> <label for="icon_prodi2">Kampus / Sekolah</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s6 l4"> <i class="material-icons prefix">place</i> <input id="icon_tempat2" name="tempatlahiranggota2" type="text" class="validate" required> <label for="icon_tempat2">Tempat Lahir</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s6 l8"> <i class="material-icons prefix">date_range</i> <input id="lol_2" name="tgllahiranggota2" type="text" class="validate datepicker" placeholder="dd-mm-yyyy" required> <label for="lol_2">Tanggal Lahir</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12"> <i class="material-icons prefix">my_location</i> <textarea id="icon_alamat2" class="materialize-textarea" name="alamatanggota2"></textarea> <label for="icon_alamat2">Alamat</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">phone</i> <input id="icon_phone2" name="telpanggota2" type="text" class="validate" required> <label for="icon_phone2">No. Handphone</label> </div>');
			$('#new1').append('<div class="input-field col s12 l6"> <i class="material-icons prefix">email</i> <input id="icon_email2" name="emailanggota2" type="email" class="validate" required> <label for="icon_email2">Email</label> </div>');

		} else if(button_sum == 3)
		{
			if($('#new1').length)
			{
				$('#new_1').parent('div').remove();

				if($('#new2').length)
				{
					$('#new_2').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}
				}
			}
			else if($('#new2').length){

				$('#new_2').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}

			} else if($('#new3').length)
			{
				$('#new_3').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}

				} else if($('#new2').length) {
					$('#new_2').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}
			}

			$('#anggota').append('<div id="new1"></div>');

			$('#new1').append('<div id="new_1" class="col s12 head-anggota white-text"> <i class="material-icons left">group</i> <span class="left">Anggota 2</span> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12"> <i class="material-icons prefix">account_box</i> <input id="icon_anggota_2" name="nm_anggota2" type="text" class="validate" required> <label for="icon_anggota_2">Nama Lengkap</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">assignment_ind</i> <input id="icon_kampus2" name="nimanggota2" type="text" class="validate" required> <label for="icon_kampus2">NIM/NIS</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">school</i> <input id="icon_prodi2" name="univanggota2" type="text" class="validate" required> <label for="icon_prodi2">Kampus / Sekolah</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s6 l4"> <i class="material-icons prefix">place</i> <input id="icon_tempat2" name="tempatlahiranggota2" type="text" class="validate" required> <label for="icon_tempat2">Tempat Lahir</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s6 l8"> <i class="material-icons prefix">date_range</i> <input id="lol_2" name="tgllahiranggota2" type="text" class="validate datepicker" placeholder="dd-mm-yyyy" required> <label for="lol_2">Tanggal Lahir</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12"> <i class="material-icons prefix">my_location</i> <textarea id="icon_alamat2" class="materialize-textarea" name="alamatanggota2"></textarea> <label for="icon_alamat2">Alamat</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">phone</i> <input id="icon_phone2" name="telpanggota2" type="text" class="validate" required> <label for="icon_phone2">No. Handphone</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">email</i> <input id="icon_email2" name="emailanggota2" type="email" class="validate" required> <label for="icon_email2">Email</label> </div>');

			$('#anggota').append('<div id="new2"></div>');

			$('#new2').append('<div id="new_2" class="col s12 head-anggota white-text"> <i class="material-icons left">group</i> <span class="left">Anggota 3</span> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12"> <i class="material-icons prefix">account_box</i> <input id="icon_anggota_3" name="nm_anggota3" type="text" class="validate" required> <label for="icon_anggota_3">Nama Lengkap</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">assignment_ind</i> <input id="icon_kampus3" name="nimanggota3" type="text" class="validate" required> <label for="icon_kampus3">NIM/NIS</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">school</i> <input id="icon_prodi3" name="univanggota3" type="text" class="validate" required> <label for="icon_prodi3">Kampus / Sekolah</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s6 l4"> <i class="material-icons prefix">place</i> <input id="icon_tempat3" name="tempatlahiranggota3" type="text" class="validate" required> <label for="icon_tempat3">Tempat Lahir</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s6 l8"> <i class="material-icons prefix">date_range</i> <input id="lol_3" name="tgllahiranggota3" type="text" class="validate datepicker" placeholder="dd-mm-yyyy" required> <label for="lol_3">Tanggal Lahir</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12"> <i class="material-icons prefix">my_location</i> <textarea id="icon_alamat3" class="materialize-textarea" name="alamatanggota3"></textarea> <label for="icon_alamat3">Alamat</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">phone</i> <input id="icon_phone3" name="telpanggota3" type="text" class="validate" required> <label for="icon_phone3">No. Handphone</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">email</i> <input id="icon_email3" name="emailanggota3" type="email" class="validate" required> <label for="icon_email3">Email</label> </div>');

		} else if(button_sum == 4) {
			if($('#new1').length)
			{
				$('#new_1').parent('div').remove();

				if($('#new2').length)
				{
					$('#new_2').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}
				}
			}
			else if($('#new2').length){

				$('#new_2').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}

			} else if($('#new3').length)
			{
				$('#new_3').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}

				} else if($('#new2').length) {
					$('#new_2').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}
			}

			$('#anggota').append('<div id="new1"></div>');

			$('#new1').append('<div id="new_1" class="col s12 head-anggota white-text"> <i class="material-icons left">group</i> <span class="left">Anggota 2</span> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12"> <i class="material-icons prefix">account_box</i> <input id="icon_anggota_2" name="nm_anggota2" type="text" class="validate" required> <label for="icon_anggota_2">Nama Lengkap</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">assignment_ind</i> <input id="icon_kampus2" name="nimanggota2" type="text" class="validate" required> <label for="icon_kampus2">NIM/NIS</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12"> <i class="material-icons prefix">school</i> <input id="icon_prodi2" name="univanggota2" type="text" class="validate" required> <label for="icon_prodi2">Kampus / Sekolah</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s6 l4"> <i class="material-icons prefix">place</i> <input id="icon_tempat2" name="tempatlahiranggota2" type="text" class="validate" required> <label for="icon_tempat2">Tempat Lahir</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s6 l8"> <i class="material-icons prefix">date_range</i> <input id="lol_2" name="tgllahiranggota2" type="text" class="validate datepicker" placeholder="dd-mm-yyyy" required> <label for="lol_2">Tanggal Lahir</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12"> <i class="material-icons prefix">my_location</i> <textarea id="icon_alamat2" class="materialize-textarea" name="alamatanggota2"></textarea> <label for="icon_alamat2">Alamat</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">phone</i> <input id="icon_phone2" name="telpanggota2" type="text" class="validate" required> <label for="icon_phone2">No. Handphone</label> </div>');
			$('#new1').append('<div id="new_1" class="input-field col s12 l6"> <i class="material-icons prefix">email</i> <input id="icon_email2" name="emailanggota2" type="email" class="validate" required> <label for="icon_email2">Email</label> </div>');

			$('#anggota').append('<div id="new2"></div>');

			$('#new2').append('<div id="new_2" class="col s12 head-anggota white-text"> <i class="material-icons left">group</i> <span class="left">Anggota 3</span> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12"> <i class="material-icons prefix">account_box</i> <input id="icon_anggota_3" name="nm_anggota3" type="text" class="validate" required> <label for="icon_anggota_3">Nama Lengkap</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">assignment_ind</i> <input id="icon_kampus3" name="nimanggota3" type="text" class="validate" required> <label for="icon_kampus3">NIM/NIS</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">school</i> <input id="icon_prodi3" name="univanggota3" type="text" class="validate" required> <label for="icon_prodi3">Kampus / Sekolah</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s6 l4"> <i class="material-icons prefix">place</i> <input id="icon_tempat3" name="tempatlahiranggota3" type="text" class="validate" required> <label for="icon_tempat3">Tempat Lahir</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s6 l8"> <i class="material-icons prefix">date_range</i> <input id="lol_3" name="tgllahiranggota3" type="text" class="validate datepicker" placeholder="dd-mm-yyyy" required> <label for="lol_3">Tanggal Lahir</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12"> <i class="material-icons prefix">my_location</i> <textarea id="icon_alamat3" class="materialize-textarea" name="alamatanggota3"></textarea> <label for="icon_alamat3">Alamat</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">phone</i> <input id="icon_phone3" name="telpanggota3" type="text" class="validate" required> <label for="icon_phone3">No. Handphone</label> </div>');
			$('#new2').append('<div id="new_2" class="input-field col s12 l6"> <i class="material-icons prefix">email</i> <input id="icon_email3" name="emailanggota3" type="email" class="validate" required> <label for="icon_email3">Email</label> </div>');

			$('#anggota').append('<div id="new3"></div>');

			$('#new3').append('<div id="new_3" class="col s12 head-anggota white-text"> <i class="material-icons left">group</i> <span class="left">Anggota 4</span> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s12"> <i class="material-icons prefix">account_box</i> <input id="icon_anggota_4" name="nm_anggota4" type="text" class="validate" required> <label for="icon_anggota_4">Nama Lengkap</label> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s12 l6"> <i class="material-icons prefix">assignment_ind</i> <input id="icon_kampus4" name="nimanggota4" type="text" class="validate" required> <label for="icon_kampus4">NIM/NIS</label> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s12 l6"> <i class="material-icons prefix">school</i> <input id="icon_prodi4" name="univanggota4" type="text" class="validate" required> <label for="icon_prodi4">Kampus / Sekolah</label> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s6 l4"> <i class="material-icons prefix">place</i> <input id="icon_tempat4" name="tempatlahiranggota4" type="text" class="validate" required> <label for="icon_tempat4">Tempat Lahir</label> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s6 l8"> <i class="material-icons prefix">date_range</i> <input id="lol_4" name="tgllahiranggota4" type="text" class="validate datepicker" placeholder="dd-mm-yyyy" required> <label for="lol_4">Tanggal Lahir</label> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s12"> <i class="material-icons prefix">my_location</i> <textarea id="icon_alamat4" class="materialize-textarea" name="alamatanggota4"></textarea> <label for="icon_alamat3">Alamat</label> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s12 l6"> <i class="material-icons prefix">phone</i> <input id="icon_phone4" name="telpanggota4" type="text" class="validate" required> <label for="icon_phone4">No. Handphone</label> </div>');
			$('#new3').append('<div id="new_3" class="input-field col s12 l6"> <i class="material-icons prefix">email</i> <input id="icon_email4" name="emailanggota4" type="email" class="validate" required> <label for="icon_email4">Email</label> </div>');			

		} else {
			if($('#new1').length)
			{
				$('#new_1').parent('div').remove();

				if($('#new2').length)
				{
					$('#new_2').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}
				}
			}
			else if($('#new2').length){

				$('#new_2').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new3').length)
					{
						$('#new_3').parent('div').remove();
					}

				} else if($('#new3').length) {
					$('#new_3').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}

			} else if($('#new3').length)
			{
				$('#new_3').parent('div').remove();

				if($('#new1').length)
				{
					$('#new_1').parent('div').remove();

					if($('#new2').length)
					{
						$('#new_2').parent('div').remove();
					}

				} else if($('#new2').length) {
					$('#new_2').parent('div').remove();

					if($('#new1').length)
					{
						$('#new_1').parent('div').remove();
					}
				}
			}
		}

	});

	$('.preloader-background').delay(1600).fadeOut('slow',function(){
		$('body').removeClass('loading');
	});
	$('.preloader-wrapper').delay(1600).fadeOut();

	$('.dx1').on('click', function() {
		$('#info').addClass('wow fadeInUp animated');
		$('#reg').removeClass('wow fadeIn animated');
	});

	$('.dx2').on('click', function() {
		$('#reg').addClass('wow fadeIn animated');
		$('#info').removeClass('wow fadeInUp animated');
	});

	console.log($(window).height() - $(window).scrollTop());


	/* 			Hide Navbar			 */
	var prevScrollpos = 0,
		headerOrg = $('#navwrap').height();

	$('#navbar').height($('#navwrap').height());
	/*-------------------------------*/

	/* 			scrollspy			 */
	var div = $("#divShow");
	var nav = $('nav');
	var pos = div.position();
	var efek = $("#efek");
	/*-------------------------------*/

	if($(window).height() - $(window).scrollTop() < 608)
	{
		nav.addClass('blue-grey darken-4');
		nav.addClass('z-depth-1');
		// $('.atext').addClass('white');
		nav.removeClass('transparent');
		nav.removeClass('z-depth-0');
		// $('.atext').removeClass('blue-grey darken-4');
		// $('.img_').attr('src','assets/img/logoweb_.png');
	}

	$(window).scroll(function(){

		/* 			Hide Navbar			 */

		var currentScrollpos = $(this).scrollTop();
		if(currentScrollpos > headerOrg)
		{
			if(prevScrollpos > currentScrollpos)
			{
				$("#navbar").css('top','0');
			} else {
				$("#navbar").css('top','-100px');
			}
			
		} else {
			$("#navbar").css('top','0');
		}

		prevScrollpos = currentScrollpos;

		/*-------------------------------*/

		/* 			Scrollspy			 */
		var windowpos = $(window).scrollTop();

		if(windowpos >= 200)
		{
			div.addClass('wow zoomIn animated');
			div.removeClass('zoomOut');
			setTimeout( function(){
				$('#divShow').css('display','block');
			},200);

		} else {
			div.addClass('zoomOut');
			div.removeClass('zoomIn');
			setTimeout( function(){
				$('#divShow').css('display','none');
			},200);
		}

		if(windowpos > 0)
		{
			nav.addClass('blue-grey darken-4');
			nav.addClass('z-depth-1');
			// $('.atext').addClass('blue-grey-text text-darken-4');
			nav.removeClass('transparent');
			nav.removeClass('z-depth-0');
			// $('.atext').removeClass('white-text');
			// $('.img_').attr('src','assets/img/logoweb_.png');
		} else {
			nav.addClass('transparent');
			nav.addClass('z-depth-0');
			// $('.atext').addClass('white-text');
			nav.removeClass('blue-grey darken-4');
			nav.removeClass('z-depth-1');
			// $('.atext').removeClass('blue-grey-text text-darken-4');
			// $('.img_').attr('src','assets/img/logoweb.png');

			// if(windowpos - )

		}
		/*-------------------------------*/

	});

	$('a[href*="#"]')	  
	.not('[href="#"]')
	.not('[href="#0"]')
	.not('[href="#info"]')
	.not('[href="#reg"]')
	.not('[href="#proposal"]')
	.not('[href="#team"]')
	.not('[href="#tim"]')
	.not('[href="#ketua"]')
	.not('[href="#anggota"]')
	.click(function(event) {
		    
		if (
			location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
			&& 
			location.hostname == this.hostname
		) {
		      
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		     
			if (target.length) {
		        
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1500, function() {
		          
					var $target = $(target);
					$target.focus();
					
					// if ($target.is(":focus")) {
					// 	return false;
					// } else {
					// 	$target.attr('tabindex','-1');
					// 	$target.focus(); 
					// };
				});
			}
		}
	});

});

function nowdelete(id)
{
	$(document).ready(function(){
		var page = $(location).attr('href');
		$.ajax({
			url: page + "/delete",
			method:"POST",
			data: {id : id},
			success:function(data)
		    {
				// $('#take').append(data);
				// var elems = $('#datamodals');
				// var instances = M.Modal.init(elems, {
				// 	onCloseEnd : function(){
				// 		$('#take').empty();
				// 	}
				// });

				// var instance = M.Modal.getInstance(elems);
				// instance.open();
				M.toast({html: data});
			},
			fail: function(xhr, textStatus, errorThrown){
				M.toast({html: "Request gagal"});
			}
		});
	});
}