var current_verb;
var current_list;

function randomVerb() {
    switch ($('#listValue').val()) {
        case 'list_1':
            console.log('xd')
            addVerbOnResult(verbs_1);
            break
        case 'list_2':
            addVerbOnResult(verbs_2);
            break
        case 'list_3':
            addVerbOnResult(verbs_3);
            break
        case 'list_4':
            addVerbOnResult(verbs_4);
            break
    }
}

async function addVerbOnResult(var_name) {
    n = Math.floor(Math.random() * var_name.length)
    current_verb = var_name[n]
    await $("#randomResult").text(current_verb.translation)
}

function verifyVerb() {
    var infinitve = $('#txtInfinitive').val()
    var past_tense = $('#txtPastTense').val()
    var past_participle = $('#txtPastParticiple').val()

    if (past_participle != current_verb.past_participle) {
        $('#txtPastTense').addClass("error")
    }
}

$(document).ready(function () {
    $("#randomVerb").click(() => {
        randomVerb();
    })
})