<center>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "keepanopenmind";

$connectual = @mysql_connect($hostname, $username, $password);
$select_db_booyah = mysql_select_db($database, $connectual);

function parse_smilies( $string ) {

    $string = str_replace( ":)", ":)", $string );
    $string = str_replace( ":(", ":(", $string );
    $string = str_replace( ":|", ":|", $string );
    
    return $string;
        
    ## Smilies are fun ^_^

}


function clean( $string ) {

        $string = htmlspecialchars( $string, ENT_QUOTES );

        if( get_magic_quotes_gpc(   ) ) {
    
            $string = stripslashes( $string );
                    
        }
                
        $string = str_replace( "\"", "", $string );
        
        $string = str_replace( "<", "&lt;", $string ); // Convert to HTML'z incase [:

        $string = str_replace( "<", "&gt;", $string ); // And again.

        $string = mysql_real_escape_string( $string );
        
        ## No need really to protect against words like "javascript" or "onmousedown",
        ## Because they can't do **** as we removed "<" and ">" [:

        return $string;
        
        // String has been returned D:
}

?>
</center>