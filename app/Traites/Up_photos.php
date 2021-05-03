<?php

namespace App\Traites;

Trait Up_photos {

    function upload_ph ( $photo , $location ) {
        $file_ex = $photo -> getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $location;
        $photo -> move( $path , $file_name );

        return $file_name;
    }

}