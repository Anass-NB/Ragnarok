@extends('layouts.master')

@section('title')
  Students
@endsection

@section('page-title')
  All Students
@endsection

@section('main-title')
  Students
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Students table</h6>
          <a href="{{ route('get.pdf') }}" class="btn btn-sm btn-warning">Export PDF</a>
          <a href="{{ route('get.excel') }}" class="btn btn-sm btn-success">Export EXCEL</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Grade</th>
                  <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Notes</th>
                  <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Control</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($all_students as $student)
                  @if ($student->succeeded == 0)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $student->full_name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $student->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $student->grade }}</p>
                        <p class="text-xs text-secondary mb-0">2023</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Failed</span>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $student->note }}</p>
                      </td>
                      <td>
                        <div>
                          {{-- @can('edit-student') --}}
                          <a class="btn btn-success btn-sm" href="#">Edit</a>
                          {{-- @endcan --}}
                          <a class="btn btn-danger btn-sm" href="#">Delete</a>

                        </div>
                      </td>


                    </tr>
                  @else
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $student->full_name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $student->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $student->grade }}</p>
                        <p class="text-xs text-secondary mb-0">2023</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Succeeded</span>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $student->note }}</p>
                      </td>
                      <td>
                        <div>
                          <a class="btn btn-success btn-sm" href="#">Edit</a>
                          <a class="btn btn-danger btn-sm" href="#">Delete</a>

                        </div>
                      </td>
                    </tr>
                  @endif
                @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
