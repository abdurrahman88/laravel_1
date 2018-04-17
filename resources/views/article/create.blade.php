<ul>
	@foreach($errors->all() as $row)
	<li>{{$row}}</li>
	@endforeach
</ul>

<form action=" {{url('article/create')}}" method="post">
	<table>
		<tr>
			<td><label>Judul :</label></td>
			<td><input type="text" name="tittle"></td>
		</tr>
		<tr>
			<td><label>Isi :</label></td>
			<td><textarea name="content"></textarea></td>
		</tr>
	</table>
	{{csrf_field()}}
	<button type="submit">Submit</button>
</form>