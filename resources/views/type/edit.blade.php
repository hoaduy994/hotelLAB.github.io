@extends('template.master')
@section('title', 'Edit Type')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border">
                <div class="card-header">
                    <h2>Sửa loại phòng</h2>
                </div>
                <div class="card-body p-3">
                    <form class="row g-3" method="POST" action="{{route('type.update',['type'=>$type->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <label for="name" class="form-label">Tên</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ $type->name }}">
                            @error('name')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="information" class="form-label">Thông tin</label>
                            <textarea class="form-control" id="information" name="information"
                                rows="3">{{ $type->information }}</textarea>
                            @error('information')
                                <div class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-light shadow-sm border float-end">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
