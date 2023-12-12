<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_klinik" class="col-lg-2 col-lg-offset-1 control-label">Nama Klinik</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_klinik" id="nama_klinik" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-lg-2 col-lg-offset-1 control-label">Alamat</label>
                        <div class="col-lg-6">
                            <input type="text" name="alamat" id="alamat" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dokter" class="col-lg-2 col-lg-offset-1 control-label">Dokter Penanggungjawab</label>
                        <div class="col-lg-6">
                            <input type="text" name="dokter" id="dokter" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>             	
                <div>                  
                  <div class="form-group row">
                    <label for="nilai_akre" class="col-lg-2 col-lg-offset-1 control-label">Nilai Akreditasi</label>
                    <div class="col-lg-6">
                        <Select class="form-control" name="nilai_akre" id="nilai_akre">
                            <option value="Dasar">Dasar</option>
                            <option value="Madya">Madya</option>
                            <option value="Utama">Utama</option>
                            <option value="Paripurna">Paripurna</option>
                        </Select>
                    </div>
                 </div>        
                  <div> 
                    <div class="form-group row">
                        <label for="tahun_akre" class="col-lg-2 col-lg-offset-1 control-label">Tahun Akreditasi</label>
                        <div class="col-lg-6">
                            <input type="text" name="tahun_akre" id="tahun_akre" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>  
                  </div>
                  <div> 
                    <div class="form-group row">
                        <label for="noizin" class="col-lg-2 col-lg-offset-1 control-label">No. Izin Klinik</label>
                        <div class="col-lg-6">
                            <input type="text" name="noizin" id="noizin" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>  
                  </div>
                  <div> 
                    <div class="form-group row">
                        <label for="pjmutu_klinik" class="col-lg-2 col-lg-offset-1 control-label">PJ Mutu</label>
                        <div class="col-lg-6">
                            <input type="text" name="pjmutu_klinik" id="pjmutu_klinik" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>  
                  </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i
                            class="fa fa-arrow-circle-left"></i> Batal</button>
                </div>
            </div>
        </form>
    </div>

