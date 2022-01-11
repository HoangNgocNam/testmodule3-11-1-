<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post">
    @csrf
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1">Mã nhân Viên</label>
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã nhân viên">
        </div>
        @error('id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleInputPassword1">Chọn nhóm nhân viên</label>
            <select class="form-control" name="group" id="exampleFormControlSelect2">
                <option value="Quản trị hệ thống">Quản trị hệ thống</option>
                <option value="Quản trị nhân sự">Quản trị nhân sự</option>
                <option value="Quản lý Phòng">Quản lý Phòng</option>
                <option value="Lễ Tân">Lễ Tân</option>
                <option value="Quản lý dịch vụ">Quản lý dịch vụ</option>
            </select>
        </div>
        @error('group')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Tên nhân Viên</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên nhân viên">
        </div>
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Ngày sinh</label>
            <input type="text" name="birthday" class="form-control" id="exampleInputEmail1"
                   placeholder="Nhập tên nhân viên">
        </div>
        @error('birthday')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Giới tính</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Nữ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Nam
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        @error('gender')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Nhập số điện thoại">
        </div>
        @error('phone')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Chứng minh thư nhân dân</label>
            <input type="text" name="card" class="form-control" id="exampleInputEmail1" placeholder="Nhập Chứng minh thư nhân dân">
        </div>
        @error('card')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
        </div>
        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Địa chỉ</label>
            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        @error('address')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <button class="btn btn-success" type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-info" href="{{route('customers.index')}}">Quay lại</a>
    </div>

</form>
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
