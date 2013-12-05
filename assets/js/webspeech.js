$(function($)){

	var $btn = $('$btn');
	var $result = $('$result');
	var $words = null;

	if('webkitSpeechRecognition' in window){
		var recognition = new webkitSpeechRecognition();
		recognition.lang = 'fr-FR';
		recognition.continuous = false;
		recognition.interimResult = true;

		$btn.click(function(e){
			e.preventDefault();
			$btn.removeClass('btn-primary');
			recognition.start();
		});

		recognition.onresult = function(event){
			$result.text('');
			for(var i = event.resultIndex; i < event.results.length; i++){
				var transcript = event.results[i][0].transcript;
				if(event.results[i].isFinal){
					$result.text(transcript);
					recognition.stop();
					$btn.addClass('btn-primary');
					$words = transcript.split(' ');
					$.ajax({
						type : "post",
						dataType : "json",
						url : 'application/controllers/welcome.php',
						data : $words, 
						success: succes
					});
					return true;
				}else{
					$result.text($('$result').text() + transcript);
				}
			}
			console.log(event);
		}
	}else{
		$btn.hide)();
	}
}