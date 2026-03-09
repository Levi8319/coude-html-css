if ($_POST) {
    $name = $_POST['name'];
    $data_de_nascimento = $_POST['data de nascimento'];
    $email = $_POST['email'];
    $html = isset($_POST['html']) ? 'Sim' : 'Não';
    $css = isset($_POST['css']) ? 'Sim' : 'Não';

    echo "Nome: " . htmlspecialchars($name) . "<br>";
    echo "Data de Nascimento: " . htmlspecialchars($data_de_nascimento) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Prefere HTML: " . $html . "<br>";
    echo "Prefere CSS: " . $css . "<br>";
}