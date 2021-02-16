@foreach ($trigonometris as $trigonometri)
@if ($trigonometri->kode_materi == 002)
<center>
<h1>{{ $trigonometri->sub_materi }}</h1>
</center>
@if ($trigonometri->thumbnail != null)
<center>
<img src="{{$trigonometri->thumbnail}}">
</center>
@else
@endif
<center>
<p>{{ $trigonometri->materi }}</p>
</center>
@endif
@endforeach
