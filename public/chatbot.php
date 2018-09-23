<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT.DS."header.php"); ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
<div class="col-md-9">
 <div class="row carousel-holder">
  <div class="col-md-12">
  <?php include(TEMPLATE_FRONT.DS."slider.php"); ?> 
     </div>
     <br><hr><p>.</p>
     <div class="row bot">   
	<div>user: <span id="user"></span></div>
	<div>chatbot: <span id="chatbot"></span></div>
	<div><input id="input" type="text" placeholder="say anything..." autocomplete="off"/></div>
</div>
<script type="text/javascript">
var trigger = [
	["hi","hey","hello","good morning","good afternoon"], 
	["i would like to buy a cheap and good laptop","i would like to buy a laptop","i wanna buy a laptop"],
	["what are you doing", "what is going on"],
	["how old are you"],
	["who are you", "are you human", "are you bot", "are you human or bot"],
	["who created you", "who made you"],
	["your name please",  "your name", "may i know your name", "what is your name"],
	["i love you"],
	["happy", "good"],
	["bad", "bored", "tired"],
	["help me", "tell me story", "tell me joke"],
	["ah", "yes", "ok", "okay", "nice", "thanks", "thank you"],
	["bye", "good bye", "goodbye", "see you later"]
];

var reply = [
	["Hello,how can I help you today?","What can i do for you sir?"], 
	["Please chose the Laptop option from the menu category", "In the menu from the left hand side you can see the Lapop category"],
	["Nothing much", "About to go to sleep", "Can you guest?", "I don't know actually"],
	["I am 1 day old"],
	["I am just a bot", "I am a bot. What are you?"],
	["Kani Veri", "My God"],
	["I am nameless", "I don't have a name"],
	["I love you too", "Me too"],
	["Have you ever felt bad?", "Glad to hear it"],
	["Why?", "Why? You shouldn't!", "Try watching TV"],
	["I will", "What about?"],
	["Tell me a story", "Tell me a joke", "Tell me about yourself", "You are welcome"],
	["Bye", "Goodbye", "See you later"]
];


var alternative = ["I wasn't programmed to answer on this kind of question", "I don't have an answer for this kind of question!"];
document.querySelector("#input").addEventListener("keypress", function(e){
	var key = e.which || e.keyCode;
	if(key === 13){ //Enter button
		var input = document.getElementById("input").value;
		document.getElementById("user").innerHTML = input;
		output(input);
	}
});
function output(input){
	try{
		var product = input + "=" + eval(input);
	} catch(e){
		var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and 
		text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
		if(compare(trigger, reply, text)){
			var product = compare(trigger, reply, text);
		} else {
			var product = alternative[Math.floor(Math.random()*alternative.length)];
		}
	}
	document.getElementById("chatbot").innerHTML = product;
	speak(product);
	document.getElementById("input").value = ""; //clear input value
}
function compare(arr, array, string){
	var item;
	for(var x=0; x<arr.length; x++){
		for(var y=0; y<array.length; y++){
			if(arr[x][y] == string){
				items = array[x];
				item =  items[Math.floor(Math.random()*items.length)];
			}
		}
	}
	return item;
}
function speak(string){
	var utterance = new SpeechSynthesisUtterance();
	utterance.voice = speechSynthesis.getVoices().filter(function(voice){return voice.name == "Agnes";})[0];
	utterance.text = string;
	utterance.lang = "en-US";
	utterance.volume = 1; //0-1 interval
	utterance.rate = 1;
	utterance.pitch = 2; //0-2 interval
	speechSynthesis.speak(utterance);
}
</script>
            </div>
        </div>
        </div>
</div>
   <!-- /.container -->
<?php include(TEMPLATE_FRONT.DS."footer.php"); ?>