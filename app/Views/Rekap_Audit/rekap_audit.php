<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="sectioncontent sectioncontent--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header overview-wrap">
                                        <h3><i class="mr-2 fas fa-chart-bar"></i><strong class="card-title" v-if="headerText">Rekap Audit</strong></h3>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-9 offset-md-2">
                                <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                            <th scope="col" colspan="2">Nama Audit Instansi Kegiatan Program DLL</th>
                                            <th scope="col" colspan="4">Tenaga Auditor</th>
                                            <th scope="col" colspan="3">Tenaga Tata Usaha</th>
                                            <th scope="col" colspan="3">Sarana dan Prasarana Unit</th>
                                            <th scope="col" colspan="2">Dana Unit</th>
                                            <th scope="col" rowspan="2">Lain-Lain</th>
                                            <th scope="col" rowspan="2">Tanggal Awal</th>
                                            <th scope="col" rowspan="2">Tanggal Akhir</th>
                                            <th scope="col" rowspan="2">Status</th>
                                            
                                            </tr>
                                            <tr>
                                                <th scope="col">Nama Audit Instansi Kegiatan Program DLL</th>
                                                <th scope="col">Besaran Resiko Audit</th>
                                                
                                                <th scope="col">Auditor Pengendali mutu</th>
                                                <th scope="col">Auditor Pengendali Teknis</th>
                                                <th scope="col">Auditor Ketua Tim</th>
                                                <th scope="col">Auditor Anggota Tim</th>

                                                <th scope="col">Gol.IV</th>
                                                <th scope="col">Gol.III</th>
                                                <th scope="col">Gol.II</th>

                                                <th scope="col">Komunikasi</th>
                                                <th scope="col">Kendaraan</th>
                                                <th scope="col">Lainnya</th>

                                                <th scope="col">SPPD</th>
                                                <th scope="col">Lainnya</th>
                                        </thead>
                                        <tbody>
                                        <?php 
                                      
                                        foreach($surat as $value) { ?>
                                
                                            <tr>
                                                <td><?= $value->nama_kegiatan ?></td>
                                                <td><?= $value->Besaran_audit_resiko ?></td>
                                                <td><?= $value->auditor_pengendali_mutu ?></td>
                                                <td><?= $value->auditor_pengendali_teknis ?></td>
                                                <td><?= $value->auditor_ketua_tim ?></td>
                                                <td><?= $value->auditor_anggota_tim ?></td>
                                                <td><?= $value->tu_gol4 ?></td>
                                                <td><?= $value->tu_gol3 ?></td>
                                                <td><?= $value->tu_gol2 ?></td>
                                                <td><?= $value->status_sarana_komunikasi ?></td>
                                                <td><?= $value->status_sarana_kendaraan ?></td>
                                                <td><?= $value->status_sarana_lainnya ?></td>
                                                <td><?= $value->status_dana_sppd ?></td>
                                                <td><?= $value->status_dana_lainnya ?></td>
                                                <td><?= $value->keterangan ?></td>
                                                <td><?= $value->tgl_awal ?></td>
                                                <td><?= $value->tgl_akhir ?></td>
                                                <td><?= $value->status_lha ?></td>
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
                </div>
            </div>