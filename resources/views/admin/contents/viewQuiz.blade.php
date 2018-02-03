<table class="table">
    <caption>List of Users</caption>
    <button>Add Quiz</button>
<tr>

    <td>Question</td>
    <td>Choice One</td>
    
    <td>Choice Two </td>
    <td>Choice Three</td>
    <td>Choice Four</td>
    <td>Correct Answer</td>
</tr>
@foreach($quizDetails as $quizDetails)
<tr>
     <td>{{$quizDetails->question}}</td>
    <td>{{$quizDetails->choice_one}}</td>
    <td>{{$quizDetails->choice_two}}</td>
    <td>{{$quizDetails->choice_three}}</td>
    <td>{{$quizDetails->choice_four}}</td>
    <td>{{$quizDetails->correct_answer}}</td>
    <td>edit </td>
    <td>delete</td>
</tr>
@endforeach

</table>
</div>