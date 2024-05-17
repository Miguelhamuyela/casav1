@extends('layouts.merge.site')
@section('titulo', 'Departamento de Administração e Gestão do Orçamento')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs aos-init aos-animate" data-aos="fade-in">
      <div class="container">
        <h2 class="mt-5">Departamento de Administração e Gestão do Orçamento</h2>
       </div>
    </div><!-- End Breadcrumbs -->


<section id="popular-courses" class="courses">
    <div class="container aos-init aos-animate" data-aos="fade-up">


      <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">






                <div class="container aos-init aos-animate" data-aos="fade-up">

                    <div class="row">
                      <div class="col-lg-5 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                        <img src="/storage/{{$BudgetDepartment->image}}" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-7 ">
                        <p class="fst-italic">
                          <h3>{{$BudgetDepartment->title}}</h3>
                         {!!html_entity_decode($BudgetDepartment->body)!!}
                        </p>


                      </div>
                    </div>

                  </div>

        <!-- End Course Item-->



        <div class="pt-5 pt-lg-0 order-2 order-lg-1 content">
            <h3 style="margin-top: 100px;" class="text-center mt-5">Funcionários</h3>


            <div class="row">

                <table class="table table-striped">
                    <thead>
                      <tr style="background-color: #081c4c; color:white;">

                        <th scope="col">Nome</th>
                        <th scope="col">Função</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($BudgetDepartment->departmentMember as $item)

                        <tr>

                            <td>{{$item->name}}</td>

                            <td>{{$item->function}}</td>
                          </tr>

                        @endforeach



                    </tbody>
                  </table>

            </div>

          </div>

        </div>





      </div>

    </div>
  </section>
  </main>

  <div  style="background-image: url('/site/assets/img/footer.jpg');color:white; height:12px;">
    ...
</div>
@endsection
