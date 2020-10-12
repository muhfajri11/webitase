<?php 
	foreach ($data['getdata'] as $getdata) : 
		$temp = explode("-", $getdata->tgl_ketua);
		$getdata->tgl_ketua = $temp[2]." - ".$temp[1]." - ".$temp[0];
?>


<div id="datamodals" class="modal modal-fixed-footer">
	<div class="modal-header white-text z-depth-1">
		<div class="row no_mp">
			<div class="col s12" style="padding: 1em 1em 0.5em 1.4em;">
				<i class="material-icons left" style="padding-bottom: 0;">group</i>
				<span class="left">Data Team</span>
			</div>
		</div>
		
	</div>
	<div class="modal-content">
		
		<div class="row" style="padding: 0;margin: 0;">
				
			<div class="input-field col s12 m6 l6">
				<i class="material-icons prefix blue-grey-text text-darken-4">group_add</i>
				<input id="icon_team" type="text" class="validate" value="<?= $getdata->namateam; ?>" disabled>
				<label for="icon_team" class="active">Nama Team</label>
			</div>
			<div class="input-field col s12 m6 l6">
				<i class="material-icons prefix blue-grey-text text-darken-4">library_books</i>
				<input id="icon_judul" type="text" class="validate" value="<?= $getdata->judulprop; ?>" disabled>
				<label for="icon_judul" class="active">Judul Proposal</label>
			</div>
			<div class="col s12 m6 l6" style="padding: 1em;">
				<i class="material-icons prefix blue-grey-text text-darken-4 left" style="padding-left: 0.25em;padding-right: 0em;">library_books</i>
				<span class="blue-grey-text text-lighten-1 left" style="font-size: 0.75em;display: block;padding-top: 0.3em;">
					File Proposal : 
					<span style="font-size: 1.5em;" class="blue-grey-text text-darken-4">
						<?php if($getdata->fileprop == NULL) { ?>
							Belum Upload
						<?php } else { ?>
						
						<a href="<?= $GLOBALS['path'] ?>/assets/doc/proposal/<?php echo $getdata->fileprop; ?>"> Lihat Proposal </a>
						<?php } ?>
					</span>
				</span>
			</div>
			<div class="col s12 m6 l6" style="padding: 1em;">
				<i class="material-icons prefix blue-grey-text text-darken-4 left" style="padding-left: 0.25em;padding-right: 0em;">image</i>
				<span class="blue-grey-text text-lighten-1 left" style="font-size: 0.75em;display: block;padding-top: 0.3em;">
					Bukti Pembayaran : 
					<span style="font-size: 1.5em;" class="blue-grey-text text-darken-4">
						<?php if($getdata->filestruct == NULL) { ?>
							Belum Upload
						<?php } else { ?>
						<a href="<?= $GLOBALS['path'] ?>/assets/struct/bisnis/<?php echo $getdata->filestruct; ?>" target="_blank"> Lihat Gambar </a>
						<?php } ?>
					</span>
				</span>
			</div>
			
			<?php if($getdata->token != NULL) : ?>
			<div class="input-field col s12">
				<i class="material-icons prefix blue-grey-text text-darken-4">lock_open</i>
				<input id="icon_token" type="text" class="validate" value="<?= $getdata->token; ?>" disabled>
				<label for="icon_token" class="active">Token</label>
			</div>
			<?php endif; ?>

			<div id="anggota">
				<div class="col s12 head-anggota white-text" style="margin-bottom: 0.5em;margin-top: 0.5em;">
					<i class="material-icons left">group</i>
					<span class="left">Ketua</span>
				</div>

				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">account_box</i>
					<input id="icon_nmketua" type="text" class="validate" value="<?= $getdata->name_ketua; ?>" disabled>
					<label for="icon_nmketua" class="active">Nama Lengkap</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">location_city</i>
					<input id="icon_kampusketua" type="text" class="validate" value="<?= $getdata->univ_ketua; ?>" disabled>
					<label for="icon_kampusketua" class="active">Kampus</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">school</i>
					<input id="icon_prodiketua" type="text" class="validate" value="<?= $getdata->prodi_ketua; ?>" disabled>
					<label for="icon_prodiketua" class="active">Jurusan / Prodi / Fakultas</label>
				</div>
				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">date_range</i>
					<input id="icon_tempatketua" type="text" class="validate" value="<?= $getdata->tlahir_ketua; ?>, <?= $getdata->tgl_ketua; ?>" disabled>
					<label for="icon_tempatketua" class="active">Tempat, Tanggal Lahir</label>
				</div>

				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">my_location</i>
					<textarea id="icon_alamatketua" class="materialize-textarea" disabled><?= $getdata->alamat_ketua; ?></textarea>
					<label for="icon_alamatketua" class="active">Alamat</label>
				</div>

				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">phone</i>
					<input id="icon_hpketua" type="text" class="validate" value="<?= $getdata->notelp_ketua; ?>" disabled>
					<label for="icon_hpketua" class="active">No. Handphone</label>
				</div>

				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">email</i>
					<input id="icon_emailketua" type="text" class="validate" value="<?= $getdata->email_ketua; ?>" disabled>
					<label for="icon_emailketua" class="active">Email</label>
				</div>
				
				<?php 
					if($getdata->sum_team == 1) {
				?>
				<div class="col s12 head-anggota white-text" style="margin-bottom: 0.5em;margin-top: 0.5em;">
					<i class="material-icons left">group</i>
					<span class="left">Anggota 1</span>
				</div>

				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">account_box</i>
					<input id="icon_nmanggota1" type="text" class="validate" value="<?= $getdata->name_anggota1; ?>" disabled>
					<label for="icon_nmanggota1" class="active">Nama Lengkap</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">location_city</i>
					<input id="icon_kampusanggota1" type="text" class="validate" value="<?= $getdata->univ_anggota1; ?>" disabled>
					<label for="icon_kampusanggota1" class="active">Kampus</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">school</i>
					<input id="icon_prodianggota1" type="text" class="validate" value="<?= $getdata->prodi_anggota1; ?>" disabled>
					<label for="icon_prodianggota1" class="active">Jurusan / Prodi / Fakultas</label>
				</div>
				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">date_range</i>
					<input id="icon_tempatanggota1" type="text" class="validate" value="<?= $getdata->tlahir_anggota1; ?>, <?= $getdata->tgl_anggota1; ?>" disabled>
					<label for="icon_tempatanggota1" class="active">Tempat, Tanggal Lahir</label>
				</div>

				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">my_location</i>
					<textarea id="icon_alamatanggota1" class="materialize-textarea" disabled><?= $getdata->alamat_anggota1; ?></textarea>
					<label for="icon_alamatanggota1" class="active">Alamat</label>
				</div>

				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">phone</i>
					<input id="icon_hpanggota1" type="text" class="validate" value="<?= $getdata->notelp_anggota1; ?>" disabled>
					<label for="icon_hpanggota1" class="active">No. Handphone</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">email</i>
					<input id="icon_emailanggota1" type="text" class="validate" value="<?= $getdata->email_anggota1; ?>" disabled>
					<label for="icon_emailanggota1" class="active">Email</label>
				</div>
				<?php 
					} else if($getdata->sum_team == 2) {
				?>
				
				<div class="col s12 head-anggota white-text" style="margin-bottom: 0.5em;margin-top: 0.5em;">
					<i class="material-icons left">group</i>
					<span class="left">Anggota 2</span>
				</div>

				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">account_box</i>
					<input id="icon_nmanggota2" type="text" class="validate" value="<?= $getdata->name_anggota2; ?>" disabled>
					<label for="icon_nmanggota2" class="active">Nama Lengkap</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">location_city</i>
					<input id="icon_kampusanggota2" type="text" class="validate" value="<?= $getdata->univ_anggota2; ?>" disabled>
					<label for="icon_kampusanggota2" class="active">Kampus</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">school</i>
					<input id="icon_prodianggota2" type="text" class="validate" value="<?= $getdata->prodi_anggota2; ?>" disabled>
					<label for="icon_prodianggota2" class="active">Jurusan / Prodi / Fakultas</label>
				</div>
				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">date_range</i>
					<input id="icon_tempatanggota2" type="text" class="validate" value="<?= $getdata->tlahir_anggota2; ?>, <?= $getdata->tgl_anggota2; ?>" disabled>
					<label for="icon_tempatanggota2" class="active">Tempat, Tanggal Lahir</label>
				</div>

				<div class="input-field col s12 blue-grey-text text-darken-4">
					<i class="material-icons prefix">my_location</i>
					<textarea id="icon_alamatanggota2" class="materialize-textarea" disabled><?= $getdata->alamat_anggota2; ?></textarea>
					<label for="icon_alamatanggota2" class="active">Alamat</label>
				</div>

				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">phone</i>
					<input id="icon_hpanggota2" type="text" class="validate" value="<?= $getdata->notelp_anggota2; ?>" disabled>
					<label for="icon_hpanggota2" class="active">No. Handphone</label>
				</div>
				<div class="input-field col s12 l6 blue-grey-text text-darken-4">
					<i class="material-icons prefix">email</i>
					<input id="icon_emailanggota2" type="text" class="validate" value="<?= $getdata->email_anggota2; ?>" disabled>
					<label for="icon_emailanggota2" class="active">Email</label>
				</div>
				<?php } ?>
			</div>
				
		</div>

	</div>
	<div class="modal-footer">
		<a class="modal-close waves-effect waves-green btn-flat">Close</a>
	</div>
</div>
<?php endforeach; ?>