@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="alert bg-primary text-center">Dashboard</li>
@endsection

@section('content')

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $tpcb }}</h3>

                    <p>Total TPCB Akreditasi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-cube"></i>
                </div>
                <a href="{{ route('tpcb.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $pendamping }}</h3>

                    <p>Total Pendamping Akreditasi</p>
                </div>
                <div class="icon">
                    <i class="fa fa-cubes"></i>
                </div>
                <a href="{{ route('pendamping.index') }}" class="small-box-footer">Lihat <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $klinik }}</h3>

                    <p>Klinik</p>
                </div>
                <div class="icon">
                    <i class="fa fa-id-card"></i>
                </div>
                <a href="{{ route('klinik.index') }}" class="small-box-footer">Lihat <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ $pkm }}</h3>

                    <p>Puskesmas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <a href="{{ route('puskesmas.index') }}" class="small-box-footer">Lihat <i
                        class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <h1 class='text-center'>Tugas TPCB</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="table">
                <div class="card-header text-center bg-primary"><b>Tugas Ketua Tim TPCB</b></div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <td>1</td>
                            <td>Memimpin anggota tim untuk mempelajari kembali rencana pembinaan yang telah disusun dan membuat penjadwalan pembinaan bersama.</td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Menjelaskan kembali tujuan pembinaan terpadu dan menyosialisasikan kepada anggota tim.</td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Memutuskan prioritas dan strategi pembinaan cluster binaan bersama angota tim.</td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>Mengoordinasikan anggota tim untuk melaksanakan rencana pembinaan sesuai jadwal yang telah disepakati berdasarkan urutan prioritas.</td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>Memimpin pembinaan ke cluster binaan, baik melalui forum pertemuan pembahasan, mekanisme umpan balik maupun kunjungan ke lapangan.</td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>Melakukan evaluasi terhadap hasil pembinaan dan menyusun rencana tindak lanjut pembinaan.</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table">
                <div class="card-header text-center bg-primary"><b>Tugas Anggota Tim TPCB</b></div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <td>1</td>
                            <td>Membuat jadwal pembinaan sesuai arahan ketua tim dan kesepakatan Bersama.</td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Memahami tujuan pembinaan terpadu.</td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Menyusun prioritas dan strategi pembinaan cluster sesuai arahan ketua tim.</td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>Menyiapkan bahan pembinaan ke ketua tim. Bahan pembinaan berdasarkan analisis data hasil excersise pada rapat koordinasi.</td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>Melaksanakan pembinaan ke cluster binaan bersama ketua tim.</td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>Merangkum hasil temuan yang didapatkan pada waktu pelaksanaan pembinaan, menyusun laporan pembinaan untuk diserahkan ke ketua Tim.</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<h1 class='text-center'>Roadmap Binaan Akreditasi</h1>
    <div class="row">
    <div class="col-md-4">
            <div class="table">
                <div class="card-header text-center bg-primary"><b>Cluster 1 TPCB</b></div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Puskesmas Binaan</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>dr. AA Ahmad Nurdin, M.M</td>
                            <td>Cikalong</td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Elvin Yuliani, S.Kep, Ners, M.Kep.</td>
                            <td>Bojongasih</td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Rina Parina, A.MK, S.KM.M.Epid., M.H.Kes</td>
                            <td>Cibalong</td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>N Elih Harlina, AM.Keb, S.KM, M.H.Kes.</td>
                            <td>Tanjungjaya</td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>Wahyu Taufik Pirdaus., S.KM</td>
                            <td>Rajapolah</td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>Maulana Iskandar, A.Md.Kep.</td>
                            <td>Cisayong</td>
                        </tbody>
                        <tbody>
                            <td>7</td>
                            <td>Teni Kristiani, SIP</td>
                            <td>Salawu</td>
                        </tbody>
                        <tbody>
                            <td>8</td>
                            <td>Wendi Dinapis, S.ST</td>
                            <td>Sukaratu</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-primary"><b>Cluster 2 TPCB</b></div>
                <div class="table">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Puskesmas Binaan</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>Iyen Nuryanah, SST, M.Si</td>
                            <td>Cipatujah</td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Leni Nuraeni HR, S.Kep.</td>
                            <td>Bantarkalong</td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Otong Kusmana, S.KM, M.P.H.</td>
                            <td>Cikatomas</td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>Priliana Susanty, S.T, M.Si.</td>
                            <td>Pagerageung</td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>Nining Ratningsih., Am.Keb</td>
                            <td>Sodonghilir</td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>Wila Susiana Dewi, SKM.</td>
                            <td>Jatiwaras</td>
                        </tbody>
                        <tbody>
                            <td>7</td>
                            <td>Rahmaasih S. Abdulghani, S.Kep.Ners</td>
                            <td>Sariwangi</td>
                        </tbody>
                        <tbody>
                            <td>8</td>
                            <td>Asep Abdurahman</td>
                            <td>Singaparna</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-primary"><b>Cluster 3 TPCB</b></div>
                <div class="table">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Puskesmas Binaan</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>H. Rd. Mauludin Muchamad, SKM, M.KM</td>
                            <td>Karangjaya</td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Hj. Iceu Herlina, Am.Keb.,S.KM</td>
                            <td>Karangnunggal</td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Tiaraima Sisinta, S.KM, M.K.M.</td>
                            <td>Gunungtanjung</td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>Ratih Indriane Septiani, S.Kep,Ners.</td>
                            <td>Manonjaya</td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>dr. Hj Ratih Tedjasukmana</td>
                            <td>Sukahening</td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>Dede Subekti, S.Pd, M.Kes.</td>
                            <td>Leuwisari</td>
                        </tbody>
                        <tbody>
                            <td>7</td>
                            <td>Yusuf Rifai Romli, S.KM, M.Epid.</td>
                            <td>Sukaraja</td>
                        </tbody>
                        <tbody>
                            <td>8</td>
                            <td>Heni Handayani, A.Md, S.KM, M.K.M</td>
                            <td>Mangunreja</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary"><b>Cluster 4 TPCB</b></div>
                <div class="table">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Puskesmas Binaan</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>Epi Edwar Lutfi, SKM, MKM</td>
                            <td>Bojonggambir</td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Elis Supartini, S.IP, M.IP</td>
                            <td>Culamega</td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Nurul Fadhilah., S.ST</td>
                            <td>Cineam</td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>Yeti Susanti, S.P, M.Si.</td>
                            <td>Parungponteng</td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>Asep Yayat NUrhidayat, S.Sos, M.Si.</td>
                            <td>Taraju</td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>Mira Miratul Jannah, S.Si, Apt, M.Farm</td>
                            <td>Cisaruni</td>
                        </tbody>
                        <tbody>
                            <td>7</td>
                            <td>Dedeh Hartati, AM.Keb, S.KM.</td>
                            <td>Sukarame</td>
                        </tbody>
                        <tbody>
                            <td>8</td>
                            <td>Basuki Kartono, SKM, MKM</td>
                            <td>Kadipaten</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary"><b>Cluster 5 TPCB</b></div>
                <div class="table">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Puskesmas Binaan</th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>Rahayu Nurhaida M. S.SiT, MM.Kes, M.Si</td>
                            <td>Pancatengah</td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Neneng Teni Kristinawati, S.Kep Ners.,M.M</td>
                            <td>Ciawi</td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Hendah Mariawati, AM.G.</td>
                            <td>Jamanis</td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>Candrawati Puspita Dewi, A.Md.Kes, S.IP.</td>
                            <td>Salopa</td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>Ai Sukmawati, S.KM</td>
                            <td>Cigalontang</td>
                        </tbody>
                        <tbody>
                            <td>6</td>
                            <td>Yati Nurhayati, S.KM</td>
                            <td>Puspahiang</td>
                        </tbody>
                        <tbody>
                            <td>7</td>
                            <td>Idris Maulana, S.Kep.Ners</td>
                            <td>Sukaresik</td>
                        </tbody>
                        <tbody>
                            <td>8</td>
                            <td>Noneng Sariningsih, S.KM., M.K.M</td>
                            <td>Tinewati</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
