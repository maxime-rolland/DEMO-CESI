<?php
$tailleGroupe=2;


$eleves=array(
    array('prenom'=>'Gauthier','nom'=>'ANTOINE','niveau'=>'2'),
    array('prenom'=>'Sylvain','nom'=>'VIGOGNE','niveau'=>'1'),
    array('prenom'=>'Florian','nom'=>'GUERRIN','niveau'=>'2'),
    array('prenom'=>'Sullivan','nom'=>'ASSIE','niveau'=>'2'),
    array('prenom'=>'Marius','nom'=>'ROELLY','niveau'=>'2'),
    array('prenom'=>'Nicolas','nom'=>'HENRY','niveau'=>'2'),
    array('prenom'=>'Arthur', 'nom'=>'FRISCH', 'niveau'=>'3'),
    array('prenom'=>'Marco','nom'=>'TOME','niveau'=>'1'),
);

$groupes=array();
$nbEleve=sizeof($eleves,0);
$compteur=sizeof($eleves,0);


while($compteur>0){
    
    
    $pointeurEleve=rand(0,$compteur-1);
    $pointeurGroupe=rand(0,round($nbEleve/$tailleGroupe)-1);

    echo $eleves[$pointeurEleve]['prenom'] ."\n";
    echo $pointeurGroupe ."\n";
    //On vérifie si le groupe existe, s'il n'existe pas, on le créé
    if(!array_key_exists($pointeurGroupe, $groupes)){
        $groupes[$pointeurGroupe]=array();
    }

    //Si le groupe n'est pas plein
    echo "LE groupe ".$pointeurGroupe." a ".sizeof($groupes[$pointeurGroupe],0)."\n";
    if(sizeof($groupes[$pointeurGroupe],0) < $tailleGroupe){
        echo "On ajoute l'eleve".$eleves[$pointeurEleve]['prenom']."au groupe".$pointeurGroupe;
       array_push($groupes[$pointeurGroupe],$eleves[$pointeurEleve]);
        
        array_splice($eleves,$pointeurEleve,1);
        $compteur--;
      
    }
  
    //array_slice($eleves,1,1);
   
}
var_dump($eleves);
var_dump($groupes);