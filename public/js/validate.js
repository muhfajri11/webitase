$(document).ready(function(){

	$.extend($.validator.messages, {
		required: "Bidang ini wajib diisi ...",
	});

	$.validator.addMethod(
		"dateFormat",
		function(value, element) {
			var re = /^\d{1,2}-\d{1,2}-\d{4}$/;

        // valid if optional and empty OR if it passes the regex test
        return (this.optional(element) && value=="") || re.test(value);
		},
		"Format tanggal harus dd-mm-yyyy"
	);

	$.validator.addMethod(
		"filesize",
		function(value, element, arg) {
			
			var maxsize = 1000;

			if((element.files[0].size > maxsize) && (element.files[0].size <= arg)){
	        	return true;
			}else{
				return false;
			}
		},
		"min = 1kb max = 1mb"
	);

	jQuery.validator.addMethod("alphanumeric", function(value, element) {
	    return this.optional(element) || /^\w+( +\w+)*$/i.test(value);
	}, "Letters, numbers, and underscores only please");

	$.validator.setDefaults({
		errorElement : "div",
		errorClass : 'invalid',
		errorPlacement: function(error, element) {

			var placement = $(element).data('error');
 
			if(placement) {
				$(placement).append(error)
			} else {
				error.insertAfter(element);
			}

		}
	});
	
	$('#team_').validate({
		ignore: "",
		rules: {
			nm_tim : { alphanumeric : true },
			judul : { alphanumeric : true },
			nm_ketua : { alphanumeric : true },
			kampus : { alphanumeric : true },
			prodi : { alphanumeric : true },
			tempat : { alphanumeric : true },
			alamat_ketua : { alphanumeric : true },

			nm_anggota1 : { alphanumeric : true },
			kampus_anggota1 : { alphanumeric : true },
			prodi_anggota1 : { alphanumeric : true },
			tempat_anggota1 : { alphanumeric : true },
			alamat_anggota1 : { alphanumeric : true },

			nm_anggota2 : { alphanumeric : true },
			kampus_anggota2 : { alphanumeric : true },
			prodi_anggota2 : { alphanumeric : true },
			tempat_anggota2 : { alphanumeric : true },
			alamat_anggota2 : { alphanumeric : true },

			tgl: { dateFormat : true },
			sum_tim: { min: 1, max: 2 },
			tgl_anggota1: { dateFormat : true },
			tgl_anggota2: { dateFormat : true },
			alamat_ketua : { required : true, alphanumeric : true },
			telp_ketua : { digits : true, minlength : 11, maxlength : 13 },
			telp_anggota1 : { digits : true, minlength : 11, maxlength : 13 },
			telp_anggota2 : { digits : true, minlength : 11, maxlength : 13 },
			captcha: {
              required: true,
              alphanumeric : true,
              remote: {
                url: 'http://localhost/webitase/public/index/verifcaptcha',
                type: 'post',
                data: {
                  username: function() {
                    return $( '#captcha' ).val();
                  }
                }
              }
            }
		},
		messages : {
			telp_ketua : { digits : "Masukan nomer handphone anda ..." },
			telp_anggota1 : { digits : "Masukan nomer handphone anda ..." },
			telp_anggota2 : { digits : "Masukan nomer handphone anda ..." },
			captcha: {
              remote: "Enter the correct text"
            }
		},
		submitHandler: function(form)
		{
			var page = $(location).attr("href");
			$.ajax({
				url: page + "/pendaftaran",
				method:"POST",
				data: $(form).serialize(),
				beforeSend: function()
				{
					$('#team').modal({ dismissible : true });
					$('body').addClass('.loading');
					$('.preloader-background').css('display','flex');
				},
				success:function(data)
			    {
			    	$('body').removeClass('.loading');
					$('body').css("overflow","visible");
					$('.preloader-background').css('display','none');
					$('#team_')[0].reset();

			    	M.toast({html: data, displayLength : 8000});
			    },
				fail: function(xhr, textStatus, errorThrown){
			    	M.toast({html: "Request gagal"});
				}
			});
			// M.toast({html: "Request gagal"});
		},
		invalidHandler: function()
		{
			M.toast({html: "Harap isi semua kolom ..."});
		}
	});

	$('#vlog_t').validate({
		ignore: "",
		rules: {
			sum_tim: { min: 1, max: 4 },
			nm_tim : { alphanumeric : true },
			judul : { alphanumeric : true },
			tema : { alphanumeric : true },

			nm_ketua : { alphanumeric : true },
			univketua : { alphanumeric : true },
			tempatlahir : { alphanumeric : true },
			alamatketua : { alphanumeric : true },

			nm_anggota1 : { alphanumeric : true },
			univanggota1 : { alphanumeric : true },
			tempatlahiranggota1 : { alphanumeric : true },
			alamatanggota1 : { alphanumeric : true },

			nm_anggota2 : { alphanumeric : true },
			univanggota2 : { alphanumeric : true },
			tempatlahiranggota2 : { alphanumeric : true },
			alamatanggota2 : { alphanumeric : true },

			nm_anggota3 : { alphanumeric : true },
			univketuaanggota3 : { alphanumeric : true },
			tempatlahiranggota3 : { alphanumeric : true },
			alamatanggota3 : { alphanumeric : true },

			nm_anggota4 : { alphanumeric : true },
			univketuaanggota4 : { alphanumeric : true },
			tempatlahiranggota4 : { alphanumeric : true },
			alamatanggota4 : { alphanumeric : true },

			nimketua : { digits : true },
			nimanggota1 : { digits : true },
			nimanggota2 : { digits : true },
			nimanggota3 : { digits : true },
			nimanggota4 : { digits : true },
			tgllahir: { dateFormat : true },
			tgllahiranggota1: { dateFormat : true },
			tgllahiranggota2: { dateFormat : true },
			tgllahiranggota3: { dateFormat : true },
			tgllahiranggota4: { dateFormat : true },
			alamatketua : { required : true },
			telpketua : { digits : true, minlength : 11, maxlength : 13 },
			telpanggota1 : { digits : true, minlength : 11, maxlength : 13 },
			telpanggota2 : { digits : true, minlength : 11, maxlength : 13 },
			telpanggota3 : { digits : true, minlength : 11, maxlength : 13 },
			telpanggota4 : { digits : true, minlength : 11, maxlength : 13 },
			captcha: {
              required: true,
              alphanumeric : true,
              remote: {
                url: 'http://localhost/webitase/public/index/verifcaptcha',
                type: 'post',
                data: {
                  username: function() {
                    return $( '#captcha' ).val();
                  }
                }
              }
            }
		},
		messages : {
			telpketua : { digits : "Masukan nomer handphone anda ..." },
			telpanggota1 : { digits : "Masukan nomer handphone anda ..." },
			telpanggota2 : { digits : "Masukan nomer handphone anda ..." },
			telpanggota3 : { digits : "Masukan nomer handphone anda ..." },
			telpanggota4 : { digits : "Masukan nomer handphone anda ..." },
			captcha: {
              remote: "Enter the correct text"
            }
		},
		submitHandler: function(form)
		{
			var page = $(location).attr("href");
			$.ajax({
				url: page + "/pendaftaran",
				method:"POST",
				data: $(form).serialize(),
				beforeSend: function()
				{
					$('#team').modal({ dismissible : true });
					$('body').addClass('.loading');
					$('.preloader-background').css('display','flex');
				},
				success:function(data)
			    {
			  		$('body').removeClass('.loading');
			  		$('body').css("overflow","visible");
					$('.preloader-background').css('display','none');
					$('#vlog_t')[0].reset();

			    	M.toast({html: data, displayLength : 8000});
			    },
				fail: function(xhr, textStatus, errorThrown){
			    	M.toast({html: "Request gagal"});
				}
			});

			// M.toast({html: "Request gagal"});

		},
		invalidHandler: function()
		{
			M.toast({html: "Harap isi semua kolom ..."});
		}
	});

	$('#bukti_').validate({
		ignore : "",
		rules : {
			image : { accept : "image/jpeg,image/png", filesize : 1000000 },
			name_team : { alphanumeric : true }
		},
		messages: {
			image : { accept : "file harus berupa png/jpg",filesize: "min = 1kb max = 1mb" }
		},
		submitHandler : function(form) {
			var page = $(location).attr("href");
			$.ajax({
				url: page + "/struct",
				method:"POST",
				data: new FormData(form),
				cache : false,
				contentType : false,
				processData : false,
				beforeSend: function()
				{
					$('#bukti').modal({ dismissible : true });
					$('body').addClass('.loading');
					$('.preloader-background').css('display','flex');
				},
				success:function(data)
			    {
			    	$('body').removeClass('.loading');
			    	$('body').css("overflow","visible");
					$('.preloader-background').css('display','none');
					$('#bukti_')[0].reset();

			    	M.toast({html: data, displayLength : 8000});
			    },
				fail: function(xhr, textStatus, errorThrown){
			    	M.toast({html: "Request gagal"});
				}
			});
		},
		invalidHandler: function()
		{
			M.toast({html: "Harap isi semua kolom ..."});
		}
	});

	$('#bukti_v').validate({
		ignore : "",
		rules : {
			image : { accept : "image/jpeg,image/png", filesize : 1000000 },
			name_team : { alphanumeric : true }
			// name_team : { email : true }
		},
		messages: {
			image : { accept : "file harus berupa png/jpg" }
		},
		submitHandler : function(form) {
			var page = $(location).attr("href");
			$.ajax({
				url: page + "/struct",
				method:"POST",
				data: new FormData(form),
				cache : false,
				contentType : false,
				processData : false,
				beforeSend: function()
				{
					$('#bukti').modal({ dismissible : true });
					$('body').addClass('.loading');
					$('.preloader-background').css('display','flex');
				},
				success:function(data)
			    {
			    	$('body').removeClass('.loading');
			    	$('body').css("overflow","visible");
					$('.preloader-background').css('display','none');
					$('#bukti_v')[0].reset();

			    	M.toast({html: data, displayLength : 8000});
			    },
				fail: function(xhr, textStatus, errorThrown){
			    	M.toast({html: "Request gagal"});
				}
			});
		},
		invalidHandler: function()
		{
			M.toast({html: "Harap isi semua kolom ..."});
		}
	});

	$('#prop_').validate({
		ignore : "",
		rules : {
			filed : { accept : "application/pdf", filesize : 7000000 },
			token : { alphanumeric : true }
			// name_team : { email : true }
		},
		messages: {
			filed : { accept : "file harus berupa .pdf", filesize : "min = 1kb max = 7mb" }
		},
		submitHandler : function(form) {
			var page = $(location).attr("href");
			$.ajax({
				url: page + "/proposal",
				method:"POST",
				data: new FormData(form),
				cache : false,
				contentType : false,
				processData : false,
				beforeSend: function()
				{
					$('#proposal').modal({ dismissible : true });
					$('body').addClass('.loading');
					$('.preloader-background').css('display','flex');
				},
				success:function(data)
			    {
			    	$('body').removeClass('.loading');
			    	$('body').css("overflow","visible");
					$('.preloader-background').css('display','none');
					$('#prop_')[0].reset();

			    	M.toast({html: data, displayLength : 8000});
			    },
				fail: function(xhr, textStatus, errorThrown){
			    	M.toast({html: "Request gagal"});
				}
			});
		},
		invalidHandler: function()
		{
			M.toast({html: "Harap isi semua kolom ..."});
		}
	});

	$('#loged').validate({
		ignore: "",
		rules: {
			user : { alphanumeric : true },
			pass : { alphanumeric : true }
		},
		submitHandler: function(form)
		{
			var page = $(location).attr("href");
			$.ajax({
				url: page + "/index/0",
				method:"POST",
				data: $(form).serialize(),
				beforeSend: function()
				{
					$('body').addClass('.loading');
					$('.preloader-background').css('display','flex');
				},
				success:function(data)
			    {
					$("#main").empty();
					$("#main").append(data);

			    	$('body').removeClass('.loading');
			    	$('body').css("overflow","visible");
					$('.preloader-background').css('display','none');
			    	// M.toast({html: data, displayLength : 8000});
			    },
				fail: function(xhr, textStatus, errorThrown){
			    	M.toast({html: "Request gagal"});
				}
			});
		},
		invalidHandler: function()
		{
			M.toast({html: "Harap isi semua kolom ..."});
		}
	});

	$('#link_').validate({
		ignore : "",
		submitHandler : function(form) {
			var page = $(location).attr("href");
			$.ajax({
				url: page + "/link_",
				method:"POST",
				data: $(form).serialize(),
				beforeSend: function()
				{
					$('#linkUpdate').modal({ dismissible : true });
					$('body').addClass('.loading');
					$('.preloader-background').css('display','flex');
				},
				success:function(data)
			    {
			    	$('body').removeClass('.loading');
			    	$('body').css("overflow","visible");
					$('.preloader-background').css('display','none');
					$('#link_')[0].reset();

			    	M.toast({html: data, displayLength : 8000});
			    },
				fail: function(xhr, textStatus, errorThrown){
			    	M.toast({html: "Request gagal"});
				}
			});
		},
		invalidHandler: function()
		{
			M.toast({html: "Harap isi semua kolom ..."});
		}
	});

});