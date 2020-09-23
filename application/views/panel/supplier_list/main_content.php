<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <!--<h3 class="card-title">Tarih : <?php echo date("d m Y, H:i:s");?></h3>--->
                    <a href="<?php echo base_url('supplier/newPage');?>" class="btn btn-outline-success btn-rounded btn-fw">
                            <i class="mdi mdi-folder-plus"></i>Tedarikçi Ekle</a>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Kategori ID</th>
                                <th>Ekleme Tarihi</th>
                                <th>Kategori Adı</th>
                                <th>Adres</th>
                                <th>Telefon</th>
                                <th>E-Posta</th>
                                <th>Durum</th>
                                <th class="text-center sorting_1">Kategori İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row){?>
                                <tr>
                                    <td>#<?php echo $row->id;?></td>
                                    <td><?php echo $row->supplier_date;?></td>
                                    <td><?php echo $row->title;?></td>
                                    <td>

                                        <?php
                                        $address    =  $row->address;
                                        $strlen =   strlen($address);
                                        if($strlen > 35){
                                            echo mb_substr($address, 0,35). "...";
                                        }else{
                                            echo $address;
                                        }

                                        ?>

                                    </td>
                                    <td><?php echo $row->phone;?></td>
                                    <td><?php echo $row->email;?></td>
                                    <td>
                                        <label class="badge badge-inverse-<?php echo $row->isActive == true  ? "success\">Aktif"  : "danger\">Pasif";?>"></label>
                                    </td>
                                    <td class="text-center sorting_1">
                                        <a href="<?php echo base_url("supplier/editPage/$row->id")?>" class="btn btn-inverse-info duzen">Düzenle</a>
                                        <button data-url="<?php echo base_url("supplier/delete/$row->id")?>" class="btn btn-inverse-danger remove-btn sil ">Sil</button>
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