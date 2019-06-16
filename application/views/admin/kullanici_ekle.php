<?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_siderbar');
?>


<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kullanıcılar</h2>
						
						<div class="row">
							<div class="col-md-12">
								
							</div>
						</div>

							<div class="row">
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">Kullanıcı Ekleme</div>
									<div class="panel-body">
										
										<form method="post" action="<?=base_url() ?>admin/kullanicilar/eklekaydet" class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">Adı Soyadı</label>
												<div class="col-sm-10">
													<input type="text" name="adi" class="form-control">
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Email Adresi</label>
												<div class="col-sm-10">
													<input type="text" name="email" class="form-control"><span class="help-block m-b-none"></span> </div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Şifre</label>
												<div class="col-sm-10">
													<input type="password" name="şife" class="form-control" name="password">
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Yetkisi</label>
												<div class="controls">
												<select id="selectError" name="yetki" data-rel="chosen">
													<option>admin</option>
													<option>editor</option>
													<option>stok</option>
													<option>satis</option>
													<option>siparis</option>
												</select>	
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Durumu</label>
												<div class="controls">
												<select id="selectError" name="durum" data-rel="chosen">
													<option>onayli</option>
													<option>beklemede</option>
													<option>engelli</option>
													
												</select>	
												</div>
											</div>
											
		                                    <div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
												    <button class="btn btn-primary" type="submit">Kullanıcı Ekle</button>
													<button class="btn btn-default" type="submit">Kapat</button>
													
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							

			</div>
			
		</div>
	</div>
	
	
	
	
	<hr>
	<?php
	$this->load->view('admin/_footer');
	
?>