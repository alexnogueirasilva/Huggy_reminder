@extends('layouts.app')

@section('content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Seus Lembretes</h1>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            @if ($reminders)
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($reminders as $reminder)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{ $reminder->description }}</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $reminder->description }}</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{ $reminder->reminder }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('reminder.edit', ['reminder' => $reminder->id]) }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($reminder->created_at)->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $reminders->links() }}
        </div>
        @else
            <div class="text-center"> Nenhum lembrete</div>
        @endif
    </div>

    </main>

@endsection