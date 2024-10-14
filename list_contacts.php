<?php
session_start();
require_once 'DatabaseRepository.php';
$contacts = DatabaseRepository::getAllContacts();
 if (!$_SESSION["logado"]) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <style>
          #logout{
           border-radius: 15px;
           padding: 10px 80px;
           background-color: blue;
           color: white;
           margin-top: 20px;
           font-size: 1.3em;
           cursor: pointer;
              
          }
    </style>
</head>
<body>
    <h1>Lista de Contatos </h1>
    <a href="add_contact.php">Adicionar Novo Contato</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact): ?>
                <tr>
                    <td><?= $contact['nome']; ?></td>
                    <td><?= $contact['telefone']; ?></td>
                    <td><?= $contact['email']; ?></td>
                    <td>
                        <a href="edit_contact.php?id=<?= $contact['id']; ?>">Editar</a>
                        <a href="delete_contact.php?id=<?= $contact['id']; ?>" 
                            onclick="return confirm('Tem certeza que deseja deletar este contato?');">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
        
    </table>
    
    <a href="logout.php"><button id="logout">Sair</button></a>
</body>
</html>