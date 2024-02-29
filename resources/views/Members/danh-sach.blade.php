@extends('master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">DANH SÁCH THÀNH VIÊN</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
    </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</td>
                <th>HỌ TÊN</th>
                <th>EMAIL</th>
                <th>LỚP</th>
                <th>ĐIỆN THOẠI</th>
                <th>ĐỊA CHỈ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @forelse($list as $listMembers)
        <tr>
            <td>{{ $listMembers->id }}</td>
            <td>{{ $listMembers->nameMember }}</td>
            <td>{{ $listMembers->email }}</td>
            <td>{{ $listMembers->class }}</td>
            <td>{{ $listMembers->phone	}}</td>
            <td>{{ $listMembers->local }}</td>
            <td>
                <a href="#">Sửa</a> | <a href="#">Xóa</a>
            </td>
        <tr>
        @empty
        <tr>
            <td colspan=7>Không có dữ liệu</td>
        </tr>
        @endforelse
        <tbody>
    </table>
</div>
@endsection