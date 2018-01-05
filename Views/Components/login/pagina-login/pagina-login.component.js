/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 * Componente pagina de login
 */
app.component('paginalogin', {
    templateUrl: 'Views/Components/login/pagina-login/pagina-login.template.php',
    controller: ['$http', '$scope', function LoginController($http, $scope) {
            var self = this;
            $scope.Entrar = function () {
                if (self.txtUser == null & self.txtPass == null) {
                    alert('Usuário ou senha inválidos');
                } else {
                    var req = {
                        method: 'POST',
                        url: 'http://sistemas.danilo/Main-master/signin',
                        data: {'strUser': self.txtUser, 'strPass': self.txtPassword},
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    }
                    $http(req).then(function (response) {
                        if (response.data.strUser == self.txtUser) {
                            window.location.href = "http://sistemas.danilo/Main-master/Home";
                        } else {
                            alert("Usuario ou senha invalidos");
                        }
                    }, function errorCallback(response) {
                        console.log(response);
                    }
                    )
                }
            }
        }]
});