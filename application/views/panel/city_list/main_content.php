<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <!--<h3 class="card-title">Tarih : <?php echo date("d m Y, H:i:s");?></h3>--->
                    <a href="<?php echo base_url('sehirler/newPage');?>" class="btn btn-outline-success btn-rounded btn-fw">
                            <i class="mdi mdi-folder-plus"></i>Şehir Ekle</a>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Şehir ID</th>
                                <th>Ekleme Tarihi</th>
                                <th>Şehir Adı</th>
                                <th>Durum</th>
                                <th class="text-center sorting_1">Şehir İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($sehirler)) {
                                foreach ($sehirler as $sehir){?>
                                <tr>
                                    <td>#<?php echo $sehir->id;?></td>
                                    <td><?php echo $sehir->sehir_date;?></td>
                                    <td><?php echo $sehir->sehir_adi;?></td>
                                    <td>
                                        <label class="badge badge-inverse-<?php echo $sehir->isActive == true  ? "success\">Aktif"  : "danger\">Pasif";?></label>
                                    </td>
                                    <td class="text-center sorting_1">
                                        <a href="<?php echo base_url("sehirler/editPage/$sehir->id")?>" class="btn btn-inverse-info duzen">Düzenle</a>
                                        <button data-url="<?php echo base_url("sehirler/delete/$sehir->id")?>" class="btn btn-inverse-danger remove-btn sil">Sil</button>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>