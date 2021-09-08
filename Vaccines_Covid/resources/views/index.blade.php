<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <title>Đăng kí tiêm Vacxin Covid 19</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>



<div class="container">
    <div class="top">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col">
                <h2>Đăng Kí Tiêm Vắc Xin Covid-19</h2>
            </div>
            <div class="col-md-auto">
                <form action="/search" method="get">
                    <input type="search" name="search" class="form-control">
                    <span class="input-group-prepend">
                                <br>
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </span>
                </form>
            </div>
        </div>

            <form class="row g-3" action="{{route('store')}}" method="post">
                @csrf
                <h3>Điền thông tin đăng kí</h3>
                <div class="col-md-6">
                    <label for="id_card" class="form-label"> Số chứng minh thư hoặc thẻ căn cước công dân :</label>
                    <input type="id_card" class="form-control" id="id_card" placeholder=" số chứng minh thư hoặc thẻ căn cước công dân ">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Họ và tên : </label>
                    <input type="name" class="form-control" id="name" placeholder="họ và tên">
                </div>
                <div class="col-md-6">
                    <label for="id" class="form-label">dd/mm/yyyy : </label>
                    <input type="date" class="form-control" id="id" placeholder="dd/mm/yyyy">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Địa chỉ : </label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Địa chỉ ">
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Số điện thoại : </label>
                    <input type="text" class="form-control" id="phone" placeholder="số địa thoại">
                </div>
                <div class="col-md-6">
                    <label for="benh" class="form-label">Tiền sử bệnh : </label>
                    <input type="text" class="form-control" id="benh" placeholder="tiền sử bệnh">

                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Đăng kí</button>
                </div>
            </form>
    </div>


    <br>
    <table class="table table-bordered" style="width: 1170px;margin-left: 59px;margin-top: 20px" >
        <thead>
        <tr>
            <th>Id_Card</th>
            <th>Name</th>
            <th>Date</th>
            <th>Address</th>
            <th>Phone</th>
            <th width="250">History</th>
        </tr>
        </thead>
        <tbody>
            @foreach($userss as $user)
                <tr>
                    <td>{{$user->id_card}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->date_year}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->allergy_history}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
