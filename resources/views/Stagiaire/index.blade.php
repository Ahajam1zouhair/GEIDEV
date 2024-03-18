@extends('Layouts.mastare')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
            <div class="row">
                <div class="col-md-9">
                    <a href="{{ route('stagiaire.create') }}" class="btn btn-primary  mb-4"> <i
                            class='bx bxs-user-plus'></i></i> Add stagiaire </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('beneficiaire.create') }}" class="btn btn-secondary mb-4"><i
                            class='bx bxs-user-plus'></i> Add Beneficiaire </a>
                </div>
            </div>
            <!-- Basic Bootstrap Table -->
            <div class="card ">
                <div class="m-4">
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
                            <label class="col-form-label" for="searchBystatut">Statuts</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="searchBystatut" aria-label="Default select example"
                                    name="statut">
                                    <option value="">Tous les statuts</option>
                                    <option value="SENSIBILAISE">Sensibilisé</option>
                                    <option value="FORME">Formé</option>
                                    <option value="VISITER_INCUBATEUR">Visité l'incubateur</option>
                                    <option value="PROTRUR_PROJET">Porteur de projet</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="card m-4">
                    <div class="row ">
                        <div class="col-md-8">
                            <h5 class="card-header">Table les Stagiaire</h5>
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label" for="searchBystatut">Items par page :</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="pageSize" aria-label="Default select example"
                                    name="statut" style="width: 70px">
                                    <option value="1">1</option>
                                    <option value="5">5</option>
                                    <option value="7">7</option>
                                    <option value="10" selected>10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap" id="search_result">
                        <table class="table" id="stagiairesTable">
                            <thead class="table-light">
                                <tr>
                                    <th>CIN</th>
                                    <th>NOM & prénom</th>
                                    <th>STATUT</th>
                                    <th>email</th>
                                    <th>filére</th>
                                    <th>GROUPE</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            </tbody>
                        </table>
                        <div class="row m-2 ">
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-4">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">

                                    </ul>
                                </nav>
                            </div>
                        </div>
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
                    if (!isNaN(newSize) && newSize > 0) {
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
                        var statutBadge = '';
                        switch (stag.statut) {
                            case 'FORME':
                                statutBadge = '<span class="badge bg-label-success me-1">FORME</span>';
                                break;
                            case 'SENSIBILAISE':
                                statutBadge = '<span class="badge bg-label-warning me-1">SENSIBILAISE</span>';
                                break;
                            case 'VISITER INCUBATEUR':
                                statutBadge =
                                    '<span class="badge bg-label-primary me-1">VISITER INCUBATEUR</span>';
                                break;
                            case 'PROTRUR PROJET':
                                statutBadge = '<span class="badge bg-label-info me-1">PROTRUR PROJET</span>';
                                break;
                            default:
                                statutBadge = '';
                        }
                        var csrfToken = $('meta[name="csrf-token"]').attr('content');
                        var row = `<tr>
                                            <td>${stag.cin}</td>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> ${stag.nom} ${stag.prenom}</td>
                                            <td>${statutBadge}</td>
                                            <td>${stag.email}</td>
                                            <td>${stag.filere}</td>
                                            <td>${stag.groupe}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href={{ url('/stagiaire/${stag.id}/edit') }}>
                                                            <i class="bx bx-edit-alt me-2"></i> Edit
                                                        </a>
                                                        <form id="deleteForm-${stag.id}" action="/stagiaire/${stag.id}" method="POST">
                                                            <input type="hidden" name="_token" value="${csrfToken}">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-sm bg-success-light me-2" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire?')">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>`;
                        tableBody.append(row);
                    });
                    updatePagination();
                }

                function updatePagination() {
                    var pageCount = Math.ceil(stagiaires.length / pageSize);
                    var paginationUl = $('.pagination');
                    paginationUl.empty();
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
                    var currentPageItem =
                        `<li class="page-item active"><a class="page-link" href="#">${currentPage}</a></li>`;
                    $(currentPageItem).appendTo(paginationUl);
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
                    var searchBystatut = $('#searchBystatut').val();
                    var searchByGroupe = $('#searchByGroupe').val().toLowerCase();
                    $.ajax({
                        url: "/stagiairesdata",
                        type: "GET",
                        success: function(data) {
                            stagiaires = data.filter(function(stag) {
                                return stag.cin.toLowerCase().includes(searchByCin) &&
                                    stag.nom.toLowerCase().includes(searchByName) &&
                                    stag.prenom.toLowerCase().includes(searchByPrenom) &&
                                    (searchByFiliere === "" || stag.filere === searchByFiliere) &&
                                    (searchBystatut === "" || stag.statut === searchBystatut) &&
                                    (searchByGroupe === "" || stag.groupe === searchByGroupe);
                            });
                            currentPage = 1; // Reset to the first page
                            updateTable();
                        }
                    });
                }
                // Bind the search function to the 'keyup' event for CIN, Nom, and Prenom inputs
                $('#searchByCin, #searchByName, #searchByPrenom').on('keyup', search);
                // Bind the search function to the 'change' event for Filiere and Groupe selectors
                $('#searchByFiliere, #searchByGroupe').on('change', search);
                // Initial search to populate the table on page load
                search();
            });
        </script>
    @endsection
