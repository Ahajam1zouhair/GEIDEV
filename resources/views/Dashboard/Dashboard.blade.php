@extends('Layouts.mastare')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                <p class="mb-4">
                                    You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                    your profile.
                                </p>
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('Layouts.mastare')

{{-- @section('content')
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex flex-column align-items-center gap-1">

                <h2 class="mb-2"><span class="text-muted">Total Stagiaires :</span> {{ $Stagiaires }}</h2>
            </div>
            <div style="display: none" id='poles' data-poles='@json($poles)'></div>
            <div style="display: none" id='totaleStagiairesPole' data-totaleStagiairesPole='@json($totaleStagiairesPole)'>
            </div>
            <div id="orderStatisticsChart">

            </div>
        </div>
        <ul class="p-0 m-0">
            @foreach ($totaleStagiairesPole as $item)
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">{{ $item['name'] }}</h6>
                        </div>
                        <div class="user-progress">
                            <small class="fw-semibold">{{ $item['value'] }}</small>
                        </div>
                    </div>
                </li>
            @endforeach

            
        </ul>
    </div>
@endsection --}}

