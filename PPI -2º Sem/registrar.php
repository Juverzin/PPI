<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $matricula = $_POST['matricula'];
    $nome_aluno = $_POST['nome_aluno'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $motivo = $_POST['motivo'];
    $nome_professor = $_POST['nome_professor'];
    $email_professor = $_POST['email_professor'];

    // Verifica se o aluno está cadastrado
    $sqlAluno = "SELECT * FROM alunos WHERE matricula = '$matricula'";
    $resultadoAluno = mysqli_query($conn, $sqlAluno);

    if (mysqli_num_rows($resultadoAluno) === 0) {
        echo "Erro: Aluno não cadastrado no sistema.";
        exit;
    }

    // Verifica se o professor está cadastrado
    $sqlProfessor = "SELECT * FROM professores WHERE email = '$email_professor'";
    $resultadoProfessor = mysqli_query($conn, $sqlProfessor);

    if (mysqli_num_rows($resultadoProfessor) === 0) {
        echo "Erro: Professor não cadastrado no sistema.";
        exit;
    }

    // Insere o registro de atraso
    $sqlInsert = "INSERT INTO registros_atrasos (matricula, nome_aluno, data, hora, motivo, nome_professor, email_professor)
                  VALUES ('$matricula', '$nome_aluno', '$data', '$hora', '$motivo', '$nome_professor', '$email_professor')";

    if (mysqli_query($conn, $sqlInsert)) {
        echo "Atraso registrado com sucesso!";
    } else {
        echo "Erro ao registrar atraso: " . mysqli_error($conn);
    }
}
?>
