<div class="container">
<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
					<?php if ($this->session->flashdata("sonuc"))
					{
					?>
					    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong> işlem :</strong> <?=$this->session->flashdata("sonuc")?>
                        </div>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong> Email :</strong> <?=$this->session->flashdata("email_sent")?>
                        </div>
					
					<?php
					}
					?>
					<script>
					function validateForm() {
					var x = document.forms["myForm"]["adsoy"].value;
					if (x == "") {
					alert("Adsoy alanı dolu olmalı");
					return false;
								}
					}
					function validateForm() {
					var x = document.forms["myForm"]["tel"].value;
					if (x == "") {
					alert("Telefon alanı dolu olmalı");
					return false;
								}
					}
					function validateForm() {
					var x = document.forms["myForm"]["email"].value;
					if (x == "") {
					alert("email alanı dolu olmalı");
					return false;
								}
					}
					function validateForm() {
					var x = document.forms["myForm"]["konu"].value;
					if (x == "") {
					alert("konu alanı dolu olmalı");
					return false;
								}
					}
					function validateForm() {
					var x = document.forms["myForm"]["mesaj"].value;
					if (x == "") {
					alert("mesaj alanı dolu olmalı");
					return false;
								}
					}
					</script>
	    				<h2 class="title text-center">Bilgileri Giriniz</h2>
							
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form class="contact-form row" name="myForm" action="<?=base_url() ?>home/mesaj_ekle"  onsubmit="return validateForm()" method="post">
				            <div class="form-group col-md-6">
				               Adınız Soyadınız: <input type="text" name="adsoy" class="form-control" required="required" placeholder="Adını ve Soyadını Giriniz">
				            </div>
							<div class="form-group col-md-6">
				              Telefon <input type="text" name="tel" class="form-control" required="required" placeholder="Telefon Numaranızı Giriniz">
				            </div>
				            <div class="form-group col-md-12">
				               Email: <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				             Konu:   <input type="text" name="konu" class="form-control" required="required" placeholder="Mesaj Konusu Giriniz">
				            </div>
				            <div class="form-group col-md-12">
				             Mesaj:  <textarea name="mesaj" id="mesaj" required="required" class="form-control" rows="8" placeholder="Mesajı Yazınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Mesajı Gönder">
				            </div>
				        </form>
	    			</div>
	    		</div>
</div>	
</div>
	
