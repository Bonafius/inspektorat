<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="sectioncontent sectioncontent--p30">
                    <div class="container-flu">
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
                                            <th scope="col" rowspan="2">Unit Organisasi</th>
                                            <th scope="col" rowspan="2">Kegiatan</th>
                                            <th scope="col" rowspan="2">Tahun</th>
                                            <th scope="col" rowspan="2">Tujuan Audit</th>
                                            <th scope="col" rowspan="2">Prosedur/Metode Pemilihan Sample dan Waktu</th>
                                            <th scope="col" rowspan="2">Nama Auditor</th>
                                            <th scope="col" rowspan="2">Anggaran Waktu</th>
                                            <th scope="col" rowspan="2">Realisasi Waktu</th>
                                            <th scope="col" rowspan="2">No KKA</th>
                                            <th scope="col" rowspan="2">Temuan</th>
                                            <th scope="col" rowspan="2">Status</th>
                                            <th scope="col" rowspan="2">Nomor LHA</th>
                                            <th scope="col" rowspan="2">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                      
                                        foreach($surat as $value) { ?>
 
                                            <tr>
                                                <td><?= $value->unit_organisasi ?></td>
                                                <td><?= $value->nama_kegiatan ?></td>
                                                <td><?= $value->tahun_pelaksanaan ?></td>
                                                <td><?= $value->tujuan_auditl ?></td>
                                                <td><?= $value-> ?></td>
                                                <td><?= $value-> ?></td>
                                                <td><?= $value-> ?></td>
                                                <td><?= $value-> ?></td>
                                                <td><?= $value-> ?></td>
                                                <td><button class="btn btn-sm btn-success mb-1" type="submit"><i class="fa fa-pencil-square-o mr-1"></i></button>
                                                <td><?= $value-> ?></td>
                                                <td><?= $value-> ?></td>
                                                <td><button class="btn btn-sm btn-success mb-1" type="submit"><i class="fa fa-pencil-square-o mr-1"></i></button> 
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