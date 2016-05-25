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
                        <h4>Form Rawat Pasien Instalasi Gawat Darurat</h4>
                        <br />
                        <?php echo form_open_multipart('pasien/simpan_rawat', array('class' => 'form-horizontal')); ?>
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="id_pasien">ID Pasien</label>
                                <div class="controls">
                                    <?php
                                    $id_pasien = array('class' => 'span6', 'value' => $id_pasien, 'name' => 'id_pasien', 'readonly' => 'readonly', 'style' => 'color:blue;text-align:left');
                                    echo form_input($id_pasien);
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="id_rawat">ID Rawat</label>
                                <div class="controls">
                                    <?php
                                    $count = $row + 1;
                                    $id_rawat = array('class' => 'span6', 'value' => $count, 'name' => 'id_rawat', 'readonly' => 'readonly', 'style' => 'color:blue;text-align:left');
                                    echo form_input($id_rawat);
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="diagnosa">Diagnosa</label>
                                <div class="controls">
                                    <?php
                                    $diagnosa = array('class' => 'span6', 'name' => 'diagnosa', 'value' => set_value('diagnosa'));
                                    echo form_textarea($diagnosa);
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('tempat_lahir'); ?></span>
                            </div> -->
                            <div class="control-group">
                                <label class="control-label" for="tgl_masuk">Tanggal Masuk</label>
                                <div class="controls">
                                    <?php
                                    $tgl_masuk['#'] = 'Pilih Tanggal:';
                                    for ($n = 1; $n <= 31; $n++) {
                                        $tgl_masuk[$n] = $n;
                                    }
                                    echo form_dropdown('tgl_masuk', $tgl_masuk, set_value('tgl_masuk'), 'id="tgl_masuk" class="span2"');
                                    ?>
                                    <?php
                                    $bln_masuk = array('#' => 'Pilih Bulan:', '1' => 'Januari', '2' => 'Februari', '3' => 'Maret', '4' => 'April', '5' => 'Mei', '6' => 'Juni', '7' => 'Juli', '8' => 'Agustus', '9' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
                                    echo form_dropdown('bln_masuk', $bln_masuk, set_value('bln_masuk'), 'id="bln_masuk" class="span2"');
                                    ?>
                                    <?php
                                    $now = date("Y");
                                    $thn_masuk['#'] = 'Pilih Tahun:';
                                    for ($n = 1990; $n <= $now; $n++) {
                                        $thn_masuk[$n] = $n;
                                    }
                                    echo form_dropdown('thn_masuk', $thn_masuk, set_value('thn_masuk'), 'id="thn_masuk" class="span2"');
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="tgl_keluar">Tanggal Keluar</label>
                                <div class="controls">
                                    <?php
                                    $tgl_keluar['#'] = 'Pilih Tanggal:';
                                    for ($n = 1; $n <= 31; $n++) {
                                        $tgl_keluar[$n] = $n;
                                    }
                                    echo form_dropdown('tgl_keluar', $tgl_keluar, set_value('tgl_keluar'), 'id="tgl_keluar" class="span2"');
                                    ?>
                                    <?php
                                    $bln_keluar = array('#' => 'Pilih Bulan:', '1' => 'Januari', '2' => 'Februari', '3' => 'Maret', '4' => 'April', '5' => 'Mei', '6' => 'Juni', '7' => 'Juli', '8' => 'Agustus', '9' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
                                    echo form_dropdown('bln_keluar', $bln_keluar, set_value('bln_keluar'), 'id="bln_keluar" class="span2"');
                                    ?>
                                    <?php
                                    $now = date("Y");
                                    $thn_keluar['#'] = 'Pilih Tahun:';
                                    for ($n = 1990; $n <= $now; $n++) {
                                        $thn_keluar[$n] = $n;
                                    }
                                    echo form_dropdown('thn_keluar', $thn_keluar, set_value('thn_keluar'), 'id="thn_keluar" class="span2"');
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="nama_dokter">Nama Dokter</label>
                                <div class="controls">
                                    <?php
                                    foreach ($tbl_dokter->result() as $row_dokter) {
                                        echo form_dropdown('nm_dokter',"value='" . $row_dokter->ID_DOKTER . "'>" . $row_dokter->NM_DOKTER . "", 'id="nm_dokter" class="span2"');
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                    <span class="label label-important"><?php echo form_error('no'); ?></span>
                            </div> -->
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <?php
                                    $id_rawat = array('class' => 'hidden', 'value' => set_value('id_rawat'), 'name' => 'id_dokter', 'readonly' => 'readonly', 'style' => 'color:blue;text-align:left');
                                    echo form_input($id_rawat);
                                    ?>
                                </div>
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