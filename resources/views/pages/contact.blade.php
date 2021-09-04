@extends('layouts.app')


@section('css')
    <link rel="stylesheet" href="css/style.css">
@stop


@section('content')
<div class="container-scroller">
    <div class="main-panel">

        <header id="home" class="jumbotron banner bg-dark">
            <h2 class="section-header text-uppercase display-4 text-light">Contactez-nous</h2>
        </header>

        <div class="padding-y">
            <section id="contact" class="contact">
                <div class="container">

                    <div class="section-title">
                        <h2>Nous contacter</h2>
                    </div>

                    <div class="row contact-info">

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="icofont-google-map"></i>
                                <h3>Adresse</h3>
                                <address>31, rue Paul Kamba Poto-Poto Congo-Brazzaville</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="icofont-phone"></i>
                                <h3>Téléphone</h3>
                                <p><a href="tel:+242056922210">+242 05 692 22 10</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="icofont-envelope"></i>
                                <h3>Email</h3>
                                <p><a href="mailto:info@example.com">royaume.emerkhammaat@gmail.com</a></p>
                            </div>
                        </div>

                    </div>
                    <!-- Alert User -->
                    <div class="form">
                        <form action="https://emerkhammaat.com/contact-form" method="post" role="form" class="php-email-form">
                            <input type="hidden" name="_token" value="c5NeNvjt4JPMsr9PpVjFCUQQCBnvDZFy7PpQ4eEi">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Veuillez saisir au moins 4 caractères" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                <div class="validate"></div>
                                <!-- Show error -->
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Veuillez entrer un email valide">
                                <div class="validate"></div>
                                <!-- Show error -->

                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Votre Téléphone" data-rule="phone" data-msg="Veuillez entrer un téléphone valide">
                                <div class="validate"></div>
                                <!-- Show error -->

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Veuillez saisir au moins 8 caractères du sujet">
                                <div class="validate"></div>
                                <!-- Show error -->


                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Veuillez saisir au moins un bout de message " placeholder="Message"></textarea>
                                <div class="validate"></div>
                                <!-- Show error -->

                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message a été envoyé. Merci!</div>
                            </div>
                            <div class="text-center"><button type="submit" name="send" value="Send">Envoyer le message</button></div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>



@stop