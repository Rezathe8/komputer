<main id="main" class="main">

    <div class="row">
        <div class="col-xl-12">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>


    <div class="pagetitle">
        <h1>Rakitan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Rakitan</a></li>
                <li class="breadcrumb-item active">Rakitan Saya</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- best seller -->
            <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>opsi</h6>
                                </li>

                                <li><a class="dropdown-item" href="<?php echo base_url() . 'pesanan/exportToPdf/' . $this->session->userdata('id_user'); ?>"">Cetak</a></li>
                                <li><a class="dropdown-item" href="#">Hapus</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Prosesor Terupdate<span>| <?= $user; ?></span></h5>

                            <table class="table table-bordered table-striped table-hover" id="table-datatable">
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Komponen</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                            <?php
                            $hitung = array(1,2,3,4,5  );
                            $no = 1;
                            foreach ($hitung as $value) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td>gambar</td>
                                    <td nowrap>Komponen</td>
                                    <td nowrap>Kategori</td>
                                    <td nowrap>Jumlah</td>
                                    <td nowrap>Harga</td>
                                </tr>
                            <?php $no++;
                            } ?>

                            <tr>
                                <td align="center" colspan="5"> <b>Total</b></td>
                                <td>Harga</td>
                            </tr>
                        </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>
        </div>
    </section>


    