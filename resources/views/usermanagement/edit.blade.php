@extends('index')

@section('content-dashboard')
    <div class="container" style="opacity: 1;">
          <h2 style="padding-top: 40px; padding-bottom: 40px; text-transform: uppercase">Modifier le profile</h2>
          <div class="row">
            <div class="card-body">
                <form action="#" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}

                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="nom" class="control-label">Nom</label>
                          <input 
                            id="nom" 
                            type="text" 
                            class="form-control" 
                            name="nom" 
                            required autofocus
                          />

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="prenom" class="control-label">Prénom</label>
                          <input 
                            id="prenom" 
                            type="text" 
                            class="form-control" 
                            name="prenom" 
                            required autofocus
                          />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="telephone" class="control-label">Téléphone</label>
                          <input 
                            id="telephone" 
                            type="text" 
                            class="form-control" 
                            name="telephone" 
                            required autofocus
                          />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="adresse" class="control-label">Adresse</label>
                          <input 
                            id="adresse" 
                            type="text" 
                            class="form-control" 
                            name="adresse" 
                            required autofocus
                          />
                        </div>
                      </div>
              
                    </div>
                  </div>
                  
                  <div class="form-group text-center" style="padding-top: 20px">
                    <input type="submit" class="btn btn-success" /> &nbsp; &nbsp;
                    <a href="{{ route('user-management') }}" class="btn btn-secondary">
                      Annuler
                    </a>
                  </div>
                  
                </form>
              </div>
          </div>
    </div>    
@endsection

