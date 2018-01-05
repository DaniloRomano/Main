<link href="Views/Components/login/pagina-login/css/pagina-login-style.css" type="text/css" rel="stylesheet" />
<div class="dvLoginBox">
    <span>Tela de Login</span>
    <input class="TextBox" ng-model="$ctrl.txtUser" placeholder="Digite seu usu&aacute;rio"/>
    <input class="TextBox" ng-model="$ctrl.txtPassword" type="password" placeholder="Digite sua senha" />
    <button class="Botao" ng-click="Entrar()" name="btnEntrar">Entrar</button>
</div>