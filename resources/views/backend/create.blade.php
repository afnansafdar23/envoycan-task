@extends('master')
@section('content')
    <div class="form my-5">
        <form class="form d-flex flex-column" action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>{{ __('general') }}</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="form-group">
                            <label for="image" class="form-label col-form-label required">Image</label>
                            <input class="form-control" type="file" name="image" value="{{ old('image') }}">
                            @if ($errors->has('image'))
                                <div class="text-danger">{{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="name" class="form-label col-form-label required">Name</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="text-danger">{{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ url()->previous() }}" class="btn btn-light me-5">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save changes
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
