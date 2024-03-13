@extends('private._layouts.app')

@section('titre', "Page de connexion")

@section('contenu')
<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
    <div class="row flex-grow">
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-left p-3">
          <div class="brand-logo">
            <img src="{{ asset('assets_private/images/logo.svg') }}" alt="logo">
          </div>
          <h4>Connexion !!!</h4>
          <h6 class="font-weight-light">Veuillez entrer vos coordonnées pour vous connecter</h6>
          <form class="pt-3">
            <div class="form-group">
              <label for="exampleInputEmail">Email</label>
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <span class="input-group-text bg-transparent border-right-0">
                    <i class="mdi mdi-account-outline text-primary"></i>
                  </span>
                </div>
                <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Entrez votre émail">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword">Mot de passe</label>
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <span class="input-group-text bg-transparent border-right-0">
                    <i class="mdi mdi-lock-outline text-primary"></i>
                  </span>
                </div>
                <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Entrez votre mot de passe">                        
              </div>
            </div>
            
            <div class="my-3">
              <a class="btn btn-block btn-primary w-100 text-white btn-lg font-weight-medium auth-form-btn" href="../../index.html">Se connecter</a>
            </div>
            
            <div class="text-center mt-4 font-weight-light">
              Avez-vous déjà un compte ? <a href="{{ route('public.inscription-option') }}" class="text-primary">Créer</a>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 login-half-bg d-flex flex-row">
        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
      </div>
    </div>
  </div>
@endsection