@extends('layouts.app')

@section('css')


@endsection

@section('content')

<!-- banner section -->
<section id="home" class="banner header">
    <div id="banner-bg-effect" class="banner-effect"></div>
    <div class="container overlay">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12 order-lg-first mt-lg-0 mt-4">
                <h1 class="mb-4 title"><strong>PRESENTATION</strong> du<br>Royaume <strong>Emerkhammaat</strong>
                </h1>
                <p>Le Royaume EMERKHAMMAAT est une Révélation du Créateur Suprême en vue de l’instauration et la restauration du royaume pour l’émergence de la terre-mère par la divinité émanatrice source de toute existence afin de réhabiliter la vraie nature humaine pour vivre en harmonie.</p>
                <div class="mt-5">
                    <a class="btn btn-primary btn-style mr-2" href="/about">En savoir plus</a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12  order-first text-lg-left text-center">
                <div>
                    <img src="logo.png" alt="" class="rounded-circle img-fluid mb-5 w-75">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->


<!-- homepage blog grids -->
<section id="blog">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <h4 class="section-title">Actualités</h4>
                <p class="text-center">Nous publions des formations et des Actualités concernant nos differents domaines restez à l'affut en vous abonnons à notre site</p>
            </div>
        </div>
        <div class="blog-grids row mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 blog-grid" id="zoomIn">
                <a href="#blog-single.html">
                    <iframe class="img-fluid" width="853" height="480" src="https://www.youtube.com/embed/ZItjdvdKgbY?list=TLPQMjMwODIwMjGFbnYpsmi6OQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{-- <figure><img src="assets/images/blog.jpg" class="img-fluid" alt=""></figure> --}}
                </a>
                <div class="blog-info">
                    <h3><a href="#blog-single.html">MESSAGE AU DUGNITAIRE D’AFRIQUE</a> </h3>
                    <ul hidden>
                        <li><a href="#author"><span class="fa fa-user-o mr-2"></span>Johnson smith</a></li>
                        <li><span class="fa fa-calendar mr-2"></span>Jan 16, 2020</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4 blog-grid" id="zoomIn">
                <a href="#blog-single.html">
                    <iframe class="img-fluid" width="853" height="480" src="https://www.youtube.com/embed/8pJHZZ7K3rM?list=TLPQMjMwODIwMjGFbnYpsmi6OQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{-- <figure><img src="assets/images/blog1.jpg" class="img-fluid" alt=""></figure> --}}
                </a>
                <div class="blog-info">
                    <h3><a href="#blog-single.html">Présentation du Royaume Emerkhammaat (Version française)</a> </h3>
                    <ul hidden>
                        <li><a href="#author"><span class="fa fa-user-o mr-2"></span>Alexander</a></li>
                        <li><span class="fa fa-calendar mr-2"></span>Jan 19, 2020</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4 blog-grid" id="zoomIn">
                <a href="#blog-single.html">
                    <iframe width="853" class="img-fluid" height="480" src="https://www.youtube.com/embed/he0C131R7vU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{-- <figure><img src="assets/images/blog2.jpg" class="img-fluid" alt=""></figure> --}}
                </a>
                <div class="blog-info">
                    <h3><a href="#blog-single.html">Presentation of the Emerkhammaat Kingdom (English Version)</a> </h3>
                    <ul hidden>
                        <li><a href="#author"><span class="fa fa-user-o mr-2"></span>Elizabeth ker</a></li>
                        <li><span class="fa fa-calendar mr-2"></span>Jan 21, 2020</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //homepage blog grids -->

