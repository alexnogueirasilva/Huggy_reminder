@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Quote
        </div>

        @if($errors->all())
            @foreach($errors->all() as $error)
                <x-alert color="orange" message="{{ $error }}"/>
            @endforeach
        @endif
        <div class="card-body">
            <form method="POST" action="{{ route('reminder.store') }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row mb-3">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <label for="inputReminder" class="col-sm-2 col-form-label">Lembrete</label>
                    <div class="col-sm-10">
                        <input type="text" name="reminder" class="form-control" value="{{ old('reminder') }}"
                               id="inputReminder" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Notificação</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="inputDate" name="notification">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Repetição</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                   value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Não se repete
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                   value="2">
                            <label class="form-check-label" for="gridRadios2">
                                Diariamente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                   value="3">
                            <label class="form-check-label" for="gridRadios3">
                                A cada uma hora
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
@endsection
