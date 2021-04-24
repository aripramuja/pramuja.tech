@extends('basic/layout')

@section('title', 'pramuja.tech | Article')

@section('container')
    <div class="events">
        <h5>Articles</h5>     
        <p>Let's see what other's say about pramuja Website Enterprise Development!</p>  
    </div>
    <div class="events-container">
        <div id="events">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/Data Arranging_Monochromatic.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            <h5 class="card-title">Samsung Akuisi StartUP</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            
                        </div>
                        <div class="card-footer d-grid gap-2">
                            <a href="{{ url('/blog/article/samsung-akuisi-startup')}}" class="btn btn-primary" type="button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/Data Arranging_Monochromatic.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            <h5 class="card-title">Samsung Akuisi StartUP</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            
                        </div>
                        <div class="card-footer d-grid gap-2">
                            <a href="{{ url('/blog/article/samsung-akuisi-startup')}}" class="btn btn-primary" type="button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="card h-100">
                        <img src="{{ asset('images/Data Arranging_Monochromatic.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            <h5 class="card-title">Samsung Akuisi StartUP</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            
                        </div>
                        <div class="card-footer d-grid gap-2">
                            <a href="{{ url('/blog/article/samsung-akuisi-startup')}}" class="btn btn-primary" type="button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
        
        </div>
        <div id="populers-post">
            <h1>Populer Post</h1>
        </div>
    </div>
@endsection