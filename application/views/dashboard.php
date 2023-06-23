        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0 font-weight-bold">Kenneth Osborne</h3>
                <p>Your last login: 21h ago from newzealand.</p>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="mb-3 mb-xl-0 pr-1">
                      <div class="dropdown">
                        <button class="btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="typcn typcn-calendar-outline mr-2"></i>Last 7 days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" data-x-placement="top-start">
                          <h6 class="dropdown-header">Last 14 days</h6>
                          <a class="dropdown-item" href="#">Last 21 days</a>
                          <a class="dropdown-item" href="#">Last 28 days</a>
                        </div>
                      </div>
                  </div>
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i>Export</button>
                  </div>
                  <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>info</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row  mt-3">
              <div class="col-xl-6 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Sales Analytics</h4>
                      <button type="button" class="btn btn-sm btn-light">Month</button>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="d-md-flex mb-4">
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-globe-outline mr-1"></i>Buku</h5>
                            <h2 class="text-primary mb-1 font-weight-bold"><?= $total ?></h2>
                          </div>
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-archive mr-1"></i>Petugas</h5>
                            <h2 class="text-secondary mb-1 font-weight-bold"><?= $totalpetugas ?></h2>
                          </div>
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-tags mr-1"></i>Santri</h5>
                            <h2 class="text-warning mb-1 font-weight-bold"><?= $totalsantri ?></h2>
                          </div>
                        </div>
                        <canvas id="salesanalyticChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Card Title</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="mb-5">
                          <div class="mr-1">
                            <div class="text-info mb-1">
                              Data Peminjaman
                            </div>
                            <h2 class="mb-2 mt-2 font-weight-bold"><?= $totalpeminjaman ?></h2>
                            <div class="font-weight-bold">
                              1.4%  Since Last Month
                            </div>
                          </div>
                          <hr>
                          <div class="mr-1">
                            <div class="text-info mb-1">
                              Data Pengembalian
                            </div>
                            <h2 class="mb-2 mt-2  font-weight-bold"><?= $totalpengembalian ?></h2>
                            <div class="font-weight-bold">
                              5.43%  Since Last Month
                            </div>
                          </div>
                        </div>
                        <canvas id="barChartStacked"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>