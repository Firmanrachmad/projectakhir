@extends('master')
  @section('content')
  <!-- Masthead-->
  <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Travel Blog!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Read More</a>
            </div>
        </header>
        <!-- Portfolio Grid-->
        
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                
                <div class="row">
                @foreach($wisatasAll as $art)
                    <div class="col-lg-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portofolioModal{{ $art->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="storage/{{$art->featured_image}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$art->title}}</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                @foreach($reviewsAll as $fart)
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="storage/{{$fart->featured_image}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{$fart->title}}</h4>
                                <h4 class="subheading">{{$fart->kategori}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{$fart->comment}}</p></div>
                        </div>
                    </li>
                @endforeach    
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
            <center><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="\wisatar\add">Tambah Data</a></center>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    @foreach($wisatasp as $wart)
                    <div class="col-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="storage/{{$wart->featured_image}}" alt="" />
                            <h4>{{$wart->title}}</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                    
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        @foreach($wisatasAll as $art)
        <div class="portfolio-modal modal fade" id="portofolioModal{{$art->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">{{$art->title}}</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="storage/{{$art->featured_image}}" alt="" />
                                    <p>{{$art->content}}</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
  @endsection	