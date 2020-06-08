<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="sectioncontent sectioncontent--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header overview-wrap">
                                        <h3><i class="mr-2 fas fa-chart-bar"></i><strong class="card-title" v-if="headerText">Surat Tugas</strong></h3>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-9 offset-md-2">
                                        <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                            <th scope="col" rowspan="2">ID</th>
                                            <th scope="col" rowspan="2">Kegiatan</th>
                                            <th scope="col" rowspan="2">Klasifikasi Surat</th>
                                            <th scope="col" rowspan="2">Tanggal Awal</th>
                                            <th scope="col" rowspan="2">Tanggal Akhir</th>
                                            <th scope="col" colspan="3">Tahapan</th>
                                            <th scope="col" rowspan="2"colspan="4">Aksi</th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Pembuat</th>
                                                <th scope="col">Approval</th>
                                                <th scope="col">Penandatanganan</th>
                                        </thead>
                                        <tbody>
                                        <?php 
                                      
                                        foreach($surat as $value) { ?>
 
                                            <tr>
                                                <td><?= $value->idSurtu ?></td>
                                                <td><?= $value->keterangan_klasifikasi_surat ?></td>
                                                <td><?= $value->klasifikasi_surat ?></td>
                                                <td><?= $value->tgl_awal ?></td>
                                                <td><?= $value->tgl_akhir ?></td>
                                                <td><?= $value->maker ?></td>
                                                <td><?= $value->approval ?></td>
                                                <td><?= $value->signer ?></td>
                                                <td><button class="btn btn-sm btn-success mb-1" type="submit"><i class="fa fa-pencil-square-o mr-1"></i></button>  <button class="btn btn-sm btn-danger mb-1" type="submit"><i class="fa fa-trash mr-1"></i><i class="Delete"></i></button>  <button class="btn btn-sm btn-primary mb-1" type="submit"><i class="fa fa-group mr-1"></i></button>    <button class="btn btn-sm btn-warning" type="submit"><i class="fa fa-book mr-1"></i></button></td>
                                            </tr>                                            
                                        <?php } ?>
                                        </tbody>
                                        </table>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>