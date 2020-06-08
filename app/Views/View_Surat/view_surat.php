<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="sectioncontent sectioncontent--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header overview-wrap">
                                        <h3><i class="mr-2 fas fa-chart-bar"></i><strong class="card-title" v-if="headerText">View Surat Tugas</strong></h3>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-9 offset-md-2">
                                        <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No Surat</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                      
                                      foreach($viewsurat as $value) { ?>

                                            <tr>
                                              <td><?= $value->idSurtu ?></td>
                                              <td><?= $value->no_surat?></td>
                                              <td><?= $value->n_status?></td>
                                              <td><button class="btn btn-sm btn-primary mb-1" type="submit"><i class="fa fa-eye">   View</i>
                                            </tr>                                          
                                      <?php } ?>
