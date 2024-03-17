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
                    <a href="{{ route('stagiaire.create') }}" class="btn btn-success  mb-4"> Add stagiaire</a>
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
                            <select class="form-select" id="searchByFiliere" aria-label="Default select example"
                                name="filere">
                                <option value="">Toutes les filières</option>
                                <option value="DEV101">DEV101</option>
                                <option value="DEV102">DEV102</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-form-label" for="basic-default-poles">GROUPE</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="searchByGroupe" aria-label="Default select example"
                                name="filere">
                                <option value="">Tous les groupes</option>
                                <option value="DEV101">DEV101</option>
                                <option value="DEV102">DEV102</option>
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
                                <input class="form-check-input" type="radio" name="statut" id="inlineRadio2"
                                    value="FORME" />
                                <label class="col-form-labell " for="inlineCheckbox2">Sensibilisé</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" name="statut" id="inlineRadio2"
                                    value="VISITER_INCUBATEUR" />
                                <label class="form-check-label " for="inlineCheckbox2">Visité I'incubateur</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" name="statut" id="inlineRadio2"
                                    value="PROTRUR_PROJET" />
                                <label class="form-check-label " for="inlineCheckbox2">Porteur de projet</label>
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
                        <label for="pageSize">Items par page :</label>
                        <input type="number" id="pageSize" value="5" min="1" step="1">

                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('javescript')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#pageSize').on('change', function() {
                    var newSize = parseInt($(this).val());
                    if (!isNaN(newSize) && newSize >
                        0) { // Vérifie que newSize est un nombre et plus grand que 0
                        pageSize = newSize;
                        currentPage = 1;
                        updateTable();
                    } else {
                        alert('Veuillez entrer un nombre valide pour les items par page.');
                    }
                });
                var pageSize = 10;
                var currentPage = 1;
                var stagiaires = [];
                function updateTable() {
                    var tableBody = $('#stagiairesTable tbody');
                    tableBody.empty();
                    var startIndex = (currentPage - 1) * pageSize;
                    var endIndex = startIndex + pageSize;
                    var paginatedItems = stagiaires.slice(startIndex, endIndex);

                    $.each(paginatedItems, function(index, stag) {
                        var row = `<tr>
                        <td>${stag.matricule}</td>
                        <td>${stag.cin}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> ${stag.nom} ${stag.prenom}</td>
                        <td><span class="badge bg-label-primary me-1">${stag.statut}</span></td>
                        <td>${stag.filere}</td>
                        <td>${stag.groupe}</td>
                    </tr>`;
                        tableBody.append(row);
                    });

                    updatePagination();
                }

                function updatePagination() {
                    var pageCount = Math.ceil(stagiaires.length / pageSize);
                    var paginationUl = $('.pagination');
                    paginationUl.empty();

                    // Bouton Précédent
                    var prevLiClass = currentPage === 1 ? 'page-item disabled' : 'page-item';
                    var prevPageItem =
                        `<li class="${prevLiClass}"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>`;
                    $(prevPageItem).on('click', 'a', function(e) {
                        e.preventDefault();
                        if (currentPage > 1) {
                            currentPage--;
                            updateTable();
                        }
                    }).appendTo(paginationUl);

                    // Numéro de la page actuelle
                    var currentPageItem =
                        `<li class="page-item active"><a class="page-link" href="#">${currentPage}</a></li>`;
                    $(currentPageItem).appendTo(paginationUl);

                    // Bouton Suivant
                    var nextLiClass = currentPage === pageCount ? 'page-item disabled' : 'page-item';
                    var nextPageItem =
                        `<li class="${nextLiClass}"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>`;
                    $(nextPageItem).on('click', 'a', function(e) {
                        e.preventDefault();
                        if (currentPage < pageCount) {
                            currentPage++;
                            updateTable();
                        }
                    }).appendTo(paginationUl);
                }
                function search() {
                    var searchByCin = $('#searchByCin').val().toLowerCase();
                    var searchByName = $('#searchByName').val().toLowerCase();
                    var searchByPrenom = $('#searchByPrenom').val().toLowerCase();
                    var searchByFiliere = $('#searchByFiliere').val();
                    var searchByGroupe = $('#searchByGroupe').val();
                    $.ajax({
                        url: "/stagiairesdata",
                        type: "GET",
                        success: function(data) {
                            stagiaires = data.filter(function(stag) {
                                return stag.cin.toLowerCase().includes(searchByCin) &&
                                    stag.nom.toLowerCase().includes(searchByName) &&
                                    stag.prenom.toLowerCase().includes(searchByPrenom) &&
                                    (searchByFiliere === "" || stag.filere === searchByFiliere) &&
                                    (searchByGroupe === "" || stag.groupe === searchByGroupe) && ;
                            });
                            currentPage = 1; // Réinitialiser à la première page
                            updateTable();
                        }
                    });
                }
                // Bind the search function to the 'keyup' event for CIN, Nom, and Prenom inputs
                $('#searchByCin, #searchByName, #searchByPrenom').on('keyup', search);
                // Bind the search function to the 'change' event for Filiere and Groupe selectors
                $('#searchByFiliere, #searchByGroupe').on('change', search);
                // Initial search to populate table on page load
                search();
            });
        </script>
    @endsection
