<button onclick="redirectToClients()">Clients</button>
<button onclick="redirectToComptes()">Comptes</button>

<script type="text/javascript">

    // Function pour rediriger vers le fichier ClientController
    function redirectToClients() {
        // window.location est une function JS déjà crée qui nous permet avec le replace d'être rediriger vers un autre URL
        window.location.replace('./Controllers/ClientController.php');
    }

    function redirectToComptes() {
        window.location.replace('./Controllers/CompteController.php');
    }

</script>