@extends('Layouts.mastare')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Light Table head</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
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
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $stagiaire->nom }}
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
