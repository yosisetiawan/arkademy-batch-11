<?php
    
    // function valid_number($_number)
    // {
    //     if(!preg_match('/^(?:62|\+?62)(?:\d(?:-)?){8,15}$/', $_number)){
    //         echo '<br> -is_phone_valid('.$_number.') <br>';
    //         echo 'return false <br>';
    //     }else{
    //         echo '<br> -is_phone_valid('.$_number.') <br>';
    //         echo 'return true <br>';
    //     }
    // }

    function valid_username($_username)
    {
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).+$/i', $_username)){
            echo '<br> -is_username_valid('.$_username.') <br>';
            echo 'return false <br>';
        }else{
            echo '<br> -is_username_valid('.$_username.') <br>';
            echo 'return true <br>';
        }
    }

    function valid_password($_password)
    {
        if(!preg_match('/^[a-zA-Z0-9@#]{8,}$/i', $_password)){
            echo '<br> -is_password_valid('.$_password.') <br>';
            echo 'return false <br>';
        }else{
            echo '<br> -is_password_valid('.$_password.') <br>';
            echo 'return true <br>';
        }
    }

    // function valid_email($_email)
    // {
    //     if(!preg_match('/^[a-zA-Z0-9]{1,}+@+[a-zA-Z0-9]+\.[a-zA-Z]{2,}/i', $_email)){
    //         echo '<br> -is_email_valid('.$_email.') <br>';
    //         echo 'return false <br>';
    //     }else{
    //         echo '<br> -is_email_valid('.$_email.') <br>';
    //         echo 'return true <br>';
    //     }
    // }


    echo valid_username('zeronull');

    echo valid_username('Ayu99v');

    echo valid_password('p@ssW0rd#');

    echo valid_password('C0d3YourFuture!@’');

    // echo valid_email('iqbal@mail.c');

    // echo valid_email('iqbal@mail.com');
?>