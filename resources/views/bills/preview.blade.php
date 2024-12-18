<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<label>Location</label><label>Company Name</label><label>Logo</label>
<br><br>
<label>Contact</label><label>Date</label><br><br><br><br><br>

<a href="{{route('bills.create')}}">Create</a><br><br><br>

<table border="1">
    <thead>
        <tr>
            Table
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>S.N</td>
            <td>Item</td>
            <td>Price</td>
            <td>Discount</td>
            <td>Total</td>
            <td>Action</td>


        </tr>
<tr>
        @foreach ($bills as $bill)
        <td>{{$bill->id}}</td>
        <td>{{$bill->product_name}}</td>
        <td>{{$bill->product_price}}</td>
        <td>{{$bill->product_discount}}</td>

            @php
               $a= $bill->product_price;
               $b = $bill->product_discount;
               $c = $a-$b;
            @endphp

            <td>{{$c}}</td>
            <td>

                <a href="{{route('bills.edit',$bill->id)}}">edit</a>
                <form action="{{route('bills.destroy',$bill->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>

        {{-- <td>{{$bill->price - $bill->discount}}</td> --}}
    </tr>
        @endforeach


    </tbody>


</table>
</body>
</html>
