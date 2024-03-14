@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Officer Id</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Names</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">officer</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($officers as $officer)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-xs">{{ $officer->officer_id }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $officer->staff_id }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $officer->names }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $officer->user_type==1?"Staff":"Admin" }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $officer->username }}</p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $officer->password }}</p>
                                </td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-normal text-xs"
                                        data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                    <a href="javascript:;" class="text-secondary font-weight-normal text-xs"
                                        data-toggle="tooltip" data-original-title="Edit user">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
