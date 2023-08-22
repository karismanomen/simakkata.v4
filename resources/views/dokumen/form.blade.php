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
                        <label for="nama_dokumen" class="col-lg-2 col-lg-offset-1 control-label">Nama Dokumen</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dokumen" class="col-lg-2 col-lg-offset-1 control-label">Dokumen</label>
                        <div class="col-lg-6">
                            <input type="text" name="dokumen" id="dokumen" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>                	
                <div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-sm btn-flat btn-warning" data-dismiss="modal"><i
                            class="fa fa-arrow-circle-left"></i> Batal</button>
                </div>
            </div>
        </form>
    </div>

