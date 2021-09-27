<?php
    session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) 
{
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, por favor preencha o novamente.';
    header('location: formulariosimples.php');
    return;
}
if (strlen($nome) < 3 )
{
    $_SESSION['mensagem de erro'] = 'O nome deve conter mais que 3 caracteres';
    header('location: formulariosimples.php');
    return;
}
if (strlen($nome) > 40 ) 
{
    $_SESSION['mensagem de erro'] = 'O nome é muito extenso';
    header('location: formulariosimples.php');
    return;
}
if (!is_numeric($idade))
{
    $_SESSION['mensagem de erro'] = 'Informe um número para a idade';
    header('location: formulariosimples.php');
    return;
}

 if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i < count($categorias); $i++)
    {
     if($categorias[$i] == 'infantil')
        {  
        $_SESSION['mensagem de sucesso'] = "O(A) nadador(a) " . $nome. " compete na categoria infantil ";
        header('location: formulariosimples.php');
        return;
        }
    }
}
else if($idade >= 13 && $idade <= 18) 
{
    for($i = 0; $i < count($categorias); $i++)
    {
     if($categorias[$i] == 'adolescente')
        { 
        $_SESSION['mensagem de sucesso'] = "O(A) nadador(a) " . $nome. " compete na categoria adolescente ";
        header('location: formulariosimples.php');
        return;
        }
    }
}
else
{  
    for($i = 0; $i < count($categorias); $i++)
    {
     if($categorias[$i] == 'adulto')
        {
        $_SESSION['mensagem de sucesso'] = "O(A) nadador(a) " . $nome. " compete na categoria adulto ";
        header('location: formulariosimples.php');
        return;
        }
    } 
}
?>

