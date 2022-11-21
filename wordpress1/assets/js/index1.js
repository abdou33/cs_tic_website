$(document).ready(function() { 
    // if there is no languages saved in localstorage => do browser preference
    // else use the language saved
    if(localStorage.getItem("language") == null){
        lang = navigator.language || navigator.userLanguage;
        console.log(lang);

        if(lang.includes("ar")){
            change_lang("ar")
        }
        if(lang.includes("en")){
            change_lang("en")
        }
        if(lang.includes("fr")){
            change_lang("fr")
        }
    }
    else {
        change_lang(localStorage.getItem("language"))
    }
});

        
function change_lang(lang){
    if(lang == "ar"){
        localStorage.setItem("language", "ar");
        $('.en').hide();
        $('.fr').hide();
        $('.ar').show();
        $('.needstoberightaligned').css('text-align','right');
    }
    if(lang == "en"){
        localStorage.setItem("language", "en");
        $('.en').show();
        $('.fr').hide();
        $('.ar').hide();
    }
    if(lang == "fr"){
        localStorage.setItem("language", "fr");
        $('.en').hide();
        $('.fr').show();
        $('.ar').hide();
    }
    let x = localStorage.getItem("language");
}