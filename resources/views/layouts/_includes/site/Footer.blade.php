<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-8  col-sm-4 footer-contact">
            <h3>Contactos</h3>
            <p><strong>Telefone:</strong> {{$configuration->telefone}}</p>
              <p><strong>WhatsApp:</strong> +244 947 146 690</p>
              <p><strong>Email:</strong> {{$configuration->email}}</p>
              <p><strong>Horário de Funcionamento:</strong> Segunda - Sexta 8h - 18h</p>
              <br>
              <a class="text-white" target="_blank" href="{{route('site.policyPrivacy')}}">Políticas de Privacidade</a>

            </div>

          <div class="col-lg-6 col-md-8 col-sm-4 footer-links">
            <h3>Links Úteis</h3>
              <p>
                <a class="text-white" target="_blank" href="https://governo.gov.ao/">Governo de Angola</a> <br>
                <a class="text-white" target="_blank" href="https://infosi.gov.ao/">INFOSI</a> <br>
                <a class="text-white" target="_blank" href="https://minttics.gov.ao/ao/">MINTTICS</a> <br>
                <a class="text-white" target="_blank" href="https://webmail.fhumanidades.ao/">Webmail FH-UAN</a>
                </p>
          </div>





        </div>
      </div>
    </div>

    <div style="" class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <p class="text-white-50 pt-2 mb-0">
            Faculdade de Humanidades da Universidade Agostinho Neto -
            <script>
                document.write(new Date().getFullYear())
            </script> © Todos Direitos Reservados
        </p>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a target="_blank" href="{{$configuration->youtube}}" class="youtube"><i class="bx bxl-youtube"></i></a>
              <a target="_blank" href="{{$configuration->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a target="_blank" href="{{$configuration->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>

      </div>
    </div>
  </footer><!-- End Footer -->



@if (session('help'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Mensagem Enviada com Sucesso!',
        showConfirmButton: true
    })
</script>

@endif



  <!-- Vendor JS Files -->
  <script src="/site/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/site/assets/vendor/aos/aos.js"></script>
  <script src="/site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/site/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/site/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/site/assets/js/main.js"></script>
  <script src="/site/assets/js/aos.js"></script>

</body>

</html>


@yield('JS')


</body>

</html>
