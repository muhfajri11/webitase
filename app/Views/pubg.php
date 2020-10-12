<?php require_once '../app/Views/Part/header.php' ?>
<div id="upper-content">
		<div class="row no_mp">
			<div class="container">
				<div class="col s12 blue-grey darken-4 center-align white-text z-depth-2" style="overflow: hidden;">
					<h3><font style="color: #4db6ac;">PUBGM</font> Competition</h3>

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

						<p class="blue-grey-text darken-4" style="font-size: 1.1em;">PUBG MOBILE adalah sebuah Game Battle Royale Mobile yang dipublikasikan oleh Tencent dan telah mencapai 100 juta++ download di Google Play Store maupun Apps Store, dimana 100 pemain bertempur untuk bertahan hidup, sampai salah satu dari mereka menjadi pemenang.<br><br>
Himpunan Mahasiswa Sistem Informasi Institut Teknologi Telkom Purwokerto menyelenggarakan beberapa cabang perlombaan seperti IT, ART, SPORT, dan ESPORT atau disingkat menjadi ITASE. Dari cabang lomba tersebut dibagi menjadi beberapa kompetisi seperti pada cabang IT diperlombakan Business Plan, ART memperlombakan Video Log(VLOG) dan SI Got Talent, cabang SPORT memperlombakan kompetisi cabang olahraga Bulutangkis, dan terakhir ESPORT memperlombakan turnamen GAME MOBA PUBG Mobile.</p>

						<!-- <a href="https://drive.google.com/file/d/1axTGXEWK8DsU57-ZPsiGw4nmV1O5PXsG/view" target="_blank" class="btn waves-light waves-effect">Rulebook Vlog Competition</a> -->
					</div>

					<div id="reg" data-wow-delay="0.25s">
						<?php foreach ($data['link'] as $key) : ?>
						<iframe src="<?= $key->pubg_view; ?>" style="width: 100%;height: 40em;border: 0;border-radius: 20px;" class="z-depth-2 white"></iframe>

						<a href="<?= $key->pubg_dw; ?>" target="_blank" class="btn waves-light waves-effect" style="margin-top: 2em;">Download Rulebook</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require_once '../app/Views/Part/footer.php' ?>
