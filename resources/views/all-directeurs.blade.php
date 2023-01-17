@extends('layouts.master')

@section('title')
  Directors
@endsection

@section('page-title')
  All Directors
@endsection

@section('main-title')
  Directors
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Directors table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Control</th>
  
                </tr>
              </thead>
              <tbody>
                @foreach ($directeurs as $directeur)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $directeur->full_name }}</h6>
                        <p class="text-xs text-secondary mb-0">{{ $directeur->email }}</p>
                      </div>
                    </div>
                  </td>
          

                  <td>
                    <div>
                      <a class="btn btn-success btn-sm" href="#">Edit</a>
                      <a class="btn btn-danger btn-sm" href="#">Delete</a>
                      
                    </div>
                  </td>
                </tr>
                @endforeach                         
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
