<?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_siderbar');
?>


<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kitaplar</h2>
						
						<div class="row">
							<div class="col-md-12">
								
							</div>
						</div>

							<div class="row">
							<div class="col-md-8">
								<div class="panel panel-default">
									<div class="panel-heading">Kitap Ekleme Sayfası</div>
									<div class="panel-body">
										
										<form method="post" action="<?=base_url() ?>admin/kitaplar/eklekaydet" class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">Kitap Adı:</label>
												<div class="col-sm-10">
													<input type="text" name="adi" class="form-control">
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Turu</label>
												<div class="col-sm-10">
													<input type="text" name="turu" class="form-control"><span class="help-block m-b-none"></span> </div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Yazar</label>
												<div class="col-sm-10">
													<input type="text" name="yazar" class="form-control" name="password">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Sayfa Sayısı</label>
												<div class="col-sm-10">
													<input type="text" name="sayfa_sayisi" class="form-control" name="password">
												</div>
											</div>
											<div class="hr-dashed"></div>
											
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
												    <button class="btn btn-primary" type="submit">Kitap Ekle</button>
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