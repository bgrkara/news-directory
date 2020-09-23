<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"><div class="col-sm-0"></div></div>
                <div class="col-md-10"><div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kategori Düzenle</h4>
                                <form action="<?php echo base_url("category/update/$category->id");?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" value="<?php echo $category->title;?>" required>
                                        <input type="hidden" name="id" value="<?php echo $category->id;?>">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" value="1" <?php echo ($category->isActive == 1) ? "checked" : ""?>>Aktif</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-radio">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="isActive" value="0" <?php echo ($category->isActive == 0) ? "checked" : ""?>>Pasif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" value="submit" class="btn btn-primary mr-2">Güncelle</button>
                                    <a href="<?php echo base_url('category');?>" class="btn btn-light">İptal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"><div class="col-sm-0"></div></div>
            </div>
        </div>
    </div>
</div>