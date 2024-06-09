<h1>Tambah Produk</h1>

<form action="/categories" method="POST">
    @csrf
    Id : <input type="text" name="id"><br>
    Nama : <input type="text" name="name"><br>

    <input type="submit" value="Save">
</form>