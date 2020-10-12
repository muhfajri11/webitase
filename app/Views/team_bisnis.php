<div class="row">
	<div class="col s12">
		<div id="tim">
			<div class="row">
				<div class="col s12" style="border-radius: 1em;background: #f5f5f5;border: 1px solid #e3e3e3;box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);padding-bottom: 0.5em;padding-top: 0.5em;">
					<p style="margin: 0 auto;display: block;" class="center">
						<span>Sebagai : </span>
						<label style="margin-right: 2em;margin-left: 2em;">
							<input class="with-gap" name="klmpk" type="radio" value="ind" checked />
							<span>Individu</span>
						</label>
						<label>
							<input class="with-gap" name="klmpk" type="radio" value="tim" />
							<span>Team</span>
						</label>
					</p>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">group_add</i>
					<input id="icon_team" type="text" name="nm_tim" class="validate" required>
					<label for="icon_team">Nama Team</label>
				</div>
				<div class="col s12 lol" style="border-radius: 1em;background: #f5f5f5;border: 1px solid #e3e3e3;box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);padding-bottom: 0.5em;padding-top: 0.5em;">
					<p style="margin: 0 auto;display: block;" class="center">
						<span>Banyak Anggota : </span>
						<label style="margin-right: 2em;margin-left: 2em;">
							<input class="with-gap" name="sum_tim" type="radio" value="1" checked />
							<span>1 Orang</span>
						</label>
						<label>
							<input class="with-gap" name="sum_tim" type="radio" value="2" />
							<span>2 Orang</span>
						</label>
					</p>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">library_books</i>
					<input id="icon_judul" type="text" name="judul" class="validate" required>
					<label for="icon_judul">Judul Proposal</label>
				</div>
				<div class="col s12" style="border-radius: 1em;background: #f5f5f5;border: 1px solid #e3e3e3;box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);padding-bottom: 0.5em;padding-top: 0.5em;">
					<div class="center">
						<img src="<?= $GLOBALS['path']; ?>/index/generatecaptcha" alt="Captcha Image" id="captcha-image" style="margin-left: 1em;" />
						<a class="blue-grey-text text-darken-4" id="refresh-captcha" style="cursor: pointer;"><i class="material-icons">replay</i></a>
					</div>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">settings_ethernet</i>
					<input id="captcha" type="text" name="captcha" class="validate" required>
					<label for="captcha">Captcha</label>
				</div>
			</div>
		</div>
		
		<div id="ketua">
			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix">account_box</i>
					<input id="icon_ketua" name="nm_ketua" type="text" class="validate" required>
					<label for="icon_ketua">Nama Lengkap</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">location_city</i>
					<input id="icon_kampus" name="kampus" type="text" class="validate" required>
					<label for="icon_kampus">Kampus</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">school</i>
					<input id="icon_prodi" name="prodi" type="text" class="validate" required>
					<label for="icon_prodi">Jurusan / Prodi / Fakultas</label>
				</div>
				<div class="input-field col s6 l4">
					<i class="material-icons prefix">place</i>
					<input id="icon_tempat" name="tempat" type="text" class="validate" required>
					<label for="icon_tempat">Tempat</label>
				</div>
				<div class="input-field col s6 l8">
					<i class="material-icons prefix">date_range</i>
					<input id="lol_" name="tgl" type="text" class="validate datepicker" placeholder="dd-mm-yyyy" required>
					<label for="lol_">Tanggal Lahir</label>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">my_location</i>
					<textarea id="icon_alamat" class="materialize-textarea" name="alamat_ketua"></textarea>
					<label for="icon_alamat">Alamat</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">phone</i>
					<input id="icon_phone" name="telp_ketua" type="text" class="validate" required>
					<label for="icon_phone">No. Handphone</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">email</i>
					<input id="icon_email" name="email_ketua" type="email" class="validate" required>
					<label for="icon_email">Email</label>
				</div>
			</div>
		</div>

		<div id="anggota">
			<div class="row">
				<div class="col s12 head-anggota white-text">
					<i class="material-icons left">group</i>
					<span class="left">Anggota 1</span>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">account_box</i>
					<input id="icon_anggota_1" name="nm_anggota1" type="text" class="validate">
					<label for="icon_anggota_1">Nama Lengkap</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">location_city</i>
					<input id="icon_kampus_ang1" name="kampus_anggota1" type="text" class="validate">
					<label for="icon_kampus_ang1">Kampus</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">school</i>
					<input id="icon_prodi_ang1" name="prodi_anggota1" type="text" class="validate">
					<label for="icon_prodi_ang1">Jurusan / Prodi / Fakultas</label>
				</div>
				<div class="input-field col s6 l4">
					<i class="material-icons prefix">place</i>
					<input id="icon_tempat_ang1" name="tempat_anggota1" type="text" class="validate">
					<label for="icon_tempat_ang1">Tempat</label>
				</div>
				<div class="input-field col s6 l8">
					<i class="material-icons prefix">date_range</i>
					<input id="icon_tgl_ang1" name="tgl_anggota1" type="text" class="validate datepicker" placeholder="dd/mm/yyyy">
					<label for="icon_tgl_ang1">Tanggal Lahir</label>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">my_location</i>
					<textarea id="icon_alamat_ang1" class="materialize-textarea" name="alamat_anggota1"></textarea>
					<label for="icon_alamat_ang1">Alamat</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">phone</i>
					<input id="icon_phone_ang1" name="telp_anggota1" type="text" class="validate">
					<label for="icon_phone_ang1">No. Handphone</label>
				</div>
				<div class="input-field col s12 l6">
					<i class="material-icons prefix">email</i>
					<input id="icon_email_ang1" name="email_anggota1" type="email" class="validate">
					<label for="icon_email_ang1">Email</label>
				</div>
			</div>
		</div>
	</div>
</div>