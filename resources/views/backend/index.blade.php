@extends('layout.index')
@section('content')
<div class="backend-container">
    <table>
        <thead>
            <th>
                S.No
            </th>
            <th>
                product_Name
            </th>
            <th>
                product_price
            </th>
            <th>
                Action
            </th>
        </thead>
        <tbody>
            <tr>
                @php
                $i =1;
                @endphp
                @foreach ($data as $row)

                <td>{{$i++}}</td>
                <td>{{$row->product_name}}</td>
                <td>{{ $row->price}}</td>
                <td><a href="{{ url('api/list/order/delete/').'/'.$row->id}}">delete</a>  <a href="{{ url('api/list/order/').'/'.$row->id}}">view</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <li>delete <a href="{{route('list/order/',['id'=>7])}}">delete</a></li> --}}
</div>
@endsection
