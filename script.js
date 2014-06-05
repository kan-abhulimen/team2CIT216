//Look up document.querySelector to use document ids sent by events such as onclick

function nextQuestion(currentQ, nextQ) {
    currentQ = document.querySelector(currentQ);
    nextQ = document.querySelector(nextQ);
    /*moving/fading out*/
    currentQ.style.left = '-100%';
    currentQ.style.opacity = '0';
    /*bringing/fading in*/
    nextQ.style.top = '25%';
    nextQ.style.left = '0%';
    nextQ.style.opacity = '1';
    nextQ.style.position = 'absolute';
}