<?php

namespace Gravatar;

        // RATING //
        // from [(https://en.gravatar.com/site/implement/images/)]
        //@ g: suitable for display on all websites with any audience type.
        //@ pg: may contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence.
        //@ r: may contain such things as harsh profanity, intense violence, nudity, or hard drug use.
        //@ x: may contain hardcore sexual imagery or extremely disturbing violence.

 class Gravatar {
     public static function getImage($email, $size = 80, $rating = 'g'){
        $hash = trim(md5(strtolower($email)));
        $ext = '.png';
        $size = '?s='.$size;
        $rating = '&r='.$rating;
        $link = 'https://www.gravatar.com/avatar/'.$hash.$ext.$size.$rating;
        echo $link;
     }
 }