<!-- home page service grids -->
<section id="services" class="bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
        <h4 class="section-title text-uppercase">Nos differentes <strong>RUBRIQUES</strong></h4>
        <p class="text-center">Nous apportons la Justice équitable c’est-à-dire les blancs ont mal agit mais, on n’oublie pas le peu de bien qu’ils ont apporté.</p>
      </div>
    </div>
    <div class="row mt-lg-5">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Royaume Messianique Shammah</a></h4>
          <p>Le Royaume Messianique Shammah est centré sur la réforme de l’espèce et de la race humaine afin de faire connaitre et comprendre à l’être humain le but de son existence sur terre. </p>
          <a href="/read/more/1" class="btn btn-primary btn-style">En savoir plus</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Qouronne d’Afrikhammaât Awhanga</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
            <a href="/read/more/2" class="btn btn-primary btn-style">En savoir plus</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Emirat Khamaât</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
            <a href="/read/more/3" class="btn btn-primary btn-style">En savoir plus</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Monarchie Lingakomon</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
            <a href="/read/more/4" class="btn btn-primary btn-style">En savoir plus</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Maison YESHWMBANGU</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
            <a href="/read/more/5" class="btn btn-primary btn-style">En savoir plus</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" >
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-lightbulb-o"></span>
          </div>
          <h4><a href="#url">Autre projets</a></h4>
          <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.</p>
            <a href="/read/more/6" class="btn btn-primary btn-style">En savoir plus</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //home page service grids -->

<!-- testimonials section -->
<section id="slider" class="testimonials">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                <h4 class="section-title">Nos attentes</h4>
                <p class="text-center">Nous attendons le recrutement de la nouvelle génération africaine ou la jeunesse pour fournir les élites de demain qui vont continuer ce que nous commençons afin de restaurer la paix entre les espèces et la race humaine.</p>
            </div>
        </div>
        <div class="large-12 columns mt-5">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images/testi1.jpg" alt=" " class="">
                                    </div>
                                    <div class="ratings my-4 my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Tanguy De</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images/testi2.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Christopher</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images//testi3.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Edward</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images//testi4.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Abigail</h5>
                                            <span>Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="w3l-customers-7">
                        <div class="customers_sur">
                            <div class="customers-left_sur">
                                <div class="customers_grid">
                                    <div class="custo-img-res">
                                        <img src="assets/images//testi5.jpg" alt=" " class="img-fluid">
                                    </div>
                                    <div class="ratings my-4">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consect adipis icing elit. Ab commodi iure minus
                                        placeat quia, animi. Eveniet, iure et. ipsum dolor sed ut init et.</p>
                                    <div class="customers-bottom_sur">
                                        <div class="custo_grid">
                                            <h5>Abigail</h5>
                                            <span>Designation</span>
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
</section>
<!--//testimonials section -->

<!-- stats section -->
<section id="stats" class="stats">
    <div class="container">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="col-lg-5 align-items-center">
                <h4 class="left-title">
                    Nous avons opté pour l’agro-alimentaire </h4>
                <p class="white">Dans l’avenir du secteur minier car, 
                    nous possédons des terres d’exploitation minière. Donc, nous ferons appel à des investisseurs industriels.</p>
            </div>
            <div class="col-lg-7" align="center">
                <a href="/agriculture" class="btn-lg btn-primary">Découvrir</a>
            </div>
        </div>
    </div>
</section>
<!-- //stats section -->




<!-- home page about -->
<section class="w3l-about">
    <div class="container">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="col-lg-6 info mb-lg-0 mb-sm-5 mb-4 align-items-center">
                <h3 class="title">A propos du Royaume EMERKHAMMAAT</h3>
                
                <p class="mt-md-4 mt-3 mb-0">Il nous a été révélé après de longues années d’expérience missionnaire :
                    <p>
                        <ul>
                            <li>-	De l’Apôtre AWHANGA, 30 ans,</li>
                            <li>-	De la sentinelle BOKOSEKO, 25 ans.</li>
                        </ul>
                    </p>
                    Après notre mariage, voici notre premier (1er) enfant, <strong>EMERKHAMMAAT</strong> qui est né du Royaume Messianique Shammah. Car, nous croyons à notre Enseignant et Guide YESHWAH HA MASHYAH. En lui, nous sommes des Messies pour la réunification de la race humaine.
                    Etant donné que, c’est une nouvelle civilisation, pour la dispenser, nous aurons comme activités : Des Conférences en vue de vulgariser d’abord le message.
                </p>
                <a class="btn btn-primary my-3" href="/about"> En savoir plus</a>
            </div>
            <div class="col-lg-6 " align="center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Ankh.svg/1200px-Ankh.svg.png" class="img-fluid w-25 " alt="about">
            </div>
        </div>
    </div>
</section>
<!-- //home page about -->



@endsection

@section('js')
    
@endsection

