<?php
$dicoMois = array("January"=>'Janvier','February'=>'Février',
'March'=>'Mars','April'=>'Avril','May'=>'Mai','June'=>'Juin',
'July'=>'Juillet','August'=>'Aout','September'=>'Septembre',
'October'=>'Octobre','November'=>'Novembre','December'=>'Décembre');

    echo "<table>";
    foreach($dicoMois as $k => $myValue) 
    {
        print "<tr><td>Anglais : $k </td><td><font color=blue> Français : $myValue </td></tr></font>";
    }
    echo "</table>";
?>