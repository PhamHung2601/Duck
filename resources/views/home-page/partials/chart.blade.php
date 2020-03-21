<div class="chart">
    <div class="panel panel-info " style="margin-top:20px">
        <div class="panel-heading">XẾP HẠNG BOX KHÓA <span class="label label-danger"> 2020</span>
            <a href="" style="margin-left:30px">=&gt;Xem thêm</a></div>
        <div class="panel-body" style="padding:0"></div>
        <table class="table borderless" style="margin-bottom:0">
            <thead>
            <tr style=" background-color:#f2f2f2">
                <th>
                </th>
                <th>Xếp hạng tổng</th>
                <th>Level</th>
                <th>Box</th>
            </tr>
            </thead>
            <tbody>
            @foreach($course as $student)
                <tr>
                    <td style="width:30px">
                        <img class="" height="30px" width="30px" style="border:solid 0px #dddddd" src="https://moon.vn/Upload/Avatar/sang080702/LogoMoon-02.png">
                    </td>
                    <td><a rel="nofollow" href="#">{{$student->username}}</a></td>
                    <td style="width:30px">{{$student->level}}</td>
                    <td style="width:90px"><strong style="color:blue">{{$student->point}}</strong> <img src="{{ asset('img/Box.png')}}" height="25px"></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
