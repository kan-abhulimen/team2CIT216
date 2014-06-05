//Bro Barney's example to create a baby object
function baby(length, weight, hasHair, fingerCount) {
    Human.call(this, fingerCount) //Extends the Human object
    this.length = length;
    this.weight = weight;
    this.hasHair = hasHair;
    this.poop = function(consistency) {
        console.log("It's " + consistency)
    }
}

//Using the baby object
var aBaby = new Baby(17, 45, FALSE);
aBaby.poop("Runny");

//Look up document.querySelector to use document ids sent by events such as onclick

function nextQuestion(currentQ, nextQ) {
    currentQ = document.querySelector(currentQ);
    nextQ = document.querySelector(nextQ);
    /*moving/fading out*/
    currentQ.style.left = '-100%'
    currentQ.style.opacity = '0'
    /*bringing/fading in*/
    nextQ.style.left = '0%'
    nextQ.style.opacity = '1'
}