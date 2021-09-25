@extends('basic/layout')

@section('title', 'pramuja.tech')

@section('container')
  <article>
    <section>
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('images/gambar1.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('images/gambar2.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/gambar3.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section>
      <div class="interest-in">
        <h5>INTEREST IN?</h5>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <img src="{{ asset('images/construction.png') }}" class="d-block w-100" alt="...">
              <h5>Network Engineering</h5>
            </div>
            <div class="col-sm">
              <img src="{{ asset('images/construction.png') }}" class="d-block w-100" alt="...">
              <h5>Website Development</h5>
            </div>
            <div class="col-sm">
              <img src="{{ asset('images/consultant.png') }}" class="d-block w-100" alt="...">
              <h5>Data Science</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="clients">
        <h5>CLIENTS</h5>
        <p>Let's see what other's say about pramuja Website Enterprise Development!</p>
        <img src="{{ asset('images/pertamina.png') }}" width="50%" alt="...">
      </div>
    </section>
    
  </article>
  <aside>

  </aside>

@endsection
  

  