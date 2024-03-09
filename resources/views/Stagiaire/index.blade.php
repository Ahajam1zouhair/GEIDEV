@extends('Layouts.mastare')

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="row">
                <div class="mb-2 col-md-6 ">
                    <h5 class="card-header">Table les Stagiaire</h5>
                </div>
                <div class="col-md-6 mt-4">
                    <form class="input-group input-group-merge" method="POST">
                        @csrf 
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="text" class="form-control" name="libelle_groupe" id="search" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>

            <div class="table-responsive text-nowrap" id="search_result">
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
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
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
<script>
    $(document).ready(function(){
        $(document).on('input', "#search", function(){
            var SearchByName = $(this).val();
            jQuery.ajax({
                url: "{{ route('stagiaire_search') }}",
                type: 'post',
                dataType: 'html',
                cache: false,
                data: {SearchByName: SearchByName, '_token': '{{ csrf_token() }}'},
                success: function(response){
                    $("#search_result").html(response)
                },
                error: function(xhr, status, error){
                    // Gestion des erreurs si nécessaire
                    console.error(error);
                }
            });
        });
    });
</script>
@endsection