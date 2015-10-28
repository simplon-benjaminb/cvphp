  <?php

$mdp = $_POST['pass'];

if ($mdp ==  'd')
{
  header('Location: http://www.rambal-et-sagan.fr/');
  exit();
// C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
}
else // Si le mot de passe n'est pas bon.
{
echo 'Vous n\'avez pas rentré les bons identifiants';

}
?>
