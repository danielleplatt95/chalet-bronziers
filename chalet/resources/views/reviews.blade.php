<div class="info">
<h1>Reviews.</h1>
<p>Don't just take our word for it! Hear it from our satisfied customers.</p>

<div class="row">
    @foreach($reviews as $review)
        <div class="column">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">"{{$review->sentence_highlight}}"</h5>
            <!-- TODO :: Add in rating -->
            <p>Comfort:</p>
            @php
                $comfortRating = $review->comfort;
            @endphp

            @for($i = 1; $i <= $comfortRating; $i++)
                <i class="fas fa-home"></i> 
            @endfor
            <p class="card-text">{{$review->message}}</p>
            <footer class="blockquote-footer">{{$review->user->first_name}}, age {{$review->age}} <cite title="date">Date Visited</cite></footer>
            <a href="#" class="card-link">Read More</a>
        </div>
        </div>
        </div>
    @endforeach
    </div>

</div>