

let choiceOfProfile = "";

function manage() {

	document.getElementById("choices").style.display = "none";
	document.getElementById("selectProfile").style.display = "none";
	document.getElementById("selectedProfile").style.display = "flex";
	document.getElementById("selectedProfile").style.backgroundRepeat = "no-repeat";
	document.getElementById("selectedProfile").style.backgroundImage = "url('assets/images/" + choiceOfProfile + ".jpg')";
	document.getElementById("selectedProfile").style.backgroundSize = "100px";
	document.getElementById("selectedProfile").style.backgroundImage = "center";

	let imageElt = document.getElementById("image");
	imageElt.value = 'assets/images/' + choiceOfProfile + '.jpg';	
}

document.getElementById("choices").style.display = "none";
	
document.getElementById("selectProfile").addEventListener("click", () => {

	document.getElementById("choices").style.display = "block";
	document.getElementById("choices").style.display = "flex";
})

document.getElementById("selectedProfile").addEventListener("click", () => {

	document.getElementById("choices").style.display = "block";
	document.getElementById("choices").style.display = "flex";
})

document.getElementById("dog").addEventListener("click", () => {

	choiceOfProfile = "dog";	

	manage();
})

document.getElementById("cat").addEventListener("click", () => {

	choiceOfProfile = "cat";
	
	manage();
})

document.getElementById("nook").addEventListener("click", () => {

	choiceOfProfile = "nook";
	
	manage();
})

document.getElementById("monkey").addEventListener("click", () => {

	choiceOfProfile = "monkey";
	
	manage();
})

document.getElementById("rabbit").addEventListener("click", () => {

	choiceOfProfile = "rabbit";
	
	manage();
})















