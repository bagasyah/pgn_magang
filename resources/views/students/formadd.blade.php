@extends('layout.main')
@section('content')
    <h3>Form New Data Student</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
                Kembali
            </button>
        </div>
        <!--form--->
        <div class="card-body">
            <form method="POST" action="{{ url('students') }}">
                @csrf
                <div class="row mb-3">
                    <label for="idstudents" class="col-sm-2 col-form-label">Id Students</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('idstudents') is-invalid @enderror"
                            id="idstudents" name="idstudents" value="{{ old('idstudents') }}">
                        @error('idstudents')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('fullname') is-invalid @enderror"
                            id="fullname" name="fullname" value="{{ old('fullname') }}">
                        @error('fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                        <select class="form-select form-select-sm @error('gender') is-invalid @enderror" id="gender"
                            name="gender" value="{{ old('gender') }}">
                            <option value="" selected>-Pilih-</option>
                            <option value="M" {{ old('gender') == 'M' ? 'selected' : '' }}>Male</option>
                            <option value="F" {{ old('gender') == 'F' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control form-control-sm @error('address') is-invalid @enderror" id="address" name="address"
                            cols="30" rows="10" value="{{ old('address') }}"></textarea>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="emailaddress" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('emailaddress') is-invalid @enderror"
                            id="emailaddress" name="emailaddress" value="{{ old('emailaddress') }}">
                        @error('emailaddress')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror"
                            id="phone" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-success">
                            SAVE
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!--Endform--->
    </div>
@endsection
