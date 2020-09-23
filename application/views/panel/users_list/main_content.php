<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <!--<h3 class="card-title">Tarih : <?php echo date("d m Y, H:i:s");?></h3>--->
                    <a href="<?php echo base_url('users/newPage');?>" class="btn btn-outline-success btn-rounded btn-fw">
                            <i class="mdi mdi-folder-plus"></i>Kullanıcı Ekle</a>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Kullanıcı ID</th>
                                <th>Ekleme Tarihi</th>
                                <th>Kullanıcı Adı</th>
                                <th>Ad Soyad</th>
                                <th>E-Posta</th>
                                <th>Şifre</th>
                                <th>Durum</th>
                                <th class="text-center sorting_1">Kullanıcı İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row){?>
                                <tr>
                                    <td>#<?php echo "<strong>". $row->id . "</strong>";?></td>
                                    <td><?php echo "<strong>". $row->createdAt . "</strong>";?></td>
                                    <td><?php echo "<strong>". $row->user_name . "</strong>";?></td>
                                    <td><?php echo "<strong>". $row->full_name . "</strong>";?></td>
                                    <td><?php echo "<strong>". $row->email . "</strong>";?></td>
                                    <td><?php echo "<strong>$row->password</strong>";?></td>
                                    <td>
                                        <label class="badge badge-inverse-<?php echo $row->isActive == true  ? "success\">Aktif"  : "danger\">Pasif";?></label>
                                    </td>
                                    <td class="text-center sorting_1">
                                        <a href="<?php echo base_url("users/editPage/$row->id")?>" class="btn btn-inverse-info duzen">Düzenle</a>
                                        <button
                                                data-url="<?php echo base_url("users/delete/$row->id")?>"
                                                class="btn btn-inverse-danger remove-btn sil">Sil</button>
                                        <a href="<?php echo base_url("users/editPass/$row->id")?>" class="btn btn-inverse-info duzen">Şifre Değiştir</a>

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