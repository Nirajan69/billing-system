<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title','bill-form creation')</title>
</head>
<body>
@section('content')

{{-- Heading for create page --}}
<h1>Create page</h1>

{{-- Anchour tag for back link --}}
<a href="{{route('bills.index')}}">back</a><br><br>


<form method="post" action="{{ route('bills.store') }}">
    @csrf
    @method('post')
 {{-- for input --}}
<label>Company Name: <input type="text" name="company_name"></label>
<label>Company Location: <input type="text" name="company_location"></label><br><br>
<label>Contact: <input type="text" name="contact"></label>

<label for="image"class="form-label" ><input type="file" class="form-control" id="image" name="image"><br><br></label>


    <label>Product Name: <input type="text" name="product_name"></label>
    <label>Price: <input type="text" name="product_price"></label>
    <label>Discount: <input type="text" name="product_discount"></label><br><br>




<button type="submit">Preview</button>
<button>Download</button>



</form>

</body>
</html>
