<div class="d-flex flex-wrap justify-content-center">
    @foreach($relatedEvents as $event)
        <div class="col-lg-3 col-md-10 my-2 m-1">
            <div>
                <img class="gallery-image" src="{{'/'.$event['img']}}" alt="{{$event['title']}}">
            </div>
            <div class="text-center mr-auto ml-auto my-1">
                <h6 class="">{{$event['title']}}</h6>
                <p><i class="fas fa-users mr-2">
                    </i>{{__('messages.card.participants',
                            ['curr' => $event['current_participants'], 'max' => $event['max_participants']])}}</p>
                <p><i class="fas fa-calendar-alt mr-2"></i>{{$event['datetime']}}</p>
                <a href="{{url('events/'.$event['id'])}}" class="btn btn-info ">{{__('messages.card.view')}}</a>
            </div>
        </div>
    @endforeach
</div>
