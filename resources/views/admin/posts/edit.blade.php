@extends('admin.layouts.master')

@section('page-title', 'Dashboard')

@section('page-content')
    @include('admin.layouts.shared.navbar')
    <div id="layoutSidenav">
        @include('admin.layouts.shared.sitenav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">文章管理</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">編輯文章</li>
                    </ol>
                    <div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
                        <strong>錯誤！</strong> 請修正以下問題：
                        <ul>
                            <li>錯誤 1</li>
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">文章標題</label>
                            <input type="text" class="form-control" placeholder="請輸入文章標題" value="{{ $post->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">文章內容</label>
                            <textarea class="form-control" rows="10" placeholder="請輸入文章內容">{{ $post->content }}</textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary btn-sm" href="#">儲存</a>
                        </div>
                    </form>
                </div>
            </main>
            @include('admin.layouts.shared.footer')
        </div>
    </div>
@endsection
