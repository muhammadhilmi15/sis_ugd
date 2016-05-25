<section id="carouselSection" style="text-align:center">
	<div id="myCarousel" class="carousel slide">
			<?php
			$judul=array();
			$deskripsi=array();
			$isi=array();
			$foto=array();
			foreach($berita as $data)
			{
				$judul[]=$data->JUDUL;
				$deskripsi[]=$data->DESKRIPSI;
				$isi[]=$data->ISI;
				$foto[]=$data->FOTO;
			}
			?>	
			
			<div class="carousel-inner">
					<?php if (isset($foto[0])) {?>
					<div  style="text-align:right"  class="item active">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php echo $foto[0];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[0])) echo $judul[0];?></h2>
					  <p><?php if (isset($deskripsi[0])) echo $deskripsi[0];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
					</div>
					<?php }?>
				<?php if (isset($foto[1])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[1])) echo $foto[1];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[1])) echo $judul[1];?></h2>
					  <p><?php if (isset($deskripsi[1])) echo $deskripsi[1];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[2])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[2])) echo $foto[2];?>">
					<div class="carousel-caption">
                       <h2><?php if (isset($judul[2])) echo $judul[2];?></h2>
					  <p><?php if (isset($deskripsi[2])) echo $deskripsi[2];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[3])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[3])) echo $foto[3];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[3])) echo $judul[3];?></h2>
					  <p><?php if (isset($deskripsi[3])) echo $deskripsi[3];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[4])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[4])) echo $foto[4];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[4])) echo $judul[4];?></h2>
					  <p><?php if (isset($deskripsi[4])) echo $deskripsi[4];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[5])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[5])) echo $foto[5];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[5])) echo $judul[5];?></h2>
					  <p><?php if (isset($deskripsi[5])) echo $deskripsi[5];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[6])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[6])) echo $foto[6];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[6])) echo $judul[6];?></h2>
					  <p><?php if (isset($deskripsi[6])) echo $deskripsi[6];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[7])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[7])) echo $foto[7];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[7])) echo $judul[7];?></h2>
					  <p><?php if (isset($deskripsi[7])) echo $deskripsi[7];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				<?php if (isset($foto[8])) {?>
				<div  style="text-align:right"  class="item">
					<div class="wrapper"><img src="<?php echo base_url();?>themes/upload/berita/<?php if (isset($foto[8])) echo $foto[8];?>">
					<div class="carousel-caption">
                      <h2><?php if (isset($judul[8])) echo $judul[8];?></h2>
					  <p><?php if (isset($deskripsi[8])) echo $deskripsi[8];?></p>
                      <a href="#berita" class="btn btn-large btn-success">Baca Berita</a>
                    </div>
					</div>
				</div>
				<?php }?>
				
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
</section>
<!-- Sectionone ends ======================================== -->
<section id="middleSection">
<div class="container">
		<div class="row" style="text-align:center">
			<div class="span12">
			<div class="well well-small">
				<h4>Selamat Datang di SIID</h4>
				<p>
				Sistem Informasi Instalasi Gawat Darurat
				<br/>
				Rumah Sakit Umum Daerah "Hatta"
				<br/>
				<i class="icon-white icon-home"></i> Jalan Gajayana No. 50 Malang
				<br />
				<i class="icon-white icon-signal"></i> 0351-439047
				
</p>
			</div>
			</div>
			</div>
		</div>
</section>
<section id="bodySection">
<div class="container">
<div class="row">
	<div class="span4">
		<div class="thumbnail" style="height:400px;">
			<a href=""><h4>Sistem Informasi IGD</h4></a>
			<p>
			<br/>
			<center><b>Visi</b></center>
			Menjadi Instalasi Gawat Darurat yang terkemuka yang didukung tim dan peralatan medis berstandar Internasional			<br/>
			<center><b>Misi</b></center>
			<ul>
				Memberikan Pelayanan Gawat Darurat yang Peripurna dan Terjangkau
				</br>
				Memberikan Pelayanan Gawat Darurat pada Kasus Sekunder
			</ul>
			<br/>
			</p>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail" style="height:400px;">
			<a href=""><h4>Motto Instalasi Gawat Darurat</h4></a>
			<p>
			<br/>
			<ul>
				Berkomitmen membantu mengatasi Kegawatdaruratan Masyarakat melalui Pelayanan Kesehatan Berkualitas
			</ul>
			<br/>
			 </p>
		</div>
	</div>
	<div class="span4">
		<div class="thumbnail" style="height:400px;">
			<a href="" name="berita"><h4>Sekilas Info</h4></a>
			<p>
			<br/>
			<marquee direction="down" behavior="scroll" scrollamount="1" scrolldelay="60" onmouseout="this.start()" onmouseover="this.stop()">
						<span>
							<p align="center"><a href="javascript:void();" id="berita9"><?php if (isset($judul[8])) echo $judul[8];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita8"><?php if (isset($judul[7])) echo $judul[7];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita7"><?php if (isset($judul[6])) echo $judul[6];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita6"><?php if (isset($judul[5])) echo $judul[5];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita5"><?php if (isset($judul[4])) echo $judul[4];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita4"><?php if (isset($judul[3])) echo $judul[3];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita3"><?php if (isset($judul[2])) echo $judul[2];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita2"><?php if (isset($judul[1])) echo $judul[1];?></a></p>
							<p align="center"><a href="javascript:void();" id="berita1"><?php if (isset($judul[0])) echo $judul[0];?></a></p>
						</span>
					</marquee>	
			<br/>
			 </p>
		</div>
	</div>
</div>
<br/>
</div>
</section>
<section id="clientsSection" style="text-align:center; padding:48px 0">
<div class="container">
	<?php for ($i=0;$i<10;$i++){?>
	<div class="berita<?php echo $i+1;?>" style="display:none">  
	  <a href="" name="berita<?php echo $i+1;?>"><h4><?php if (isset($judul[$i])) echo $judul[$i];?></h4></a>
	  <p><?php if (isset($isi[$i])) echo $isi[$i];?></p>
	</div>
	<?php }?>
</div>
</section>
<!-- body block end======================================== -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#beranda').attr('class','active');
		$('#psb').attr('class','');
		$('#guru').attr('class','');
		$('#laporan').attr('class','');
		$('#admin').attr('class','');
		$('#jadwal').attr('class','');
	});
</script>