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
                    {{-- {{$totaleStagiairesPole}} --}}
                </div>
            </div>
        </div>
        <!-- Order Statistics -->
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2"> Status Statistics </h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">

                                <h5 class="mb-2"><span class="text-muted">nombre total de stagiaires :</span>
                                    {{ $totaleStagiaires }}</h5>
                            </div>
                            {{-- <div style="display: none" id='poles' data-poles='@json($poles)'></div> --}}
                            <div style="display: none" id='totaleStagiairesStatuts'
                                data-totaleStagiairesStatuts='@json($totaleStagiairesStatuts)'>
                            </div>
                            <div id="orderStatisticsChart">

                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            @foreach ($totaleStagiairesStatuts as $item)
                                <li class="d-flex mb-4 pb-1">
                                    @switch($item)
                                        @case($item['name'] === 'SENSIBILAISE')
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="../assets/img/icons/unicons/cc-warning.png" alt="User"
                                                    class="rounded" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h5 class="mb-0">{{ $item['name'] }}</h5>
                                                </div>
                                                <div class="user-progress">
                                                    <h6 class="fw-semibold">{{ $item['value'] }}</h6>
                                                </div>
                                            </div>
                                        @break

                                        @case($item['name'] === 'FORME')
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="../assets/img/icons/unicons/cc-success.png" alt="User"
                                                    class="rounded" />
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h5 class="mb-0">{{ $item['name'] }}</h5>
                                                </div>
                                                <div class="user-progress">
                                                    <h6 class="fw-semibold">{{ $item['value'] }}</h6>
                                                </div>
                                            </div>
                                        @break

                                        @case($item['name'] === 'PROTRUR PROJET')
                                        <div class="avatar flex-shrink-0 me-3">
                                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                                        </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h5 class="mb-0">{{ $item['name'] }}</h5>
                                                </div>
                                                <div class="user-progress">
                                                    <h6 class="fw-semibold">{{ $item['value'] }}</h6>
                                                </div>
                                            </div>
                                        @break

                                        @case($item['name'] === 'VISITER INCUBATEUR')
                                        <div class="avatar flex-shrink-0 me-3">
                                            <img src="../assets/img/icons/unicons/cc-primary.png" alt="User"
                                                class="rounded" />
                                        </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h5 class="mb-0">{{ $item['name'] }}</h5>
                                                </div>
                                                <div class="user-progress">
                                                    <h6 class="fw-semibold">{{ $item['value'] }}</h6>
                                                </div>
                                            </div>
                                        @break

                                        @default
                                    @endswitch
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->
            <!-- Transactions -->
            <div class="col-md-6 col-lg-6 order-2 mb-4">
                <div class="card ">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Paypal</small>
                                        <h6 class="mb-0">Send money</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+82.6</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Mac'D</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+270.69</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Transfer</small>
                                        <h6 class="mb-0">Refund</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+637.91</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/cc-success.png" alt="User"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Credit Card</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-838.71</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Wallet</small>
                                        <h6 class="mb-0">Starbucks</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">+203.33</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/cc-warning.png" alt="User"
                                        class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Mastercard</small>
                                        <h6 class="mb-0">Ordered Food</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">-92.45</h6>
                                        <span class="text-muted">USD</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>
@endsection

{{-- @extends('Layouts.mastare') --}}

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
