@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Quote
        </div>
        @include('alert.message')
        <div class="card-body">
            <form action="{{ route('reminder.store') }}" method="post">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <label for="inputReminder" class="col-sm-2 col-form-label">Lembrete</label>
                    <div class="col-sm-10">
                        <input type="text" name="reminder" class="form-control" value="{{ old('reminder') }}"
                               id="inputReminder" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3">
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
                            <input class="form-check-input" type="radio" name="repetition" id="gridRadios1"
                                   value="1" checked>
                            <label class="form-check-label" for="repetition">
                                Não se repete
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repetition" id="gridRadios2"
                                   value="2">
                            <label class="form-check-label" for="repetition">
                                Diariamente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repetition" id="gridRadios3"
                                   value="3">
                            <label class="form-check-label" for="repetition">
                                A cada uma hora
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button  class="btn btn-primary">Salvar</button>
            </form>
        </div>
@endsection
