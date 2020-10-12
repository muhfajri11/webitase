<?php require_once "../app/Views/Part/upfile.php" ?>

<div id="upper-content-adm">
	<div class="row no_mp">
		<div class="container">
			<div class="col s12 blue-grey darken-4 center-align white-text z-depth-2" style="overflow: hidden;">
				<h3><font style="color: #4db6ac;">Admin Page</h3>
				<ul class="tabs transparent">
					<li class="tab col s6"><a href="#info" class="dx1">Bisnis Plan</a></li>
					<li class="tab col s6"><a href="#reg" class="dx2">Vlog</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div style="height: 13em;"></div>

<div id="main-content">
	<div class="row no_mp" id="main-adm" style="padding-bottom: 3em;padding-top: 1em;overflow: hidden;">
		<div class="container">
			<div class="col s12 text-jcenter">
				<div id="info" class="wow fadeInUp animated" data-wow-delay="0.25s">
					<div class="card material-table">
						<div class="table-header">
							<span class="table-title">List Pendaftar</span>
							<div class="actions">
								<!-- <a class="refresh-dt waves-effect btn-flat nopadding tooltipped" data-position="top" data-tooltip="Refresh Table"><i class="material-icons">loop</i></a> -->
								<a class="search-toggle waves-effect btn-flat nopadding tooltipped" data-position="top" data-tooltip="Search"><i class="material-icons">search</i></a>
							</div>
						</div>
						<table id="datatable">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Team</th>
									<th class="hide-on-small-only">Nama Ketua</th>
									<th>Verif</th>
									<th>Menu</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($data['query'] as $get) : ?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $get->namateam ?></td>
									<td class="hide-on-small-only"><?= $get->name_ketua ?></td>
									<td>
										<div class="switch">
											<label>
												Off
												<?php if($get->token == NULL) { ?>
													<input type="checkbox" data-id="<?= $get->id_team; ?>">
												<?php } else { ?>
													<input type="checkbox" data-id="<?= $get->id_team; ?>" checked>
												<?php } ?>
												<span class="lever"></span>
												On
											</label>
										</div>
									</td>
									<td>
										<a class="btn waves-effect waves-light tooltipped" id="getModals" style="padding-left: 0.5em;padding-right: 0.5em" data-position="top" data-tooltip="Lihat Data" data-id="<?= $get->id_team ?>"><i class="material-icons">storage</i></a>
										<a class="btn waves-effect waves-light tooltipped red" id="delete_data" style="padding-left: 0.5em;padding-right: 0.5em" data-position="top" data-tooltip="Hapus Data" data-id="<?= $get->id_team ?>" data-team="<?= $get->namateam ?>"><i class="material-icons">delete_forever</i></a>
									</td>
								</tr>
								<?php $no++; endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div id="reg" data-wow-delay="0.25s">
					test2
				</div>
			</div>
		</div>
	</div>
</div>

<div id="take"></div>


<div id="linkUpdate" class="modal modal-fixed-footer">
	<form method="post" id="link_" novalidate>
		<div class="modal-header white-text z-depth-1">
			<div class="row no_mp">
				<div class="col s12" style="padding: 1em 1em 0.5em 1.4em;">
					<i class="material-icons left" style="padding-bottom: 0;">link</i>
					<span class="left">Update Rulebook</span>
				</div>
			</div>
			
		</div>
		<div class="modal-content blue-grey-text text-darken-4">
			
			<div class="row" style="padding: 0;margin: 0;">
				<div class="input-field col s12">
					<select name="menu_select">
						<option value="" disabled selected>Choose your option</option>
						<option value="bisnis">Bisnis Plan</option>
						<option value="vlog">Vlog</option>
						<option value="gtalent">SI Got Talent</option>
						<option value="badminton">Badminton</option>
						<option value="pubg">PUBGM</option>
					</select>
					<label>Rulebook Select</label>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">file_copy</i>
					<input id="icon_fileBP" type="text" name="linkfile" class="validate" required>
					<label for="icon_fileBP">Link File</label>
				</div>
				<div class="input-field col s12">
					<i class="material-icons prefix">archive</i>
					<input id="icon_dwBP" type="text" name="dwfile" class="validate" required>
					<label for="icon_dwBP">Link Download</label>
				</div>
			</div>

		</div>
		<div class="modal-footer">
			<a class="modal-close waves-effect waves-green btn-flat">Close</a>
			<button type="submit" class="btn waves-effect waves-light">Submit</button>
		</div>
	</form>
</div>

<div class="fixed-action-btn">
	<a class="btn-floating btn-large z-depth-1 waves-light waves-effect tooltipped" data-position="top" data-tooltip="Menu">
		<i class="large material-icons">apps</i>
	</a>
	<ul>
		<li><a class="btn-floating z-depth-1 waves-light waves-effect tooltipped red" data-position="top" data-tooltip="Logout" href="#"><i class="material-icons">exit_to_app</i></a></li>

		<li><a class="btn-floating z-depth-1 waves-light waves-effect tooltipped modal-trigger" data-position="top" data-tooltip="Update Rulebook" href="#linkUpdate"><i class="material-icons">link</i></a></li>
	</ul>
</div>

<?php require_once "../app/Views/Part/downfile.php" ?>