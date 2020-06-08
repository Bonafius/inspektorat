<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="sectioncontent sectioncontent--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header overview-wrap">
                                        <h3><i class="mr-2 fas fa-chart-bar"></i><strong class="card-title" v-if="headerText">Data User</strong></h3>
                                    </div>
                                <div class="card-body">
                                <div class="row">
                                <div class="col-md-9 offset-md-2">
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Created_at</th>
                                            <th scope="col">Updated_at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1;
                                        foreach($user as $value) { ?>
 
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value->name ?></td>
                                                <td><?= $value->email ?></td>
                                                <td><?= $value->created_at ?></td>
                                                <td><?= $value->updated_at ?></td>
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