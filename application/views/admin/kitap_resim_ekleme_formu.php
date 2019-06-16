<?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_siderbar');
?>


<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Resim Ekleme</h2>
						
						<div class="row">
							<div class="col-md-12">
								
							</div>
						</div>

						

			</div>
			<h3> <?=$veri[0]->adi?> </h3>
			
			<?php 
					
					if ($veri[0]->resim!=NULL)
					{?>
					<img height="80" src="<?=base_url() ?>uploads/<?=$veri[0]->resim?>">
					<?php
					}
					?>
					
				<?php echo form_open_multipart(base_url().'admin/kitaplar/resim_upload/'.$veri[0]->Id);?>
					
					<input type="file" name="userfile" size="20" />
					
					
					<input type="submit" value="upload" />
				
		</div>
		
	</div>
	
	</div>
	
	
	<hr>
	<?php
	$this->load->view('admin/_footer');
	
?>