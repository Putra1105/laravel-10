@extends('home')

@section('content')
    <h3>Edit Data Students</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-danger" onclick="window.location='{{ url('students') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form action="{{ url('students/'.$txtid) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="txtid" class="col-sm-2 col-form-label">ID Students</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control-plaintext" disabled id="txtid" name="txtid" value="{{ $txtid }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtfullname" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname" value="{{ $txtfullname }}">
                      @error('txtfullname')
                      <div class="invalid-feedback">
                        {{ $message  }}
                      </div>
                      @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-4">
                      <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror" name="txtgender" id="txtgender">
                        <option value="">---PILIH---</option>
                        <option value="M" {{ ($txtgender =='M') ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ ($txtgender =='F') ? 'selected' : '' }}>Female</option>
                      </select>
                      @error('txtgender')
                      <div class="invalid-feedback">
                        {{ $message  }}
                      </div>
                      @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <textarea class="@error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="50" rows="2">{{$txtaddress}}</textarea>
                      @error('txtaddress')
                      <div class="invalid-feedback">
                        {{ $message  }}
                      </div>
                      @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm @error('txtemail') is-invalid @enderror" id="txtemail" name="txtemail" value="{{ $txtemail }}">
                      @error('txtemail')
                      <div class="invalid-feedback">
                        {{ $message  }}
                      </div>
                      @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm @error('txtphone') is-invalid @enderror" id="txtphone" name="txtphone" value="{{ $txtphone }}">
                      @error('txtphone')
                      <div class="invalid-feedback">
                        {{ $message  }}
                      </div>
                      @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-sm btn-success">
                        Update
                      </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection