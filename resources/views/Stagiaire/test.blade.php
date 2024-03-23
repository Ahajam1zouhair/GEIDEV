@extends('Layouts.mastare')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Add stagiaire</h4>
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <div>
                            <input type="radio" id="typeInterne" name="type_stag" value="interne" checked>
                            <label for="typeInterne">Interne</label>

                            <input type="radio" id="typeExterne" name="type_stag" value="externe">
                            <label for="typeExterne">Externe</label>
                        </div>
                        <div id="champsInterne">
                            <form action="{{ route('stagiaire.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Interne" id="disabledCheck2" name="type_stag"  checked />
                                            <label class="form-check-label" for="disabledCheck2">Interne </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class=" col-form-label" for="">matricule stagiaire</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('matricule') is-invalid @enderror" id="basic-default-nom_stag" placeholder="matricule stagiaire" name="matricule" />
                                                @error('matricule')
                                                <div class="alert alert-danger ">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <label class=" col-form-label" for="">nom stagiaire</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="basic-default-nom" placeholder="nom stagiaire" name="nom" />
                                                @error('nom')
                                                <div class="alert alert-danger ">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label class="col-form-label" for="basic-default-prenom">prenom stagiaire</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="basic-default-prenom" placeholder="prenom stagiaire" name="prenom" />
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
                                                <div class="form-check form-check-inline mt-3 @error('civilite') is-invalid @enderror">
                                                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" value="homme" />
                                                    <label class="form-check-label" for="inlineCheckbox1">homme</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" value="femme" />
                                                    <label class="form-check-label" for="inlineCheckbox2">femme</label>
                                                </div>
                                                @error('civilite')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="col-form-label" for="basic-default-cin">Cin stagiaire
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('cin') is-invalid @enderror" id="basic-default-cin" placeholder="cin " name="cin" />
                                            @error('cin')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-3">
                                            <label class=" col-form-label" for="basic-default-date_naissance">date
                                                naissance stagiaire</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control @error('date_naissance') is-invalid @enderror" id="basic-default-date_naissance" placeholder="date naissance stagiaire" name="date_naissance" />
                                                @error('date_naissance')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">


                                        <div class="row mb-3">
                                            <label class=" col-form-label" for="basic-default-tel">tel
                                                stagiaire</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('tel') is-invalid @enderror" id="basic-default-tel" placeholder="tel stagiaire" name="tel" />
                                                @error('tel')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>



                                </div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                            </form>
                        </div>
                        <div id="champsExterne" style="display: none;">
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
</div>
@endsection

@section('javescript')
<script>
    $(document).ready(function() {
        // Détecte un changement sur les boutons radio du type de stagiaire
        $('input[type="radio"][name="type_stag"]').change(function() {
            if (this.value == 'interne') {
                $("#champsInterne").show();
                $("#champsExterne").hide();
            }
            else if (this.value == 'externe') {
                $("#champsExterne").show();
                $("#champsInterne").hide();
            }
        });
    });
    </script>
@endsection
