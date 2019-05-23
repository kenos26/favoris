<?php
if(array_key_exists("word", $_POST)){
    $word = strtolower($_POST["word"]);
}

if(array_key_exists("language", $_POST)){
    $lang = $_POST["language"];
}else{
    $lang = "toFrench";
}


function translate($word, $lang){
    $dictionary =
    [
        'cat'    => 'chat',
        'dog'    => 'chien',
        'monkey' => 'singe',
        'sea'    => 'mer',
        'sun'    => 'soleil'
    ];

    switch($lang){
        case "toFrench" :
        if(array_key_exists($word,$dictionary)){
            $translatedWord = $dictionary[$word];
            $message = "le mot '$word' se traduit par '$translatedWord'"
        }
        else{
            $message = "Je ne connais pas le mot";
        }
        break;
        case "toEnglish":
        if(in_array($word, $dictionary)){
            $translatedWord = array_search($word, $dictionary);
            $message = "le mot '$word' se traduit par '$translatedWord'"
        }else{
            $message = "Je ne connais pas le mot";
        }
        break;
        default :
        $message = "Je ne sais traduire qu'en francais et qu'en anglais";
        break;
    }

    return $message;
}

$result = translate($word, $lang);

include "index.phtml";
