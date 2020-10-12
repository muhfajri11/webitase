<?php require_once '../app/Views/Part/header.php' ?>
	<div id="upper-content">
		<div class="row no_mp">
			<div class="container">
				<div class="col s12 blue-grey darken-4 center-align white-text z-depth-2" style="overflow: hidden;">
					<h3><font style="color: #4db6ac;">SI Got Talent</font> Competition</h3>

					<ul class="tabs transparent">
						<li class="tab col s6"><a href="#info" class="dx1">Information</a></li>
						<li class="tab col s6"><a href="#reg" class="dx2">Rulebook</a></li>
						<!-- <li class="tab col s6"><a href="#reg" class="dx2">Reg</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="main-content">
		<div class="row no_mp" style="padding-bottom: 3em;padding-top: 2em;overflow: hidden;">
			<div class="container">
				<div class="col s12 text-jcenter">
					<div id="info" class="wow fadeInUp animated" data-wow-delay="0.25s" style="margin-bottom: 2em;">
						<h4 style="margin-bottom: 0.3em;">DESCRIPTION</h4>
						<hr style="display: block;margin: 0 auto;width: 10%;border: 2px solid #4db6ac;">

						<p class="blue-grey-text darken-4" style="font-size: 1.1em;">SI Got Talent merupakan salah satu rangkaian dalam kegiatan Diesnatalis SI 2019 ITASE 2.0 yaitu dalam bidang Art. SI Got Talent merupakan kegiatan ajang pencarian bakat yang diadakan oleh HMSI yang diikuti oleh mahasiswa/i prodi Sistem Informasi Institut Teknologi Telkom Purwokerto. SI Got Talent sendiri merupakan kegiatan yang diusulkan dari mahasiswa/i itu sendiri. Dalam kegiatan ini, mahasiswa/i diharapkan bisa berkesempatan menunjukkan bakat dan minatnya. SI Got Talent akan mencari 3 peserta terbaik yang nantinya akan mendapatkan penghargaan serta berkesempatan menampilkan bakatnya di acara puncak Diesnatalis SI 2019 .</p>

						<!-- <a href="https://drive.google.com/file/d/1axTGXEWK8DsU57-ZPsiGw4nmV1O5PXsG/view" target="_blank" class="btn waves-light waves-effect">Rulebook Vlog Competition</a> -->
					</div>

					<div id="reg" data-wow-delay="0.25s">
						<?php foreach ($data['link'] as $key) : ?>
						<iframe src="<?= $key->gtalent_view; ?>" style="width: 100%;height: 40em;border: 0;border-radius: 20px;" class="z-depth-2 white"></iframe>

						<a href="<?= $key->gtalent_dw; ?>" target="_blank" class="btn waves-light waves-effect" style="margin-top: 2em;">Download Rulebook</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php require_once '../app/Views/Part/footer.php' ?>