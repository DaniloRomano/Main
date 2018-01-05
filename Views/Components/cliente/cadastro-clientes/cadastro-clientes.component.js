/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Componente de cadastro de clientes
app.component('cadastroclientes', {
            templateUrl: 'Views/Components/cliente/cadastro-clientes/cadastro-clientes.template.php',
            controller: ['$http', '$scope', function ProjetoPadraoController($http, $scope) {
                    var self = this;
                    $scope.SalvarCliente = function () {
                        var req = {
                            method: 'GET',
                            url: 'http://localhost/Main-master/BLL/clientes/Cliente.php?id=1&serv=save'                            
                        };
                        $http(req).then(function (response) {
                            //var obj=JSON.parse(response.strNome);
                            self.Nome = response.data.strNome;
                        }, function errorCallback(response) {
                            console.log(response);
                        });
                    };
                    $scope.Show = function () {
                        var req = {
                            method: 'GET',
                            url: 'http://sistemas.danilo/Main-master/cliente/list/1'                           
                        };
                        $http(req).then(function (response) {                                                        
                            self.Nome = response.data.strNome;
                        }, function errorCallback(response) {
                            console.log(response);
                        });
                    }
                }]
        });
