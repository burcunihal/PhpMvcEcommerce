<?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_siderbar');
?>


<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-10">

						<h2 class="page-title">Kitaplar</h2>
						
						<div class="row">
							<div class="col-md-10">
								
							</div>
						</div>

							<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Kitap Düzenleme</div>
									<div class="panel-body">
										
										<form method="post" action="<?=base_url() ?>admin/kitaplar/guncellekaydet/<?=$veri[0]->Id?>" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Kitabın Adı</label>
												<div class="col-sm-10">
													<input type="text" name="adi" value="<?=$veri[0]->adi?>" class="form-control"><span class="help-block m-b-none"></span> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Yazar</label>
												<div class="col-sm-10">
													<input type="text" name="yazar" value="<?=$veri[0]->yazar?>" class="form-control"><span class="help-block m-b-none"></span> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Sayfa Sayisi</label>
												<div class="col-sm-10">
													<input type="text" name="sayfa_sayisi" value="<?=$veri[0]->sayfa_sayisi?>" class="form-control"><span class="help-block m-b-none"></span> </div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Kategori</label>
												<div class="controls">
												<select id="selectError" name="kategori_id" data-rel="chosen">
													<option value="<?=$veri[0]->kategori_id?>"><?=$veri[0]->katadi?></option>
													<?php
													foreach($kategoriler as $rs)
													{
													?>
													<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
													<?php
													}
													?>
												</select>	
												</div>
												<div class="col-sm-10">
													
												</div>
											</div>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Türü</label>
												<div class="controls">
												<select id="selectError" name="turu" data-rel="chosen">
													<option value="<?=$veri[0]->turu?>"><?=$veri[0]->turadi?></option>
													<?php
													foreach($turu as $rs)
													{
													?>
													<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
													<?php
													}
													?>
												</select>	
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Durumu</label>
												<div class="controls">
												<select id="selectError" name="durum" data-rel="chosen">
												<option><?=$veri[0]->durum?></option>
													<option>onayli</option>
													<option>beklemede</option>
													<option>engelli</option>
													
												</select>	
												</div>
											</div>
											<script src="<?=base_url() ?>ckeditor/ckeditor.js"></script>
											  <br>Açıklama:<br>
											<textarea name="aciklama" id="aciklama" rows="10" cols="80">
											<?=$veri[0]->aciklama?>
											</textarea>
											<script>
											// Replace the <textarea id="aciklama"> with a CKEditor
											// instance, using default configuration.
											CKEDITOR.replace( 'aciklama' );
											</script>
		                                    <div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
												    <button class="btn btn-primary" type="submit">Güncelle</button>
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