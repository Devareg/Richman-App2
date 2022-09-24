@extends('layouts.app')

@section('content')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class=" bg-img " style="background-image: url(elements/img/pexels-wayne-fotografias-4926108.jpg); height: auto; width: auto; ">

    <div class="container py-5 pt-5">





            <div class="col-lg-4 mb-lg-0 pt-5 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="{{ asset ('/images/logo-flooz.webp') }}"  width="150px" alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold">(00228) ** ** ** 25</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Vous devez avoir un compte flooz obligatoirement.</small>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-3">
                    <p class="mb-0 fw-bold mx-auto h4">METHODE DE PAYEMENT</p>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-3">

                    <div class="card-body border p-0">
                        <p>
                            <div class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                aria-controls="collapseExample" style="background-color:#DEE300 ;">
                                <span class="fw-bold">FLOOZ</span>
                                <span class="">
                                    <span class="fab fa-cc-amex"></span>
                                    <span class="fab fa-cc-mastercard"></span>
                                    <span class="fab fa-cc-discover"></span>
                                </span>
                                </div>

                        </p>
                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0 mb-3">
                                    <p class="h4 mb-0">Sommaire</p>
                                    <p class="mb-0"><span class="fw-bold">Produit:</span><span class="c-green">: Ticket de restaurant</span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="fw-bold">Prix:</span>
                                        <span class="c-green">2.000 Fcfa / L'unité</span>
                                    </p>
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque
                                        quisquam aut
                                        repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                        quis,
                                        iste harum ipsum hic, nemo qui!</p>
                                </div>
                                <div class="col-lg-7">
                                     <!-- Success message -->

                                    <form class="form">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="tel"id="telephone" name="telephone" class="form-control" placeholder=" Ex: 00000000 ">
                                                    <label for="" class="form__label">Numéro (flooz uniquement)</label>

                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="number " name="nombreticket" class="form-control" placeholder="1-4">
                                                    <label for="" class="form__label">Nombre de ticket</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="text" name="total" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">TOTAL A PAYER</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn btn-danger w-100" style="background-color: #DEE300 !important; border:black ; color: black; font-weight: 600;">Soumettre</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
