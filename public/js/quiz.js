var questionCounter = 0;                                                                                           
var correctAnswers=0;
var choice=0;
var randomQuestion;
var questionIndex=0;
	
	function displayQuestions() 
	{
		questionIndex++;	
		if(questionCounter == 10)
		{
			//window.location.href='quiz_result.php?score='+g1correctAnswers+'&scoreId=1';
		}
		else
		{
			randomQuestion = Math.floor((Math.random() * 19) + 1);
			var header = $("<h4 >Question "+questionIndex+"<br><br>"+quizDetails[randomQuestion].question+"</h4><br>");
			$("#quizDetals").append(header);
			var input = "";
		
			for (var i = 0; i < 4; i++) 
			{
				var g1input = $('<input>').attr(
				{
					type: 'button',
					name: 'answer',
					value: gOneQuestions[randomQuestion].choices[i],
					class : 'pro col-lg-6 col-xs-6 ',
					
				}); 
				$("#quizDetails").append(input);	
			}
			
			$("#quizDetails").fadeIn();
		}
	}
		
	$(document).ready(function()
	{
		displayQuestions();    
		$("#quizDetails").on('click','.pro',function () {
  		var value = $(this).attr("value"); 
		if (value==quizDetails[(randomQuestion)].correctAnswer)
		{
			 //$('.pro').css({'color':'blue','right':'30px'});
			
		} 
		questionCounter++;
		$("#quizDetails").fadeOut();
		$("#quizDetails").empty();
		displayQuestions();
		});
	});