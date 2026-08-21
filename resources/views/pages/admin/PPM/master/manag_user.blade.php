@extends('layouts.master')
@section('title', 'Management User')
@section('content')
<div class="content-wrapper">
    {{-- HEADER --}}
    <section class="content-header">
        <div class="p-l-30 p-r-30">
            <div class="header-icon">
                <i class="fa fa-user-circle-o"></i>
            </div>
            <div class="header-title">
                <h1>Management User</h1>
                <small></small>
            </div>
        </div>
    </section>
    {{-- CONTENT --}}
    <section class="content">
        {{-- Management User --}}
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4> Data User </h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table-user" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>RS</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('addon-script')
<script>
    $(document).ready(function(){
        $('#table-user').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,

            ajax: "{{ route('master.managUser.data') }}",

            columns: [
                {
                    data: 'user_id',
                    name: 'user_id'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'rs',
                    name: 'rs'
                },
                {
                    data: 'user_role',
                    name: 'user_role'
                },
            ],
            order: ([1, 'asc'])
        });
    });
</script>
@endpush