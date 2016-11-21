@extends('errors.layout')

@section('content')
    {{$message ? $message : "Có lỗi xảy ra, vui lòng thử lại!"}}
@endsection
