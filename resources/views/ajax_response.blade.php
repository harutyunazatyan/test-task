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
