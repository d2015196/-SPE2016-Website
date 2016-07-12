
<?php

switch($_GET['Stock']) {
    case 'DIS':
        $page = 'resultpagedis.html';
        break;
    case 'JPM':
        $page = 'resultpagejpm.html';
        break;
    case 'TROW':
        $page = 'resultpagetrow.html';
        break;
        
    case 'AAPL': 
        $page = 'resultpageaapl.html';
        break;
    
    case 'YHOO': 
        $page = 'resultpageyhoo.html';
        break;
}


include '/xampp/htdocs/dianas_pizza/Site/' . $page;

?> 