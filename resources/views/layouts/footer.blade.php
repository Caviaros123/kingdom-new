
<!-- site footer -->
<footer id="site-footer">
  <div class="top-footer">
    <div class="container my-md-5 my-4">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-logo mb-3">
             <a class="navbar-brand d-block d-sm-none p-0 m-0" href="{{ url('/') }}">
                <img src="{{asset('logo.png')}}" alt="logo" class="logo-brand w-25  d-none d-md-block">
                {{ config('app.name', 'Laravel') }} 
            </a>
            <a class="navbar-brand  d-none d-md-block p-0 m-0" href="{{ url('/') }}">
                <img src="{{asset('logo.png')}}" alt="logo" class="logo-brand w-25">
                {{ config('app.name', 'Laravel') }} 
            </a>
          </div>
          <div>
            <p class="">Le Royaume Messianique Shammah est centré sur la réforme de l’espèce et 
                de la race humaine afin de faire connaitre et comprendre à l’être humain le but 
                de son existence sur terre. Car, on est venu sur terre et l’on va quitter tôt ou 
                tard pour retourner et pour être jugé à cause de ce que nous avons accompli sur terre. <a href="#">Voir plus...</a></p>
          </div>
        </div>
        <!-- Quick Links -->
        <div class="col-lg-3 col-md-4 mt-lg-0 mt-5">
          <h4 class="footer-title">Liens Rapides</h4>
          <ul class="footer-list">
            <li><a href="#about"> A Propos de nous</a></li>
            <li><a href="#services"> Explorez nos produits</a></li>
            <li><a href="#work"> Qui somme nous?</a></li>
            <li><a href="#projects"> Nos rélisations</a></li>
          </ul>
        </div>
        <!-- Newsletter -->
        <div class="col-lg-5 col-md-8 mt-lg-0 mt-5">
          <h4 class="footer-title">Infolettre</h4>
          <p class="mb-4">En vous inscrivant à notre liste de diffusion, vous serez toujours informé des dernières nouvelles de notre part.
          </p>
          <form class="newsletter-form">
            <input class="input-rounded" type="text" required placeholder="Saisissez votre adresse Email">
            <button type="submit" title="Subscribe" class="btn btn-primary btn-style" name="submit" value="Submit">
              S'abonner
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-lg-left text-center mb-lg-0 mb-3">
          <p class="copyright">© 2021 {{ config('app.name', '') }}. Tous droits réservés. Créer par<a
            href="https://kalisso.com/smart-tech"> Smart-Tech</a></p>
        </div>
        <div class="col-lg-4 align-center text-lg-right text-center">
          <a href="#facebook" class="social-item"><span class="fa fa-facebook-f fa-2x"></span></a>
          <a href="#youtube" class="social-item"><span class="fa fa-youtube fa-2x"></span></a>
          <a href="#twitter" class="social-item"><span class="fa fa-twitter fa-2x"></span></a>
          <a href="#instagram" class="social-item"><span class="fa fa-instagram fa-2x"></span></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- //site footer -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>

