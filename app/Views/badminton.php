<?php require_once '../app/Views/Part/header.php'; ?>
	<div id="upper-content">
		<div class="row no_mp">
			<div class="container">
				<div class="col s12 blue-grey darken-4 center-align white-text z-depth-2" style="overflow: hidden;">
					<h3><font style="color: #4db6ac;">Badminton</font> Competition</h3>

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
					<div id="info" class="wow fadeInUp animated" data-wow-delay="0.25s" style="margin-bottom: 2em;">
						<h4 style="margin-bottom: 0.3em;">DESCRIPTION</h4>
						<hr style="display: block;margin: 0 auto;width: 10%;border: 2px solid #4db6ac;">

						<p class="blue-grey-text darken-4" style="font-size: 1.1em;">Turnament badminton ini merupakan rangkaian dari perayaan dies natalis Program Studi S1 Sistem Informasi yaitu ITASE yang terbagi menjadi 4(empat) cabang perlombaan yaitu  IT, ART, SPORT, dan ESPORT atau disingkat menjadi ITASE. Dari cabang lomba tersebut dibagi menjadi beberapa kompetisi seperti pada cabang IT diperlombakan Business Plan, ART memperlombakan Video Log(VLOG) dan SI Got Talent, cabang SPORT memperlombakan kompetisi cabang olahraga Bulutangkis, dan terakhir ESPORT memperlombakan turnamen game moba PUBG Mobile.</p>

						<!-- <a href="https://drive.google.com/file/d/1hDRJ1qCusFWxmQ2PJy4LsUyeLdglmJgR/view" target="_blank" class="btn waves-light waves-effect">Rulebook Badminton Competition</a> -->
					</div>

					<div id="reg" data-wow-delay="0.25s">
						<?php foreach ($data['link'] as $key) : ?>
						<iframe src="<?= $key->badminton_view; ?>" style="width: 100%;height: 40em;border: 0;border-radius: 20px;" class="z-depth-2 white"></iframe>

						<a href="<?= $key->badminton_dw; ?>" target="_blank" class="btn waves-light waves-effect" style="margin-top: 2em;">Download Rulebook</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require_once '../app/Views/Part/footer.php'; ?>
