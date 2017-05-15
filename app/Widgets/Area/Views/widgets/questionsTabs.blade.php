@if(count($questions))
    <div class="widget widget-questions widget-tabs" data-url="{{ route('widget.area.questionsTabs') }}">
        <div class="widget-title">
            @if($advertisingModel->is_show_title)
                <h4 class="title">{{ $advertisingModel->title }}</h4>
            @endif
            <div class="filters">
                <button class="active tab" data-sortby="new">новые</button>
                <button class="tab" data-sortby="best">лучшие</button>
                <button class="tab" data-sortby="popular">популярные</button>
            </div>
        </div>
        <div class="items">
            @include('widget.area::widgets.questions')
        </div>
    </div>
@endif