<?php 

require 'conexao.php';

$id = 1;

$query = "SELECT * FROM usuarios WHERE id={$id}";

// echo '<pre>';
// echo $query;
// echo '<br>';

$result = pg_query($con,$query);

$data = pg_fetch_assoc($result);

// print_r($data);

?>

<?php if ($data): ?>
	<p>Nome: <?= $data['nome'] ?></p>
	<p>Email: <?= $data['email'] ?></p>
	<p>Senha: <?= $data['senha'] ?></p>
<?php else: ?>
	<p>Não encontrou dados</p>
<?php endif; ?>