@extends('layouts.frontLayouts.front_design')
@section('content')
<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-contact">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Contact Us</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Let us know if you have any concern about our menu, service or other information you want to have</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="ct-info-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-sm-12">
                    <div class="swin-sc swin-sc-title style-2 text-left">
                      <p class="title"><span>Get In Touch</span></p>
                    </div>
                    <div class="reservation-form style-02">
                      <div class="swin-sc swin-sc-contact-form light mtl style-full">
                        <form>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" placeholder="Username" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                              <input type="text" placeholder="Email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <div class="fa fa-phone"></div>
                              </div>
                              <input type="text" placeholder="Phone" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <textarea placeholder="Message" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <div class="swin-btn-wrap"><a href="#" class="swin-btn center form-submit"><span>Send</span></a></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="swin-sc swin-sc-title style-2 text-left">
                      <p class="title"><span>Contact Info</span></p>
                    </div>
                    <div class="swin-sc swin-sc-contact">
                      <div class="media item">
                        <div class="media-left">
                          <div class="wrapper-icon"><i class="icons fa fa-map-marker"></i></div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Salonica pizzeria</h4>
                          <div class="description">5261 Rue St-Denis, Montreal, Quebec H2J 2M1</div>
                        </div>
                      </div>
                      <!-- <div class="media item">
                        <div class="media-left">
                          <div class="wrapper-icon"><i class="icons fa fa-map-marker"></i></div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Restaurent 2</h4>
                          <div class="description">158 White Oak Drive Kansas City</div>
                        </div>
                      </div> -->
                      <div class="media item">
                        <div class="media-left">
                          <div class="wrapper-icon"><i class="icons fa fa-phone"></i></div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Phone Number</h4>
                          <div class="description">514 274-9319</div>
                        </div>
                      </div>
                      <div class="media item">
                        <div class="media-left">
                          <div class="wrapper-icon"><i class="icons fa fa-envelope"></i></div>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading title">Mail</h4>
                          <div class="description">
                            <p>info@salonica.com.bd</p>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="map-section padding-bottom-100">
              <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.105440822257!2d-73.59374848497126!3d45.52808367910171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9197d5072f84f%3A0x30ce092de1407a96!2s5261+St+Denis+St%2C+Montreal%2C+QC+H2J+2M1%2C+Canada!5e0!3m2!1sen!2sbd!4v1542136393723" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              
            </section>
          </div>
</div>
@endsection