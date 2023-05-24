var current_verb;
var current_list;

/* 
    Função que chama a randomização dependendo do valor do select de lista.
*/
function randomVerb() {
    clearEntrys();
    switch ($('#listValue').val()) {
        case 'list_1':
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
        case '':
            swal({
                title: "Erro!",
                text: "Selecione uma lista!",
                icon: "error"
            })
            break
    }
}



/* 
    Função que limpa os inputs
*/
function clearEntrys(){
    $('#txtInfinitive').removeClass("error")
    $('#txtInfinitive').removeClass("success")
    $('#txtInfinitive').val("")

    $('#txtPastTense').removeClass("error")
    $('#txtPastTense').removeClass("success")
    $('#txtPastTense').val("")

    $('#txtPastParticiple').removeClass("error")
    $('#txtPastParticiple').removeClass("success")
    $('#txtPastParticiple').val("")

    $('.legend').text("")
}

/* 
    Função que adiciona a tradução do verbo no parágrafo de resultado.
*/
async function addVerbOnResult(var_name) {
    n = Math.floor(Math.random() * var_name.length)
    current_verb = var_name[n]
    await $("#randomResult").text(current_verb.translation)
}

/* 
    Função que verifica se os resultados correspondem com a lista.
*/
function verifyVerb() {
    $('.legend').text("")
    // Verifica se todos os inputs estão preenchidos 
    if ($('#txtInfinitive').val() != '' && $('#txtPastTense').val() != '' && $('#txtPastParticiple').val() != '') {

        // Verifica input por input os valores.        
        if ($('#txtInfinitive').val() != current_verb.infinitive) {
            $('#txtInfinitive').addClass("error")
            $('#infLegend').text('Correct is: ' + current_verb.infinitive)
        } else {
            $('#txtInfinitive').addClass("success")
        }

        if ($('#txtPastTense').val() != current_verb.simple_past) {
            $('#txtPastTense').addClass("error")
            $('#tenseLegend').text('Correct is: ' + current_verb.simple_past)
        } else {
            $('#txtPastTense').addClass("success")
        }

        if ($('#txtPastParticiple').val() != current_verb.past_participle) {
            $('#txtPastParticiple').addClass("error")
            $('#participleLegend').text('Correct is: ' + current_verb.past_participle)
        } else {
            $('#txtPastParticiple').addClass("success")
        }
    }else{
        swal({
            title: "Erro!",
            text: "Preencha todos os campos!",
            icon: "error"
        })
    }

}

$(document).ready(function () {

})