<?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_siderbar');
?>


<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
                <h2 class="page-title">Resim Galerisi Ekleme</h2>
						<div class="row">
							<div class="col-md-12">
								
							</div>
						</div>

			</div>
			<h3> <?=$veri[0]->adi?> </h3>
			
		
			<?php echo form_open_multipart(base_url().'admin/kitaplar/resim_galeri_upload/'.$veri[0]->Id);?>
				<input type="file" name="userfile" size="20" onchange="this.form.submit();" />
				
				</form>
				<?php if ($this->session->flashdata("sonuc"))
							{
								?>
						 <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong> işlem :</strong> <?=$this->session->flashdata("sonuc")?>
                       </div>
					   <?php } ?>
				
				  <div class="box-content">
                    <br>
                  <ul class="thumbnails gallery">
                                                    
			<?php
			foreach ($veriler as $rs)
			{
			?>
			   <li id="image-1" class="thumbnail">
                     <a style="background:url(<?=base_url() ?>uploads/<?=$rs->resim?>)"
                     title="Sample Image 1" href="<?=base_url() ?>uploads/<?=$rs->resim?>"><img
                     class="grayscale" src="<?=base_url() ?>uploads/<?=$rs->resim?>"
                     alt="Sample Image 1"></a>
					 <div class="panel-body">
					 <td class="center">
					
					 <a href="<?=base_url() ?>admin/kitaplar/delete_resim/<?=$veri[0]->Id?>/<?=$rs->Id?>"><span class="btn btn-primary btn-xs"> Sil </span></a>
                </li>
			
			<?php
			}
			?>
			</ul>
               </div>			
		</div>
	</div>
</div>
	
	
<hr>
<?php
 $this->load->view('admin/_footer');
	
?>