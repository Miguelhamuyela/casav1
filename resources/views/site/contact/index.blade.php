@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Contactos</h2>
       </div>
    </div><!-- End Breadcrumbs -->


         <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div data-aos="fade-up">

          <iframe  style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15770.494098336858!2d13.2346032!3d-8.8213927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a0ab79b719cb577!2sFaculdade%20de%20Humanidades%20-%20UAN!5e0!3m2!1spt-PT!2sao!4v1676548223213!5m2!1spt-PT!2sao" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container" data-aos="fade-up">

          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Localização:</h4>
                  @isset($configuration->address)

                  <p>{{ $configuration->address }}</p>
                  @endisset

                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  @isset($configuration->email)
                  <p>{{$configuration->email}}</p>
                  @endisset

                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Telefone:</h4>
                  @isset($configuration->telefone)
                  <p>{{$configuration->telefone}}</p>
                  @endisset

                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="{{ route('site.help.email') }}" method="POST"  class="contact-form">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Escreva o seu nome" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Insira o seu Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Insira o Assunto" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="msg" rows="5" placeholder="Escrever Mensagem" required></textarea>
                </div>

                <div class="text-center"><button type="submit">Enviar</button></div>
              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->


  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>


@endsection
