<!-- Page banner -->
<section id="bannerSection" style="background:url(themes/images/banner/contact.png) no-repeat center center #000;">
    <div class="container" >	
        <h1 id="pageTitle">Pengisian Data Pasien</h1>
    </div>
</section> 
<!-- Page banner end -->
<section id="bodySection">		
    <div id="wrapper">
        <div class="container">	
            <div class="row">
                <div class="span12">
                    <div class="thumbnail"s>
                        <h4>Form Pendaftaran Data Pasien Instalasi Gawat Darurat</h4>
                        <br />
                        <?php echo form_open_multipart('pasien/simpan_pasien', array('class' => 'form-horizontal')); ?>
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="id_pasien">ID Pasien</label>
                                <div class="controls">
                                    <?php
                                    $count = $row + 1;
                                    $id_pasien = array('class' => 'span6', 'value' => $count, 'name' => 'id_pasien', 'readonly' => 'readonly', 'style' => 'color:blue;text-align:left');
                                    echo form_input($id_pasien);
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="nm_pasien">Nama Pasien</label>
                                <div class="controls">
                                    <?php
                                    $nama = array('class' => 'span6', 'name' => 'nama', 'value' => set_value('nama'));
                                    echo form_input($nama);
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('nama'); ?></span>
                            </div> -->
                            <div class="control-group">
                                <label class="control-label" for="jk">Jenis Kelamin</label>
                                <div class="controls">
                                    <?php
                                    $gender = array('#' => 'Pilih Jenis Kelamin:', '1' => 'Laki-laki', '2' => 'Perempuan');
                                    echo form_dropdown('gender', $gender, set_value('gender'), 'id="gender" class="span6"');
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('gender'); ?></span>
                            </div> -->
                            <div class="control-group">
                                <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                                <div class="controls">
                                    <?php
                                    $tempat_lahir = array('class' => 'span6', 'name' => 'tempat_lahir', 'value' => set_value('tempat_lahir'));
                                    echo form_input($tempat_lahir);
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('tempat_lahir'); ?></span>
                            </div> -->
                            <div class="control-group">
                                <label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
                                <div class="controls">
                                    <?php
                                    $tgl['#'] = 'Pilih Tanggal:';
                                    for ($n = 1; $n <= 31; $n++) {
                                        $tgl[$n] = $n;
                                    }
                                    echo form_dropdown('tgl', $tgl, set_value('tgl'), 'id="tgl" class="span2"');
                                    ?>
                                    <?php
                                    $bln = array('#' => 'Pilih Bulan:', '1' => 'Januari', '2' => 'Februari', '3' => 'Maret', '4' => 'April', '5' => 'Mei', '6' => 'Juni', '7' => 'Juli', '8' => 'Agustus', '9' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
                                    echo form_dropdown('bln', $bln, set_value('bln'), 'id="bln" class="span2"');
                                    ?>
                                    <?php
                                    $now = date("Y");
                                    $thn['#'] = 'Pilih Tahun:';
                                    for ($n = 1990; $n <= $now; $n++) {
                                        $thn[$n] = $n;
                                    }
                                    echo form_dropdown('thn', $thn, set_value('thn'), 'id="thn" class="span2"');
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('tgl'); ?></span>
                                    <span class="label label-important"><?php echo form_error('bln'); ?></span>
                                    <span class="label label-important"><?php echo form_error('thn'); ?></span>
                            </div> -->
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('agama'); ?></span>
                            </div> -->
                            <div class="control-group">
                                <label class="control-label" for="alamat">Alamat</label>
                                <div class="controls">
                                    <?php
                                    $alamat = array('class' => 'span6', 'name' => 'alamat', 'value' => set_value('alamat'));
                                    echo form_input($alamat);
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('alamat'); ?></span>
                            </div> -->
                            <div class="control-group">
                                <label class="control-label" for="nohp">No. HP</label>
                                <div class="controls">
                                    <?php
                                    $no = array('class' => 'span6', 'name' => 'no', 'value' => set_value('no'));
                                    echo form_input($no);
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('no'); ?></span>
                            </div> -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Daftar</button>                               
                            </div>

                        </fieldset>
                        <?php echo form_close() ?>    
                    </div>
                </div>	
            </div>
            <br/>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        $('#logout').attr('class', '');
    });
</script>