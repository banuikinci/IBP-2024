<meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- Favicon -->
<link href="{{asset("assets/home")}}/img/favicon.ico" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="{{asset("assets/home")}}/lib/slick/slick.css" rel="stylesheet">
<link href="{{asset("assets/home")}}/lib/slick/slick-theme.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset("assets/home")}}/css/style.css" rel="stylesheet">
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Araba</th>
            <th>Resim</th>
            <th>Süre-Gün </th>
            <th>Alınma Tarihi</th>
            <th>Teslim Tarihi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datalist as $rs)
            <tr>
                <td>{{$rs->product->title}}</td>
                <td><img width="80px" height="80px"
                         src="{{Storage::url($rs->product->image) }}"
                         alt="Image"></td>
                <td>{{$rs->time}}</td>
                <td>{{$rs->created_at->format('Y/m/d')}}</td>
                <td>{{$rs->created_at->addDays($rs->time)->format('Y/m/d')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>