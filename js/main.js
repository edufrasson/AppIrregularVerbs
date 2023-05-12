var current_verb;

function randomVerb(){
    n = Math.floor(Math.random() * verbs_1.length)
    current_verb = verbs_1[n]
    $("#randomResult").text(current_verb.traduction)     
}

function verifyVerb(){
    var infinitve = $('#txtInfinitive').val() 
    var past_tense = $('#txtPastTense').val() 
    var past_participle = $('#txtPastParticiple').val() 

    if(past_participle != current_verb.past_participle){
        $('#txtPastTense').addClass("error")
    }
}

$(document).ready(function(){
    $("#randomVerb").click(() => {
        randomVerb();
    })
})