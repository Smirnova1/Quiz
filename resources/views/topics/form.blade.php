<div class="form-group">
    <label for="user_name">Your name:</label>
    <input type="text" name="user_name" id="user_name" required>
</div>
@foreach($topic->questions as $question )
    <div>{{$question->question}}</div>
    <input type="hidden" name="question_id[]" value="{{$question->question}}">
    @foreach($question->answers as $answer)
        <div class="form-group">
            <input name="question[{{$question->id}}][]"
                   type="{{$question->type}}"
                   @if ($question->type !== 'text')value="{{$answer->answer}}"@endif>
            @if($question->type == 'radio')
                <label class="form-check-label" for="{{$question->id}}">{{$answer->answer}}</label>
            @elseif($question->type == 'checkbox')
                <label class="form-check-label" for="{{$question->id}}[]">{{$answer->answer}}</label>
            @endif
        </div>
    @endforeach
@endforeach
<div class="form-group text-right">
    <button class="btn btn-outline-secondary" type="submit">
        <i class="fa fa-plane" aria-hidden="true"></i>
        Submit
    </button>
</div>


