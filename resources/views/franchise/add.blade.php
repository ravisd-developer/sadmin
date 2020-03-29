@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => __('Hello') . ' '. auth()->user()->name,

])
<div class="  mt--7">

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-9">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Franchise list</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Project</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Status</th>

                                        <th scope="col">Completion</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">

                                                <div class="media-body">
                                                    <span class="mb-0 text-sm">Argon Design System</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            $2,500 USD
                                        </td>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                <i class="bg-warning"></i> pending
                                            </span>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="mr-2">60%</span>
                                                <div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Add frachise</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('fr.add') }}" autocomplete="off">
                            @csrf
                            @method('put')
                            <input name="name" type="taxt" class="form-control mt-3" placeholder="School name">
                            <input name="admin" type="taxt" class="form-control mt-3" placeholder="Admin name">
                            <input name="mail" type="mail" class="form-control mt-3" placeholder="name@example.com">
                            <input name="pass" type="password" class="form-control mt-3" placeholder="Password">

                            <input class="btn btn-icon btn-3 btn-primary mt-3 align-center " type="submit"
                                value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('layouts.footers.auth')
</div>
@endsection
