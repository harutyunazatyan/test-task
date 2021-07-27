<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="container" id="app">
    <div id="table_content">
        <table class="table">
            <thead>
            <tr>
                <th><span class="sort_asc" data-sort="age">&#x25B2;</span> <span> age</span> <span class="sort_desc" data-sort="age">&#x25BC;</span></th>
                <th><span class="sort_asc" data-sort="eyeColor">&#x25B2;</span><span>eye color</span><span class="sort_desc" data-sort="eyeColor">&#x25BC;</span></th>
                <th><span class="sort_asc" data-sort="name">&#x25B2;</span><span >name</span><span class="sort_desc" data-sort="name">&#x25BC;</span></th>
                <th><span class="sort_asc"  data-sort="gender">&#x25B2;</span><span>gender</span><span class="sort_desc" data-sort="gender">&#x25BC;</span></th>
                <th><span class="sort_asc" data-sort="company">&#x25B2;</span><span>company</span><span class="sort_desc" data-sort="company">&#x25BC;</span></th>
                <th><span class="sort_asc" data-sort="email">&#x25B2;</span><span>email</span><span class="sort_desc" data-sort="email">&#x25BC;</span></th>
                <th><span class="sort_asc" data-sort="phone">&#x25B2;</span><span>phone</span><span class="sort_desc" data-sort="phone">&#x25BC;</span></th>
                <th><span class="sort_asc"  data-sort="address">&#x25B2;</span><span >address</span><span class="sort_desc"  data-sort="address">&#x25BC;</span></th>
            </tr>
            </thead>
            <tbody class="tbody">
            @foreach ($items as $item)
                <tr>
                    <td>
                        <p>{{ $item->age }}</p>
                    </td>
                    <td>
                        <p> {{ $item->eyeColor }}</p>
                    </td>
                    <td>
                        <p>{{ $item->name }}</p>
                    </td>
                    <td>
                        <p>{{ $item->gender }}</p>
                    </td>
                    <td>
                        <p> {{ $item->company }}</p>
                    </td>
                    <td>
                        <p>{{ $item->email }}</p>
                    </td>
                    <td>
                        <p> {{ $item->phone }}</p>
                    </td>
                    <td>
                        <p>{{ $item->address }}</p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <div class="pagination">
            <ul>
        @for ($i = 1; $i <= $page_count; $i++)

                    <li class="numb" data-page="{{$i}}"><span>{{$i}}</span></li>
        @endfor
            </ul>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/datable.js')}}"></script>
<script src="{{ asset('js/boostrap.js')}}"></script>
<script src="{{ asset('js/boostrap_datatable.js')}}"></script>
<script src="{{ asset('js/custom/item.js')}}"></script>
</body>
</html>
