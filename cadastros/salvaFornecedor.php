
<?php
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "administrativo";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection


    if(isset($_POST['enviar'])) {
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $razaoSocial = $_POST['razaoSocial'];
        $fantasia = $_POST['fantasia'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado']; 
        $cidade = $_POST['cidade']; 
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $cnpj = $_POST['cnpj'];
        $inscricaoEstadual = $_POST['inscricaoEstadual'];
        $atividade = $_POST['atividade'];
        $contato = $_POST['contato'];
        $funcao = $_POST['funcao'];

        $sql = "INSERT INTO fornecedor (razaoSocial, fantasia, endereco, numero, bairro, estado, cidade, cep, telefone, celular, email, cnpj, inscricaoEstadual, atividade, contato, funcao)
            VALUES ('$razaoSocial', '$fantasia', '$endereco', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$telefone', '$celular', '$email', 
            '$cnpj', '$inscricaoEstadual', '$atividade', '$contato', '$funcao')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../index.php");

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

         mysqli_close($conn);
    }
?>

