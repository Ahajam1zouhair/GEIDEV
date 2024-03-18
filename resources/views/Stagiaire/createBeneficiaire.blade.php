@extends('Layouts.mastare')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Add Bénéficiaire</h4>
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('stagiaire.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="externe"
                                                id="disabledCheck2" name="type_stag" checked />
                                            <label class="form-check-label" for="disabledCheck2">externe </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class=" col-form-label" for="">nom</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('nom') is-invalid @enderror"
                                                    id="basic-default-nom" placeholder="nom stagiaire" name="nom" />
                                                @error('nom')
                                                    <div class="alert alert-danger ">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label class="col-form-label" for="basic-default-prenom">prenom
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('prenom') is-invalid @enderror"
                                                    id="basic-default-prenom" placeholder="prenom stagiaire"
                                                    name="prenom" />
                                                @error('prenom')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label class="col-form-label" for="basic-default-civilite">Genre : </label>
                                            <div class="col-sm-10">
                                                <div
                                                    class="form-check form-check-inline mt-3 @error('civilite') is-invalid @enderror">
                                                    <input class="form-check-input" type="radio" name="civilite"
                                                        id="inlineRadio1" value="homme" />
                                                    <label class="form-check-label" for="inlineCheckbox1">homme</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="civilite"
                                                        id="inlineRadio2" value="femme" />
                                                    <label class="form-check-label" for="inlineCheckbox2">femme</label>
                                                </div>
                                                @error('civilite')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="basic-default-cin">Cin
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('cin') is-invalid @enderror"
                                                id="basic-default-cin" placeholder="cin " name="cin" />
                                            @error('cin')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label class=" col-form-label" for="basic-default-date_naissance">date
                                                naissance </label>
                                            <div class="col-sm-10">
                                                <input type="date"
                                                    class="form-control @error('date_naissance') is-invalid @enderror"
                                                    id="basic-default-date_naissance" placeholder="date naissance stagiaire"
                                                    name="date_naissance" />
                                                @error('date_naissance')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label class=" col-form-label" for="basic-default-tel">tel
                                                Bénéficiaire</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('tel') is-invalid @enderror"
                                                    id="basic-default-tel" placeholder="tel stagiaire" name="tel" />
                                                @error('tel')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label class=" col-form-label" for="basic-default-tel">email </label>
                                            <div class="col-sm-10">
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="basic-default-email" placeholder="email stagiaire"
                                                    name="email" />
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label" for="basic-default-cin_stag">statut </label>
                                        <div class="col-sm-10">
                                            <div
                                                class="form-check form-check-inline mt-3 @error('cin_stag') is-invalid @enderror">
                                                <input class="form-check-input" type="radio" name="statut"
                                                    id="inlineRadio1" value="SENSIBILAISE" />
                                                <label class="form-check-label bg-label-warning"
                                                    for="inlineCheckbox1">SENSIBILAISE</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="statut"
                                                    id="inlineRadio2" value="FORME" />
                                                <label class="col-form-labell bg-label-success"
                                                    for="inlineCheckbox2">FORME</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="statut"
                                                    id="inlineRadio2" value="VISITER_INCUBATEUR" />
                                                <label class="form-check-label bg-label-primary"
                                                    for="inlineCheckbox2">VISITER INCUBATEUR</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input " type="radio" name="statut"
                                                    id="inlineRadio2" value="PROTRUR_PROJET" />
                                                <label class="form-check-label bg-label-info "
                                                    for="inlineCheckbox2">PROTRUR PROJET</label>
                                            </div>
                                            @error('statut')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label"> commentaire</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="commentaire" rows="3"></textarea>
                                        @error('commentaire')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection