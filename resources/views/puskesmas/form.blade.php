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
                        <label for="nama" class="col-lg-2 col-lg-offset-1 control-label">Nama</label>
                        <div class="col-lg-6">
                        <Select class="form-control" name="nama" id="nama">
                                <option value="Bantarkalong">Bantarkalong</option>
                                <option value="Bojongasih">Bojongasih</option>
                                <option value="Bojonggambir">Bojonggambir</option>
                                <option value="Ciawi">Ciawi</option>
                                <option value="Cibalong">Cibalong</option>
                                <option value="Cigalontang">Cigalontang</option>
                                <option value="Cikalong">Cikalong</option>
                                <option value="Cikatomas">Cikatomas</option>
                                <option value="Cineam">Cineam</option>
                                <option value="Cipatujah">Cipatujah</option>
                                <option value="Cisaruni">Cisaruni</option>
                                <option value="Cisayong">Cisayong</option>
                                <option value="Culamega">Culamega</option>
                                <option value="Gunungtanjung">Gunungtanjung</option>
                                <option value="Jamanis">Jamanis</option>
                                <option value="Jatiwaras">Jatiwaras</option>
                                <option value="Kadipaten">Kadipaten</option>
                                <option value="Karangjaya">Karangjaya</option>
                                <option value="Karangnunggal">Karangnunggal</option>
                                <option value="Leuwisari">Leuwisari</option>
                                <option value="Mangunreja">Mangunreja</option>
                                <option value="Manonjaya">Manonjaya</option>
                                <option value="Pagerageung">Pagerageung</option>
                                <option value="Pancatengah">Pancatengah</option>
                                <option value="Parungponteng">Parungponteng </option>
                                <option value="Puspahiang">Puspahiang</option>
                                <option value="Rajapolah">Rajapolah</option>
                                <option value="Salawu">Salawu</option>
                                <option value="Salopa">Salopa</option>
                                <option value="Sariwangi">Sariwangi</option>
                                <option value="Singaparna">Singaparna</option>
                                <option value="Sodonghilir">Sodonghilir</option>
                                <option value="Sukahening">Sukahening</option>
                                <option value="Sukaraja">Sukaraja</option>
                                <option value="Sukarame">Sukarame</option>
                                <option value="Sukaratu">Sukaratu</option>
                                <option value="Sukaresik">Sukaresik</option>
                                <option value="Tanjungjaya">Tanjungjaya</option>
                                <option value="Taraju">Taraju</option>
                                <option value="Tinewati">Tinewati</option>
                            </Select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-lg-2 col-lg-offset-1 control-label">Alamat</label>
                        <div class="col-lg-6">
                            <input type="text" name="alamat" id="alamat" class="form-control">
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
                        <label for="noizin" class="col-lg-2 col-lg-offset-1 control-label">No. Izin Puskesmas dan Tgl Terbit</label>
                        <div class="col-lg-6">
                            <input type="text" name="noizin" id="noizin" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>  
                  </div>
                  <div> 
                    <div class="form-group row">
                        <label for="kapus" class="col-lg-2 col-lg-offset-1 control-label">Kepala Puskesmas</label>
                        <div class="col-lg-6">
                            <input type="text" name="kapus" id="kapus" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>  
                  </div>
                  <div> 
                    <div class="form-group row">
                        <label for="pjmutu" class="col-lg-2 col-lg-offset-1 control-label">Pj Mutu</label>
                        <div class="col-lg-6">
                            <input type="text" name="pjmutu" id="pjmutu" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
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

