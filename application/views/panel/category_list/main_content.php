<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <!--<h3 class="card-title">Tarih : <?php echo date("d m Y, H:i:s");?></h3>--->
                    <a href="<?php echo base_url('category/newPage');?>" class="btn btn-outline-success btn-rounded btn-fw">
                            <i class="mdi mdi-folder-plus"></i>Kategori Ekle</a>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>Kategori ID</th>
                                <th>Ekleme Tarihi</th>
                                <th>Kategori Adı</th>
                                <th>Durum</th>
                                <th class="text-center sorting_1">Kategori İşlemleri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (isset($categories)) {
                                foreach ($categories as $category){?>
                                <tr>
                                    <td>#<?php echo $category->id;?></td>
                                    <td><?php echo $category->category_date;?></td>
                                    <td><?php echo $category->title;?></td>
                                    <td>
                                        <label class="badge badge-inverse-<?php echo $category->isActive == true  ? "success\">Aktif"  : "danger\">Pasif";?></label>
                                    </td>
                                    <td class="text-center sorting_1">
                                        <a href="<?php echo base_url("category/editPage/$category->id")?>" class="btn btn-inverse-info duzen">Düzenle</a>
                                        <button data-url="<?php echo base_url("category/delete/$category->id")?>" class="btn btn-inverse-danger remove-btn sil">Sil</button>
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