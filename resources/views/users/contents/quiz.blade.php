<script>
		var quizDetails = <?php echo json_encode($quizdetails);?>;
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
			randomQuestion = Math.floor((Math.random() * 4) + 1);
			var header = $("<h4 >Question "+questionIndex+"<br><br>"+quizDetails[0]['question']+"</h4><br>");
			$("#quizDetail").append(header);
			var input = "";
		
				var input_one = $('<input>').attr(
				{
					type: 'button',
					name: 'answer',
					value: quizDetails[0]['choice_one'],
					class : 'pro',
					
				}); 

				var input_two = $('<input>').attr(
				{
					type: 'button',
					name: 'answer',
					value: quizDetails[0]['choice_two'],
					class : 'pro',
					
				});
			    var input_three = $('<input>').attr(
				{
					type: 'button',
					name: 'answer',
					value: quizDetails[0]['choice_three'],
					class : 'pro',
					
				}); 

				var input_four = $('<input>').attr(
				{
					type: 'button',
					name: 'answer',
					value: quizDetails[0]['choice_four'],
					class : 'pro',
					
				});

				$("#quizDetail").append(input_one,input_two,input_three,input_four);	
			
			
			$("#quizDetail").fadeIn();
		}
	}
		
	$(document).ready(function()
	{
		displayQuestions();    
		$("#quizDetail").on('click','.pro',function () {
  		var value = $(this).attr("value"); 
		if (value==quizDetails[0].correct_answer)
		{
			 
			
		} 
		
		questionCounter++;
		$("#quizDetail").fadeOut();
		$("#quizDetail").empty();
		displayQuestions();
		});
	});
	</script>
<body>
	
<div id="main_quiz" >
	<h1>If Not Now--<Strong>When?</strong></h1>
	<div id="quizDetail">
	</div>
    <div id="quizcontrolbutton">
    <button>Restart</button>   
</div></div></div>


	<body>