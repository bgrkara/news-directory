<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <!--<h3 class="card-title">Tarih : <?php echo date("d m Y, H:i:s");?></h3>--->
                    <a href="<?php echo base_url('gazeteler/newPage');?>" class="btn btn-outline-success btn-rounded btn-fw">
                            <i class="mdi mdi-folder-plus"></i>Gazete Ekle</a>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Gazete ID</th>
                                <th>Gazete Adı</th>
                                <th>Gazete Kategorisi</th>
                                <th>Gazete Şehir</th>
                                <th>Gazete Ülke</th>
                                <th>Durum</th>
                                <th class="text-center sorting_1">Gazete İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row){?>
                                <tr>
                                    <td>#<?php echo $row->id;?></td>
                                    <td><?php echo $row->gazete_adi;?></td>
                                    <td><?php echo $row->gazete_kategori?></td>
                                    <td><?php echo $row->gazete_sehir?></td>
                                    <td><?php echo $row->gazete_ukle;?></td>
                                    <td>
                                    <label class="badge badge-inverse-<?php echo $row->isActive == true  ? "success\">Aktif"  : "danger\">Pasif";?></label>
                                    </td>
                                    <td class="text-center sorting_1">
                                        <a href="<?php echo base_url("gazeteler/editPage/$row->id")?>" class="btn btn-inverse-info duzen">Düzenle</a>
                                        <button data-url="<?php echo base_url("gazeteler/delete/$row->id")?>" class="btn btn-inverse-danger remove-btn sil ">Sil</button>
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