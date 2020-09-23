<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <!--<h3 class="card-title">Tarih : <?php echo date("d m Y, H:i:s");?></h3>--->
                    <a href="<?php echo base_url('sayfalar/newPage');?>" class="btn btn-outline-success btn-rounded btn-fw">
                            <i class="mdi mdi-folder-plus"></i>Sayfa Ekle</a>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Sayfa ID</th>
                                <th>Ekleme Tarihi</th>
                                <th>Sayfa Adı</th>
                                <th>Durum</th>
                                <th class="text-center sorting_1">Sayfa İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($sayfalar)) {
                                foreach ($sayfalar as $sayfa){?>
                                <tr>
                                    <td>#<?php echo $sayfa->id;?></td>
                                    <td><?php echo $sayfa->sayfa_date;?></td>
                                    <td><?php echo $sayfa->sayfa_adi;?></td>
                                    <td>
                                        <label class="badge badge-inverse-<?php echo $sayfa->isActive == true  ? "success\">Aktif"  : "danger\">Pasif";?></label>
                                    </td>
                                    <td class="text-center sorting_1">
                                        <a href="<?php echo base_url("sayfalar/editPage/$sayfa->id")?>" class="btn btn-inverse-info duzen">Düzenle</a>
                                        <button data-url="<?php echo base_url("sayfalar/delete/$sayfa->id")?>" class="btn btn-inverse-danger remove-btn sil">Sil</button>
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