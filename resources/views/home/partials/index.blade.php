<table class="table table-bordered">
    <tbody class="text-center">
        @foreach($lights as $rowlight)
            <tr>
                @foreach($rowlight as $val)
                    @if($val == 1 )
                        <td  data-type = {{$val}} class="bg-black">{{$val}}</td>
                    @else
                        @if($val == 0 )
                            <td  data-type = {{$val}} class="">{{$val}}</td>
                         @else
                            <td  data-type = {{$val}} class="bg-yellow {{ $val == 2 ? 'low' : '' }}">{!! $val == 2 ? '' : '<i class="icon-lightbulb"></i>' !!}</td>
                        @endif
                    @endif
                    
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>