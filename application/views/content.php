<main id="main" class="main">

    <div class="row">
        <div class="col-lg-6 justify-content-x">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>


    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Simulasi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- End Page Title -->
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item active">
                                    <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-5.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-6.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/slides-7.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div><!-- End Slides with indicators -->
                    </div>
            </section>

            <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">Mau tau cara pilih komponen yang tepat? Ram komputer solusinya, langsung aja klik disini <a href="#">Ram-komputer.com/tutorial-simulasi</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Pilihan Kompabilitas</h5>

                        <nav>
                            <ol class="breadcrumb">
                                <div class="col-7 col-md-6 col-sm-6 pe-2"><label for="mode">Pilih Mode</label>
                                    <select name="mode" id="mode" data-placeholder="Pilih">
                                        <option value="advance">Advance - <div class="h3 option" data-selectable="" data-value="0">Tanpa Kompatibilitas<small class="d-block text-muted mt-2">Simulasi tanpa pengecekan kompatibilitas.</small></div>
                                        </option>
                                        <option value="basic">Basic - <div class="h3 option selected" data-selectable="" data-value="1">Dengan Kompatibilitas<small class="d-block text-muted mt-2">Simulasi dengan pengecekan kompatibilitas antara Processor dengan Motherboard berdasarkan Tipe Socket.</small></div>
                                        </option>
                                    </select>
                                </div>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="prosesor">Pilih Prosesor</label>
                                <select name="prosesor" id="prosesor">
                                    <option value="advance">Intel</option>
                                    <option value="basic">AMD</option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="socket">Pilih Socket</label>
                                <select name="socket" id="socket">
                                    <option value="advance">banyak</option>
                                    <option value="basic">am4 terus gannn</option>
                                </select>
                            </ol>
                        </nav>
                        <nav>
                            <ol class="breadcrumb">
                                <label for="ram">Pilih Ram</label>
                                <select name="ram" id="ram">
                                    <option value="advance">Advance - <div class="h3 option" data-selectable="" data-value="0">Tanpa Kompatibilitas<small class="d-block text-muted mt-2">Simulasi tanpa pengecekan kompatibilitas.</small></div>
                                    </option>
                                    <option value="basic">Basic - <div class="h3 option selected" data-selectable="" data-value="1">Dengan Kompatibilitas<small class="d-block text-muted mt-2">Simulasi dengan pengecekan kompatibilitas antara Processor dengan Motherboard berdasarkan Tipe Socket.</small></div>
                                    </option>
                                </select>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pilihan Perlengkapan</h5>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="kesing">Pilih Kesing</label>
                                <select name="kesing" id="kesing" autofocus>
                                    <option value="advance">kesing1</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="SSD 1">Pilih SSD 1</label>
                                <select name="SSD 1" id="SSD 1" autofocus>
                                    <option value="advance">SSD 11</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="SSD 2">Pilih SSD 2</label>
                                <select name="SSD 2" id="SSD 2" autofocus>
                                    <option value="advance">SSD 21</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="HDD 1">Pilih HDD 1</label>
                                <select name="HDD 1" id="HDD 1" autofocus>
                                    <option value="advance">HDD 11</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="HDD 2">Pilih HDD 2</label>
                                <select name="HDD 2" id="HDD 2" autofocus>
                                    <option value="advance">HDD 21</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="VGA 1">Pilih VGA 1</label>
                                <select name="VGA 1" id="VGA 1" autofocus>
                                    <option value="advance">VGA 11</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="VGA 2">Pilih VGA 2</label>
                                <select name="VGA 2" id="VGA 2" autofocus>
                                    <option value="advance">VGA 21</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="PSU">Pilih PSU</label>
                                <select name="PSU" id="PSU" autofocus>
                                    <option value="advance">PSU1</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="Mouse">Pilih Mouse</label>
                                <select name="Mouse" id="Mouse" autofocus>
                                    <option value="advance">Mouse1</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="Mousepad">Pilih Mousepad</label>
                                <select name="Mousepad" id="Mousepad" autofocus>
                                    <option value="advance">Mousepad1</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="Keyboard">Pilih Keyboard</label>
                                <select name="Keyboard" id="Keyboard" autofocus>
                                    <option value="advance">Keyboard1</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="Monitor 1">Pilih Monitor 1</label>
                                <select name="Monitor 1" id="Monitor 1" autofocus>
                                    <option value="advance">Monitor 11</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="Monitor 2">Pilih Monitor 2</label>
                                <select name="Monitor 2" id="Monitor 2" autofocus>
                                    <option value="advance">Monitor 21</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                        <nav>
                            <ol class="breadcrumb">
                                <label for="Monitor 3">Pilih Monitor 3</label>
                                <select name="Monitor 3" id="Monitor 3" autofocus>
                                    <option value="advance">Monitor 31</option>
                                    <option value="basic"></option>
                                </select>
                            </ol>
                        </nav>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">With Home Icon</h5>

                        <nav>
                            <ol class="breadcrumb">
                            </ol>
                        </nav>
                    </div>
                </div>

                <!-- best seller -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>opsi</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                                <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Best Seller <span>| Bulan Ini</span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Preview</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Sold</th>
                                        <th scope="col">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                        <td>$64</td>
                                        <td class="fw-bold">124</td>
                                        <td>$5,828</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                        <td>$46</td>
                                        <td class="fw-bold">98</td>
                                        <td>$4,508</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                        <td>$59</td>
                                        <td class="fw-bold">74</td>
                                        <td>$4,366</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                        <td>$32</td>
                                        <td class="fw-bold">63</td>
                                        <td>$2,016</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                        <td>$79</td>
                                        <td class="fw-bold">41</td>
                                        <td>$3,239</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->
            </div>



            <!-- <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Breadcrumbs with a page title</h5>

                    <div class="pagetitle">
                        <h1>Page Title</h1>
                        <nav>
                            <ol class="breadcrumb">
                            </ol>
                        </nav>
                    </div> // End Breadcrumbs with a page title 

                </div>
            </div>

             <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Breadcrumbs with different dividers</h5>

                    <nav style="--bs-breadcrumb-divider: '>';">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: '|';">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: '-';">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: '•';">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </nav>

                    <nav style="--bs-breadcrumb-divider: '';">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </nav>

                </div>
            </div> -->
        </div>
    </section>

</main><!-- End #main -->