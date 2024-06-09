<h1>List Kategori</h1>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="/categories/{{$category->id}}/edit">Edit</a>
                    <form action="/categories/{{$category->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

    <a href="/categories/create">Tambah</a>
</table>