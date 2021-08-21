@extends('admin.layouts.master')

@section('page-title', 'Dashboard')

@section('page-content')
    @include('admin.layouts.shared.navbar')
    <div id="layoutSidenav">
        @include('admin.layouts.shared.sitenav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">主控台</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">主控台</li>
                    </ol>

                </div>
            </main>
            @include('admin.layouts.shared.footer')
        </div>
    </div>
@endsection
