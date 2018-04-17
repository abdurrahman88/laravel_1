<style type="text/css">
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
a {
	text-decoration: none;
}
</style>
<a href=" {{url('article/create')}}">create</a>
<br>
<br>
<?php $no=1; ?>
@foreach($article as $row)
<table>
	<tr>
		<th>Judul</th>
		<th>Isi</th>
		<th>Action</th>
	</tr>
	<tr>
		<td>{{$row->tittle}}</td>
		<td>{{substr($row->content, 0, 10)}}</td>
		<td>
			<a href="{{url('article/show/' .$row->id)}}">Detail</a>
			<a href="{{url('article/hapus/' .$row->id)}}">Hapus</a>
			<a href="{{url('article/edit/' .$row->id)}}">Update</a>
		</td>
	</tr>
</table>
@endforeach
