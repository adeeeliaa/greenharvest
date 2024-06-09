<h1>Edit Produk</h1>

<form action="/categories/{{$category->id}}" method="POST">
    @method('PUT')
    @csrf
    Nama : <input type="text" name="name" value="{{$category->name}}"><br>

    <input type="submit" value="Save">
</form>