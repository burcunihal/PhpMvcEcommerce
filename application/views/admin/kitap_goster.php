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
							<div class="panel panel-default">
									<div class="panel-heading">Kullanıcı Bilgileri</div>
									<div class="panel-body">
										<table class="table table-bordered table-striped">
											
												<tr>
													<th>Adı Soyadı</th>
													<td><?=$veri[0]->adi?></td>
													
												</tr>
												
											
											<tr>
													<th>Durum</th>
													<td><?=$veri[0]->durum?></td>
													
												</tr>
											
											
										</table>
									</div>
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