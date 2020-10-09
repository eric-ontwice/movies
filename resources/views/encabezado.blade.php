@if (\Auth::user()->role_id == 2)

    <h4 style="padding-right: 20%">
        <a href="{{ route('gender.edit', $gender->id) }}" style="color: #FFFFFF; text-decoration: none;">
            <b>{{ $gender->name }}</b>
        </a>
    </h4>

    <a href="{{ route('gender.destroy', $gender->id) }}" style="font-size: 15px;
                                                        width:19px;height:25px;
                                                        top:-9px;
                                                        right:-9px;
                                                        position:absolute;
                                                        cursor:pointer;
                                                        line-height:21px;color:red;">X</a>

@else
    <h4 style="padding-right: 20%"><b>{{ $gender->name }}</b></h4>
@endif
