@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <style>
        .feature-icon {
            width: 4rem;
            height: 4rem;
            border-radius: .75rem;
        }

        .icon-square {
            width: 3rem;
            height: 3rem;
            border-radius: .75rem;
        }

        .text-shadow-1 {
            text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25);
        }

        .text-shadow-2 {
            text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25);
        }

        .text-shadow-3 {
            text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25);
        }

        .card-cover {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .feature-icon-small {
            width: 3rem;
            height: 3rem;
        }
    </style>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Welcome to EventRun!</h1>
        <p class="fs-5 text-body-secondary">Find and register for exciting events near you.</p>
    </div>
    <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            @foreach ($events as $event)
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                        style="background-image: url('{{ $event->img }}');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $event->name }}</h3>
                            <p>{{ $event->description }}</p>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <div class="btn-group">
                                        <a href="{{ route('events.show', $event->slug) }}" class="btn btn-sm btn-primary">
                                            Join Event</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>{{ $event->date }}</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em"></text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>RUN 5K Jakarta</strong> <br>
                                Join us for a 5K run through the beautiful streets of Jakarta! <br>
                                date: 2024-09-15 <br>
                                location : Jakarta <br>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-primary">Join Event</button>
                                </div>
                                <small class="text-body-secondary">Price 150.000</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main> --}}
@endsection
