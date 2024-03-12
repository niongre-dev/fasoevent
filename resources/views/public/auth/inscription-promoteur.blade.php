@extends('private._layouts.app')

@section('titre', "Inscription promoteur")

@section('contenu')
<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
  <div class="row flex-grow">
    <div class="col-lg-7 d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-left p-3">
          <div class="brand-logo">
            <img src="{{ asset('assets_private/images/logo.svg') }}" alt="logo">
          </div>
          <h4>Inscription Promoteur</h4>
          <h6 class="font-weight-light">Veuillez entrer vos coordonnées pour créer un compte</h6>
          <form class="pt-3">
            <div class="form-group">
              <label>Nom complet</label>
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <span class="input-group-text bg-transparent border-right-0">
                    <i class="mdi mdi-account-outline text-primary"></i>
                  </span>
                </div>
                <input type="text" class="form-control form-control-lg border-left-0" placeholder="Entrez votre  nom complet">
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <span class="input-group-text bg-transparent border-right-0">
                    <i class="mdi mdi-email-outline text-primary"></i>
                  </span>
                </div>
                <input type="email" class="form-control form-control-lg border-left-0" placeholder="Entrez votre email">
              </div>
            </div>
            
            <div class="form-group">
              <label>Mot de passe</label>
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <span class="input-group-text bg-transparent border-right-0">
                    <i class="mdi mdi-lock-outline text-primary"></i>
                  </span>
                </div>
                <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Entrez votre mot de passe">                        
              </div>
            </div>
            <div class="form-group">
                <label>Addresse</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputAddresse" placeholder="Entrez votre adresse">                        
                </div>
            </div>
            <div class="form-group">
                <label>Siège</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputSiège" placeholder="Entrez votre siège">                        
                </div>
            </div>
            <div class="form-group">
                <label>Téléphone</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="number" class="form-control form-control-lg border-left-0" id="exampleInputTéléphone" placeholder="Entrez votre téléphone">                        
                </div>
            </div>
            <div class="form-group">
                <label>Domaines d'activités</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </span>
                  </div>
                  <textarea name="" class="form-control form-control-lg border-left-0" id="" cols="30" rows="10" placeholder="Entrez vos domaines d'activités"></textarea>
                </div>
            </div>
            <div class="mb-4">
              <div class="form-check">
                <label class="form-check-label text-muted">
                  <input type="checkbox" class="form-check-input">
                  I agree to all Terms & Conditions
                </label>
              </div>
            </div>
            <div class="mt-3">
              <a class="btn btn-block btn-primary w-100 text-white btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a>
            </div>
            <div class="text-center mt-4 font-weight-light">
              S'inscrire en tant que promoteur.<a href="{{ route('public.inscription-promoteur') }}" class="text-primary">Aller</a>
            </div>
            <div class="text-center mt-4 font-weight-light">
              Avez-vous déjà un compte ? <a href="login.html" class="text-primary">Se connecter</a>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5 register-half-bg d-flex flex-row">
        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
      </div>
  </div>
</div>
@endsection