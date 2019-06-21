@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/custom.css">
@endsection

@section('content')
<div class="container-fluid">
  <div class="row row-img">
    @foreach($users as $user)
      <div class="gp-row-right">
        <div class="plan">
          <img src="{{asset('css/img/img_avatar.png')}}" alt="" width="100%">
          <div class="info-box">
            <h3>{{ $user->name }}</h3>
            <p class="title">{{ $user->knowledge }}</p>
            <p class="product">Email: {{ $user->email }}</p>
            <p class="product">Phone: {{ $user->phone }}</p>
            <p class="product">Address: {{ $user->address }}</p>
            <div style="margin:24px 0;">
              <a href="#"><i class="fab fa-dribbble"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
          </div>
          <a href="{{ route('candidate.detail', $user->id) }}"><p class="buy">Hire Me</p></a>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
