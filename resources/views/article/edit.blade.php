<ul>
	@foreach($errors->all() as $row)
	<li>{{$row}}</li>
	@endforeach
</ul>
<form action=" {{url('article/update')}}" method="post">
	<input type="hidden" name="id" value=" {{$article->id}} ">

	Judul : <input type="text" name="tittle" value=" {{$article->tittle}} ">
	Isi : <input type="textarea" name="content" value=" {{$article->content}} ">
	{{csrf_field()}}
	<button type="submit">Update</button>
</form>