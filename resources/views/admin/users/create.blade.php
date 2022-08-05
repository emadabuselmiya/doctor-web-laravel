@extends('layouts.admin')

@section('title', 'Create Client')



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <x-alerts/>
                        <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.users._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
