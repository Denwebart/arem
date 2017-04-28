<div class="area area-sidebar">
    {{--@if(Auth::check())--}}
        {{--@if(Auth::user()->isAdmin())--}}
            {{--@include('widgets.area.create')--}}
        {{--@endif--}}
    {{--@endif--}}
    @foreach($advertising as $item)
        {{--@if(Auth::check())--}}
            {{--@if(Auth::user()->isAdmin())--}}
            {{--<div class="widget access-{{ $item->access }}{{ $item->is_active ? '' : ' not-active'}} @if(Advertising::TYPE_ADVERTISING == $item->type) type-a @endif" {{ $item->is_active ? '' : 'style="display: none"'}} data-widget-id="{{ $item->id }}">--}}
                {{--<div class="widget-title" style="display: none">--}}
                    {{--<a href="{{ URL::route('admin.advertising.index', ['id' => $item->id]) }}" title="Смотреть в админке" data-toggle="tooltip">--}}
                        {{--{{ $item->title }}--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--@else--}}
                {{--<div class="widget @if(Advertising::TYPE_ADVERTISING == $item->type) type-a @endif">--}}
            {{--@endif--}}
        {{--@else--}}

        {{--@endif--}}
        {{--@include('widgets.area.controlAdvertising')--}}
        @if(\App\Models\Advertising::TYPE_ADVERTISING == $item->type)
            <div class="widget type-a">
                @if($item->is_show_title)
                    <div class="widget-title">
                        <h4 class="title">{{ $item->title }}</h4>
                    </div>
                @endif
                {!! $item->code !!}
            </div>
        @elseif(\App\Models\Advertising::TYPE_WIDGET == $item->type)
            {!! $widgets->show($item->code, $item->limit, $item) !!}
        @endif
    @endforeach
</div>