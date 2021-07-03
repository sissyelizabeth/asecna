@extends('index')

@section('content-dashboard')
    <div class="container" style="opacity: 90%;">
          <h2 style="padding-top: 40px; padding-bottom: 40px; text-transform: uppercase">Liste des utilisateurs</h2>
          <div class="row">
            <div class="col-3">
                <a href="{{ route('user-management-form') }}" class="btn btn-primary" style="padding: 10px">
                  <i class="fa fa-plus"></i>
                  Ajouter un utilisateur
                </a>
            </div>
          </div>
          <div class="row">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <td scope="col">Nom et prénom</td>
                  <td scope="col">Téléphone</td>
                  <td scope="col">Adresse</td>
                  <td scope="col">Role</td>
                  <td scope="col">Actions</td>
                </thead>
                <tbody>
              
                    <tr>
                      <td> John Doe</td>
                      <td> 699665588 </td>
                      <td> Odza </td>
                      <td>  Admin </td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                          </button>
                          <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">
                              Modifier
                            </a>
                            <a href="#" class="dropdown-item">
                              Supprimer
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>

    </div>    
@endsection

