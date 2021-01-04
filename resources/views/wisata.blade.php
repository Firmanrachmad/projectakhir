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
                    <h2 class="section-heading text-uppercase">Destinasi Wisata</h2>
                    <h3 class="section-subheading text-muted">Di page ini akan diberikan foto destinasi wisata yang ada di seluruh Indonesia.</h3>
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
                    <h2 class="section-heading text-uppercase">Review Wisata</h2>
                    <h3 class="section-subheading text-muted">Disini adalah halaman tentang review wisata yang sudah dikunjungi orang-orang</h3>
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
            <center><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="\wisataru\add">Tambah Data</a></center>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Rekomendasi Wisata</h2>
                    <h3 class="section-subheading text-muted">Disini akan disajikan rekomendasi destinasi wisata di tahun 2021</h3>
                </div>
                <div class="row">
                    @foreach($wisatasp as $wart)
                    <div class="col-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="storage/{{$wart->featured_image}}" alt="" />
                            <h4>{{$wart->title}}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
                    
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Happy Travellin'!</p></div>
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
                                    <img class="img-fluid d-block mx-auto" src="storage/{{$art->featured_image}}" alt="" />
                                    <p>{{$art->content}}</p>
                                    <ul class="list-inline">
                                        <li>{{ Auth::user()->name }}</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    @foreach($komentarAll as $kart)
                                    <div class="media mb-4">
                                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                        <div class="media-body">
                                            <h5 class="mt-0">{{ Auth::user()->name }}</h5>
                                            {{$kart->comment}}
                                        </div>
                                    </div>
                                    <div class="card my-4">
                                        <h5 class="card-header">Leave a Comment:</h5>
                                        <div class="card-body">
                                            <form action="/wisata/{{$kart->id}}/addComment" method="post">
                                            @csrf
                                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                            <div class="form-group">
                                                <p>Name : </p>
                                                <li>{{ Auth::user()->name }}</li>
                                            </div>
                                            <div class="form-group">
                                                <p>Comment : </p>
                                                <input class="form-control" type="text" name="comment"></input>
                                            </div>
                                            <input type="hidden" name="id_artikel" value="{{$kart->id}}">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
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