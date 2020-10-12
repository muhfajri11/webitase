<?php require_once '../app/Views/Part/header.php'; ?>
<div id="upper-content">
	<div class="row no_mp">
		<div class="container">
			<div class="col s12 blue-grey darken-4 center-align white-text z-depth-2" style="overflow: hidden;">
				<h3><font style="color: #4db6ac;">Vlog</font> Competition</h3>
				<ul class="tabs transparent">
					<li class="tab col s6"><a href="#info" class="dx1">Information</a></li>
					<li class="tab col s6"><a href="#reg" class="dx2">Rulebook</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="main-content">
	<div class="row no_mp" style="padding-bottom: 3em;padding-top: 1em;overflow: hidden;">
		<div class="container">
			<div class="col s12 text-jcenter">
				<div id="info" class="wow fadeInUp animated" data-wow-delay="0.25s">
					<h4 style="margin-bottom: 0.3em;">DESCRIPTION</h4>
					<hr style="display: block;margin: 0 auto;width: 10%;border: 2px solid #4db6ac;">
					<p class="blue-grey-text darken-4" style="font-size: 1.1em;">VLOG COMPETITION [ITASE 2.0] adalah sebuah kompetisi
						video blog yang mencakup semua daerah Jawa Tengah. VLOG
						COMPETITION diselenggarakan dalam memperingati Dies
						Natalis Program Studi Sistem Informasi oleh himpunan
						Mahasiswa Sistem Informasi Fakultas Teknologi Industri dan
						Informatika, Institut Teknologi Telkom Purwokerto. <br/></br>VLOG
						COMPETITION [ITASE 2.0] memiliki cakupan dalam
						Teknologi, Travel, Kuliner, Kesehatan. Kompetisi ini bersifat
						umum untuk masyarakat Jawa Tengah. VLOG COMPETITION [ITASE 2.0] merupakan kompetisi
						untuk menggali bakat dan potensi seni dari mahasiswa dan
						masyarakat Jawa Tengah terkhusus dari Video Blog. Selain itu, kompetisi vlog diharapkan bakat dan potensi peserta semakin
					meningkat.</p>
					<h4 style="margin-bottom: 0.3em;">NOTE</h4>
					<hr style="display: block;margin: 0 auto;width: 10%;border: 2px solid #4db6ac;">
						
					<p class="blue-grey-text darken-2" style="font-size: 1.1em;">
						*Pendaftaran Team dan Submit Bukti Pembayaran terdapat pada tombol menu berlogo <i class="small material-icons" >apps</i>
					</p>
				</div>
				<div id="reg" data-wow-delay="0.25s">
					<?php foreach ($data['link'] as $key) : ?>
						<iframe src="<?= $key->vlog_view; ?>" style="width: 100%;height: 40em;border: 0;border-radius: 20px;" class="z-depth-2 white"></iframe>

						<a href="<?= $key->vlog_dw; ?>" target="_blank" class="btn waves-light waves-effect" style="margin-top: 2em;">Download Rulebook</a>
						<?php endforeach; ?>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="fixed-action-btn">
	<a class="btn-floating btn-large z-depth-1 waves-light waves-effect tooltipped" data-position="top" data-tooltip="Menu">
		<i class="large material-icons">apps</i>
	</a>
	<ul>
		<li><a class="btn-floating z-depth-1 waves-light waves-effect tooltipped modal-trigger" data-position="top" data-tooltip="Submit Bukti Pembayaran" href="#bukti"><i class="material-icons">receipt</i></a></li>
		<li><a class="btn-floating z-depth-1 waves-light waves-effect tooltipped modal-trigger" data-position="top" data-tooltip="Pendaftaran Team" href="#team"><i class="material-icons">group_add</i></a></li>
	</ul>
</div>

<div id="bukti" class="modal modal-fixed-footer">
	<form method="post" enctype="multipart/form-data" id="bukti_v">
		<div class="modal-header white-text z-depth-1">
			<div class="row no_mp">
				<div class="col s12" style="padding: 1em 1em 0.5em 1.4em;">
					<i class="material-icons left" style="padding-bottom: 0;">receipt</i>
					<span class="left">Submit Bukti Pembayaran</span>
				</div>
			</div>
			
		</div>
		<div class="modal-content">
			
			<div class="row" style="padding: 0;margin: 0;">
				<div class="col s12" style="padding: 0;margin: 0;">
					
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">group_add</i>
							<input id="icon_name_team" type="text" name="name_team" class="validate" required>
							<label for="icon_name_team">Nama Team</label>
						</div>
						<div class="col s12">
							<div class="file-field input-field">
								<div class="btn">
									<span>Foto</span>
									<input type="file" name="image" required>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Tipe file hanya untuk .jpg/.png/.pdf">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a class="modal-close waves-effect waves-green btn-flat">Close</a>
			<button type="submit" name="submit" class="btn waves-effect waves-light">Submit</button>
		</div>
	</form>
</div>

<div id="team" class="modal modal-fixed-footer">
	<form method="post" id="vlog_t" novalidate>
		<div class="modal-header white-text z-depth-1">
			<div class="row no_mp">
				<div class="col s12 no_mp" style="padding: 1em 1em 0.5em 1.4em;">
					<i class="material-icons left" style="padding-bottom: 0;">group_add</i>
					<span class="left">Pendaftaran Team</span>
				</div>
				<div class="col s1 hide-on-med-and-up">
					<a class="prev_ white-text"><i class="medium material-icons">arrow_back_ios</i></a>
				</div>
				<div class="col s10 m12 l12" style="padding: 0;">
					<ul class="tabs tabs-fixed-width transparent">
						<li class="tab col s7 l6" id="tes_a"><a href="#tim">Tim</a></li>
						<li class="tab col s7 l6" id="tes_a"><a href="#ketua">Data Ketua</a></li>
						<li class="tab col s7 l4" id="tes_b"><a href="#anggota">Data Anggota</a></li>
					</ul>
				</div>
				<div class="col s1 hide-on-med-and-up">
					<a class="next_ white-text"><i class="medium material-icons">arrow_forward_ios</i></a>
				</div>
			</div>
		</div>
		<div class="modal-content" style="padding-top:1em;padding-bottom: 0;">
			<?php require_once '../app/Views/team_vlog.php'; ?>
		</div>
		<div class="modal-footer">
			<a class="modal-close waves-effect waves-green btn-flat">Close</a>
			<button type="submit" name="submit" class="btn waves-effect waves-light">Submit</button>
		</div>
	</form>
</div>

<?php require_once '../app/Views/Part/footer.php'; ?>