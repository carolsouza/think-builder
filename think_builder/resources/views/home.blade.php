@extends('layouts.app')

@section('dashboard')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-group shadow">
                <div class="card col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Seu link de divulgação</h5>

                        <p class="card-text">Se você gosta do Auxilium e acredita que o nosso sistema pode ajudar outros advogados, 
                            então divulgue nosso link abaixo:</p>

                        <div class="d-flex flex-wrap mb-3">
                            <div class="p-3 w-auto left-link">
                                <a href="http://auxilium.com.br/?token=1z1" id="conteudo" target="_blank">http://auxilium.com.br/?token=1z1</a>
                            </div>

                            <div class="p-2 w-auto">
                                <button type="button" id="copiar" class="btn btn-primary">Copiar link</button>
                            </div>

                            <div class="p-2 w-auto">
                                Compartilhar:
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="icones-sociais face-hover fab fa-facebook-f"></i>
                                </a>
                            </div>

                            <div class="p-2 w-auto">
                                <a href="https://twitter.com/intent/tweet?text=Frase legal bla bla bla... Clicando nesse link http://auxilium.com.br/?token=1z1" target="_blank">
                                    <i class="icones-sociais twitter-hover fab fa-twitter"></i>
                                </a>
                            </div>

                            <div class="p-2 w-auto">
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="icones-sociais whats-hover fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                        <p class="card-text"><b>Ganhe prêmios por cada colega que fizer o cadastro ou assinar!</b><br>
                            clique aqui e veja a regra completa do nosso programa.</p>
                    </div>
                </div>

                <div class="card col-md-3">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-dark">Confira as regras</h5>

                        <p class="card-text"><b>Cada cadastro confimado</b> você ganha mais <b>5 dias</b> na sua assinatura</p>

                        <p class="card-text"><b>Se sua indicação assinar o Auxilium</b> você ganha mais 30 dias na sua assinatura,
                             ou <b>30 dias</b> na atualização jurídica do dia.Conheça <a href="https://juridmais.com.br/" target="_blank">www.juridweb.com.br</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card-group shadow" style="margin-top: 3%;">
                <div class="card col-md-9">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th scope="col">Data</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Assinou</th>
                                        <th scope="col">Seu prêmio</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Hoje</td>
                                        <!-- <td class="overflow-auto">Alípio Abreu Cara Neto</td> -->
                                        <td>Alípio</td>
                                        <td>alipio.neto@jurid.com.br</td>
                                        <td>Não</td>
                                        <td>5 dias</td>
                                        <td>Resgatado</td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>05/05/2019</td>
                                        <!-- <td>Gabriel Orbeli Rodrigues Belíssimo</td> -->
                                        <td>Gabriel</td>
                                        <td>gabriel.orbeli@jurid.com.br</td>
                                        <td>Sim</td>
                                        <td>30 dias</td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Resgatar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card col-md-3">
                    <div class="card-body text-primary">
                        <div class="card text-center p-3">
                            <h5 class="card-title text-dark">Total resgatado</h5>
                            <h3 class="card-title">5 Dias</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection