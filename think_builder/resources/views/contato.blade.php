@extends('layouts.app')

@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="/css/contato.css">
@endsection

@section('dashboard')
<section id="contato">
    <div class="container body-content mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 box">
                <form>
                    <h1>Dê seu Feedback</h1>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>

                        <input class="form-control" type="text" id="email" placeholder="Digite seu email" />
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>

                        <textarea class="form-control" id="mensagem" rows="5"></textarea>
                    </div>

                    <input class="btn btn-block btn-custom" type="submit" value="Enviar" />
                </form>
            </div>

            <div class="col-md-4 offset-md-1 box">
                <h1>Contato</h1>

                <p>Telefone: (14)3000-0000 | (14)99999-9999</p>

                <p>Email: suporte@thinkbuilder.com.br</p>

                <p>Endereço: Rua Fulano da Silva, 1-11 <br/>
                    Vila Inventada, Bauru-SP</p>

                <ul>
                    <li><a href=""><img src="img/whatsapp.png" width="55px" /></a></li>

                    <li><a href=""><img src="img/facebook.png" /></a></li>

                    <li><a href=""><img class="displayed" src="img/instagram.png" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>        
@endsection