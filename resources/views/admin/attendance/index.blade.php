@extends('layouts.admin')
@section('content')
    <div class="table-responsive">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h1><i class="fa fa-users"></i> Manage Attendance
                        <section class="float-right">
                            <a href="{{ route('manageleaves.index') }}" class="btn btn-outline-success pull-right">Leaves</a>
                            <a href="{{ route('manageattendance.index') }}"
                                class="btn btn-outline-secondary pull-right">Attendance</a>
                        </section>
                    </h1>

                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Date</th>
                                    <th>Satus</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attendance as $at)
                                    <tr>
                                        <td>{{ $at->name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($at->created_at)) }}</td>
                                        <td>{{ $at->status }}</td>
                                        <!-- Button trigger modal -->
                                        <td><button type="submit" name="modal" class="btn btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Mark Attendance
                                            </button></td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mark Attendance
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post"
                                                            action="{{ route('manageattendance.update', $at->attendance_id) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" name="update"
                                                                class="btn btn-danger rounded-pill" value="absent">Mark
                                                                Absent</button>
                                                            <button type="submit" name="update" class="btn btn-info "
                                                                value="present">Mark Present</button>
                                                            <button type="submit" name="update" class="btn btn-warning "
                                                                value="leave">Mark Leave</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Hover-table ] start-->

        <!-- [ Hover-table ] end -->
    @endsection
