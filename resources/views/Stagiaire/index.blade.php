@extends('Layouts.mastare')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
            <div class="row">
                <div class="col-md-8">
                    <a href="{{ route('stagiaire.create') }}" class="btn btn-primary  mb-4"> Add stagiaire</a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('stagiaire.create') }}" class="btn btn-primary  mb-4"> Add stagiaire</a>
                </div>
            </div>
            <!-- Basic Bootstrap Table -->
            <div class="card ">
                <h4 class="fw-bold py-3 m-2"> Rechercher</h4>
                <div class="row ">
                    <div class="col-md-4">
                        <div class="row">
                            <label class=" col-form-label" for="">CIN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="searchByCin" name="searchByCin"
                                    placeholder="searchByCin..." aria-label="searchByCin..."
                                    aria-describedby="basic-addon-search31" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <label class=" col-form-label" for=""> Nom</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="searchByName" name="search_name"
                                    placeholder="SearchByName..." aria-label="Search..."
                                    aria-describedby="basic-addon-search31" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <label class=" col-form-label" for=""> Prenom</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="searchByPrenom" name="searchByPrenom"
                                    placeholder="searchByPrenom..." aria-label="Search..."
                                    aria-describedby="basic-addon-search31" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="basic-default-poles">filieres</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                                name="filere">
                                <option selected>DEV101</option>
                                <option selected>DEV102</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="basic-default-poles">GROUPE</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                                name="filere">
                                <option selected>DEV101</option>
                                <option selected>DEV102</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="basic-default-poles">GROUPE</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                                name="filere">
                                <option selected>DEV101</option>
                                <option selected>DEV102</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-cin_stag">stagaiaire </label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="statut" id="inlineRadio2" value="FORME" />
                                <label class="col-form-labell bg-label-success" for="inlineCheckbox2">Sensibilisé</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" name="statut" id="inlineRadio2" value="VISITER_INCUBATEUR" />
                                <label class="form-check-label bg-label-primary" for="inlineCheckbox2">Visité I'incubateur</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" name="statut" id="inlineRadio2" value="PROTRUR_PROJET" />
                                <label class="form-check-label bg-label-info " for="inlineCheckbox2">Porteur de projet</label>
                            </div>
                            @error('statut')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr />
                <div class="card m-4">
                    <h5 class="card-header">Table les Stagiaire</h5>
                    <div class="table-responsive text-nowrap" id="search_result">
                        <table class="table" id="stagiairesTable">
                            <thead class="table-light">
                                <tr>
                                    <th>MARICULE</th>
                                    <th>CIN</th>
                                    <th>NOM & prénom</th>
                                    <th>STATUT</th>
                                    <th>filére</th>
                                    <th>GROUPE</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($stagiaires as $stagiaire)
                                    <tr>
                                        <td>{{ $stagiaire->matricule }}</td>
                                        <td>{{ $stagiaire->cin }}</td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $stagiaire->nom }}
                                                {{ $stagiaire->prenom }}</strong>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">{{ $stagiaire->statut }}</span></td>
                                        <td> {{ $stagiaire->filere }}</td>
                                        <td> {{ $stagiaire->groupe }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('javescript')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#searchByName').on('keyup', function() {
                    var value = $(this).val().toLowerCase();
                    $.ajax({
                        url: "/stagiairesdata",
                        type: "GET",
                        success: function(data) {
                            var filteredData = data.filter(function(stag) {
                                return stag.nom.toLowerCase().includes(value);
                            });
                            updateTable(filteredData);
                        }
                    });
                });

                // || prof.prenom_prof.toLowerCase().includes(value)

                function updateTable(stagiaires) {
                    var tableBody = $('#stagiairesTable tbody');
                    tableBody.empty();
                    $.each(stagiaires, function(index, stag) {
                        var row = `<tr>
                        <td>${stag.matricule}</td>
                        <td>${stag.cin}</td>
                        <td>${stag.nom} ${stag.prenom}</td>
                        <td>${stag.statut}</td>
                        <td>${stag.filere}</td>
                        <td>${stag.groupe}</td>
                    </tr>`;
                        tableBody.append(row);
                    });
                }
            });
        </script>
    @endsection
