<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kullanıcılar</h2>
						
						<a class="btn btn-success" href="<?=base_url() ?>admin/kullanicilar/ekle"><i class="fa fa-user-plus"></i>
							Yeni Kullanıcı Ekle</a>
							<br>
							<br>
							<?php if ($this->session->flashdata("sonuc"))
							{
								?>
						 <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong> işlem :</strong> <?=$this->session->flashdata("sonuc")?>
                       </div>
					   <?php } ?>
						<div class="row">
						
							<div class="col-md-12">
							
						

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
					
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Adı Soyadı</th>
											<th>Email</th>
											<th>Yetki</th>
											<th>Durum</th>
											<th>işlemler</th>
											
										</tr>
									</thead>
									
									<tbody>
									<?php
									foreach ($veri as $rs)
									{
									?>
										<tr>
											<td><?=$rs->adi?></td>
											<td><?=$rs->email?></td>
											<td><?=$rs->yetki?></td>
											
											<td class="center">
												<span class= "label-success label label-default"><?=$rs->durum?></span>
												</td>
											<td class="center">
												<a class="btn btn-success" href="<?=base_url() ?>admin/kullanicilar/goster/<?=$rs->Id?>">
												<i class="glyphicon glyphicon-zoom-in icon-white"></i>
														Göster
												</a>
												<a class="btn btn-info" href="<?=base_url() ?>admin/kullanicilar/edit/<?=$rs->Id?>">
												<i class="glyphicon glyphicon-edit icon-white"></i>
														Düzenle
												</a>
												<a class="btn btn-danger" href="<?=base_url() ?>admin/kullanicilar/delete/<?=$rs->Id?>" onclick="return confirm('Silmek istediğinizen emin misiniz?');">
												<i class="glyphicon glyphicon-trash icon-white"></i>
													    Sil
												</a>
											</td>
											
										</tr>
									<?php
									}
									?>	
											
										</tr>
									</tbody>
								</table>

								

							</div>
						</div>

					
						</div>

						

			</div>
		</div>
	</div>