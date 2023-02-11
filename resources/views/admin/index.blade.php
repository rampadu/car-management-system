@extends('admin.admin_master' )
@section('admin')





  <div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Customers</p>
                              <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Car List</p>
                              <h3 class="text-white mb-0 font-weight-500">60 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-warning-light rounded w-60 h-60">
                            <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Rented Cars</p>
                            <h3 class="text-white mb-0 font-weight-500">8 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                        </div>
                    </div>
                </div>
            </div>
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Sales</p>
                              <h3 class="text-white mb-0 font-weight-500">GHS 1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-danger-light rounded w-60 h-60">
                              <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
                              <h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-light rounded w-60 h-60">
                              <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
                              <h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                          </div>
                      </div>
                  </div>
              </div>



              <div class="col-lg-12 col-12">

                <!-- Carousel Slider Only Slide -->
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Carousel Slider With captions</h4>
                  </div>
                  <div class="box-body">
                      <div id="carousel-example-generic-captions" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic-captions" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic-captions" data-slide-to="1" class=""></li>
                              <li data-target="#carousel-example-generic-captions" data-slide-to="2" class=""></li>
                            </ol>                      
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item carousel-item-next carousel-item-left">
                            <img src="#" class="img-fluid" alt="slide-1">
                            <div class="carousel-caption">
                              <h3>First here</h3>
                              <p>this is the subcontent you can use this</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="#" class="img-fluid" alt="slide-2">
                            <div class="carousel-caption">					  
                              <h3>Second here</h3>
                              <p>this is the subcontent you can use this</p>
                            </div>
                          </div>
                          <div class="carousel-item active carousel-item-left">
                            <img src="#" class="img-fluid" alt="slide-3">
                            <div class="carousel-caption">					  
                              <h3>Third here</h3>
                              <p>this is the subcontent you can use this</p>
                            </div>
                          </div>
                        </div>
                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#carousel-example-generic-captions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-generic-captions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>               
                  </div>
                </div>
                <!-- /.box -->
  
              </div>


          </div>
      </section>
      <!-- /.content -->
    </div>
</div>

@endsection