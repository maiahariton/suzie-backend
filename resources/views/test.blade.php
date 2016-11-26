@foreach($product as $task)
<tr>

<td>  {!! $task->id !!}</td>
<td colspan="5" class="text-center">  {!! $task->title !!}</td>
<td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateSlider/'. $task->id).'/edit' !!}">Edit this Slider</a>
</td>
</tr>

@endforeach
