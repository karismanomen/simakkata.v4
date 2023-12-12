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
                        <label for="id_kategori" class="col-lg-2 col-lg-offset-1 control-label">Kategori
                            Akreditasi</label>
                        <div class="col-lg-6">
                            <select name="id_kategori" id="id_kategori" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $key => $item)
                                    <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_tpcb" class="col-lg-2 col-lg-offset-1 control-label">Nama</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_tpcb" id="nama_tpcb" class="form-control" required
                                autofocus>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nip" class="col-lg-2 col-lg-offset-1 control-label">NIP</label>
                        <div class="col-lg-6">
                            <input type="text" name="nip" id="nip" class="form-control" required>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_akre" class="col-lg-2 col-lg-offset-1 control-label">Jabatan
                            Akreditasi</label>
                        <div class="col-lg-6">
                            <Select class="form-control" name="jabatan_akre" id="jabatan_akre">
                                <option value="Tim Pembina Cluster Binaan">TPCB</option>
                            </Select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cluster" class="col-lg-2 col-lg-offset-1 control-label">Tim</label>
                        <div class="col-lg-6">
                            <Select class="form-control" name="cluster" id="cluster">
                                <option value="Cluster 1"> Cluster 1</option>
                                <option value="Cluster 2"> Cluster 2</option>
                                <option value="Cluster 3"> Cluster 3</option>
                                <option value="Cluster 4"> Cluster 4</option>
                                <option value="Cluster 5"> Cluster 5</option>
                            </Select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pangkat" class="col-lg-2 col-lg-offset-1 control-label">Pangkat</label>
                        <div class="col-lg-6">
                            <Select class="form-control" name="pangkat" id="pangkat">
                                <option value="Pengatur Muda IIa">Pengatur Muda/IIa</option>
                                <option value="Pengatur Muda Tk I/IIb">Pengatur Muda Tk I/IIb</option>
                                <option value="Pengatur/IIc">Pengatur/IIc</option>
                                <option value="Pengatur Tk I/IId">Pengatur Tk I/IId</option>
                                <option value="Penata Muda/IIIa">Penata Muda/IIIa</option>
                                <option value="Penata Muda Tk I/IIIb">Penata Muda Tk I/IIIb</option>
                                <option value="Penata/IIIc">Penata/IIIc</option>
                                <option value="Penata Tk I/IIId">Penata Tk I/IIId</option>
                                <option value="Pembina/IVa">Pembina/IVa</option>
                                <option value="Pembina Tk I/IVb">Pembina Tk I/IVb</option>
                                <option value="Pembina Utama Muda/IVc">Pembina Utama Muda/IVc</option>
                                <option value="Pembina Utama Madya/IVd">Pembina Utama Madya/IVd</option>
                                <option value="Pembina Utama/IVe">Pembina Utama/IVe</option>
                                <option value=" - "> - </option>
                            </Select>
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
</div>
