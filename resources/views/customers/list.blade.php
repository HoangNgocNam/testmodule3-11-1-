<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="btn btn-primary" href="{{route('customers.create')}}">Thêm Mới</a>
        <form class="form-inline" method="get" action="{{route('customers.search')}}">
            @csrf
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            Danh Sách Nhân Viên
        </a>
    </nav>
    <table class="table table-striped">

        <thead>
        <tr>
            <th scope="col">Mã nhân viên</th>
            <th scope="col">Nhóm nhân viên</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Chức Năng</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($customers))
            @foreach($customers as $customer)
                <tr>
                    <th scope="row">{{$customer->id}}</th>
                    <td>{{$customer->group}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('customers.update',$customer->id)}}"><i class="fas fa-pen"></i>
                        </a>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có chắc là Muốn xóa')" href="{{route('customers.delete',$customer->id)}}"><i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <p>Chưa có dữ liệu</p>
        @endif
        </tbody>
    </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
