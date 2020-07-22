@extends('layouts.app')

@section('content')
    <div class="section-top-border container" style="margin-top: 15%; ">
        <div class="row">
            <h2>СОЗДАТЬ ЖАЛОБУ</h2>
            <div class="col-lg-8 col-md-8">
                <form method="POST" action="{{ route('new_complain') }}" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name"
                                   value="" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="facility_id" class="col-md-4 col-form-label text-md-right">Facility</label>
                        <div class="col-md-6">
                            <select class="form-control" name="facility_id" id="facility_id">
                                <option value=""></option>
                                @foreach($facilities as $facility)
                                    <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description"
                               class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                        <div class="col-md-6">
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="attachment"
                               class="col-md-4 col-form-label text-md-right">{{ __('Image upload') }}</label>
                        <div class="col-md-6">
                            <input type="file" id="attachment" name="attachment" href="#">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Создать') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<style>
    .nice-select {
        width: 100% !important;
    }
    .nice-select .option {
        width: 27em !important;
    }
</style>
