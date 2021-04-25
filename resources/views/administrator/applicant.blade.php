@extends('basic/admin-layout')

@section('title', 'pramuja.tech | administrator')

@section('main-content')
    <h3><i class="mr-2"></i>Recruitment</h3><hr>
    <div class="row ">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary" href="/student/insert">Insert</a>
            <a class="btn btn-primary" target="_blank" href="/student/print">Print</a>
        </div>
        <table class="table table-hover" aria-describedby="applicant">
            <thead>
            <tr>
                <th id="name">Nama</th>
                <th id="email">Email</th>
                <th id="handphone">Handphone</th>
                <th id="position">Position</th>
                <th id="clasification">Clasification</th>
                <th id="personal">Personal</th>
                <th id="action">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicant as $applicant)
                    <tr>

                        <td>{{ $applicant -> name }}</td>
                        <td>{{ $applicant -> email }}</td>
                        <td>{{ $applicant -> handphone }}</td>
                        <td>{{ $applicant -> position }}</td>
                        <td>{{ $applicant -> clasification }}</td>
                        <td><a href="{{ $applicant -> personal }}"><i class="far fa-file-pdf"></i></a></td>  
                        <td>
                            <a href=""><i class="fas fa-user-check"></i></a>
                            <a href=""><i class="fas fa-user-times"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
                
    </div>
@endsection