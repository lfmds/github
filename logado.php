<!--Luiz fez o código-->
<?php
session_start();
include("conexao.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet.css" type="text/css">
    <title>Document</title>
    <script async src="loja.js"></script>
</head>

<body>
    <header class="header-comshadow">
        <nav class="nav-bar">
            <div class="nav-list">
                <div class="logo">
                    <a href="index.html">
                        <h3>INFOTEC</h3>
                    </a>
                    <ul>
                        <li class="printTable"><a href="index.html" class="nav-link">Menu</a></li>
                        <li class="printTable"><a href="celulares.html" class="nav-link">Celulares</a></li>
                        <li class="printTable"><a href="monitores.html" class="nav-link">Monitores</a></li>
                        <li class="printTable"><a href="perifericos.html" class="nav-link">Periféricos</a></li>
                        <li class="printTable"><a href="imprime_tabela.php" class="nav-printTable">Imprimir Tabela</a></li>
                    </ul>
                </div>

                <div class="login-button">
                    <img src="imagens/do-utilizador (1).png" class="imglogin">
                    <div class="alinhamento">
                        <div class="entrar">
                            <a href="login.php" id="entrar">
                                <p class="botao-entrar">Bem-Vindo</p>
                            </a>
                            <!-- <p class="p2">ou</p> -->
                        </div>
                        <div class="cadastrar">
                            <a href="cadastro.php" id="cadastrar">
                                <p class="botao-cadastrar"><?php echo $_SESSION["name"];?></p>
                            </a>
                        </div>
                    </div>
                    <a href="index.html"><img src="imagens/icons8-sair-50 (1).png" class="carrinho"></a>
                </div>
        </nav>
    </header>

    <nav>
        <div class="todos-produtos">
            <section>
                <div class="produtos">
                    <img src="imagens/iPhone-16-removebg-preview.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 16</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-ace-nitro.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Acer Gamer Nitro 23.8”</h1>
                        <p class="preco-iphone">R$2.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/Headset-Gamer-HyperX-Cloud III.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Headset Gamer HyperX Cloud III, Driver 53mm, USB, Multi Plataformas,
                            Preto - 727A8AA</h1>
                        <p class="preco-iphone">R$529</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-16-plus.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 16 Plus</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-alineware.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Alienware de 32” Gamer Curvo 4K QD-OLED - AW3225QF</h1>
                        <p class="preco-iphone">R$8.198</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/teclas-Mecânico- K500.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Teclado Mecânico Gamer Machenike K500-B61, Switch Brown, ABNT, Branco -
                            K500-B61BBR</h1>
                        <p class="preco-iphone">R$299</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iPhone-16-Pro-removebg-preview.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 16 Pro</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-odyssey.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Gamer Odyssey OLED G6 27"</h1>
                        <p class="preco-iphone">R$6.998</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/MouseGamer-Hyper- Pulsefire-Haste 2.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Mouse Gamer HyperX Pulsefire Haste 2, RGB, 26000DPI, 6 Botões, Branco -
                            6N0A8AA</h1>
                        <p class="preco-iphone">R$219</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-16-pro-max.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 16 Pro Max</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-asusrog.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Asus Rog Swift Pro PG248QP 24.1 Fhd Hdr G-Sync 540hz E-Sports
                            TN-Panel</h1>
                        <p class="preco-iphone">R$7.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/MousepadGamerFallen-Ace-Speed.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Mousepad Gamer Fallen Ace Speed+, Estendido 900x400mm - MP-FN-AC-SM-ES
                        </h1>
                        <p class="preco-iphone">R$200</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-15-removebg-preview.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 15</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-benqzoe.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Gamer BenQ Zowie XL2566K 24.5 Full HD, 360Hz, 1ms, HDMI e
                            DisplayPort, Tecnologia DyAc - 9H.LKRLB.QBL</h1>
                        <p class="preco-iphone">R$6.700</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/HeadsetGamer-Havit.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Headset Gamer Havit, Drivers 53mm, Microfone Plugável, P2, PC, PS4,
                            XBOX ONE, Preto - HV-H2002D</h1>
                        <p class="preco-iphone">R$169</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-15-plus.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 15 Plus</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-aoc-agon.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Gamer AOC Agon Pro 24.5 Full HD, 360Hz, IPS, 1ms,
                            HDMI/DisplayPort, G-Sync, HDR 400, 120% sRGB, Som Integrado, Preto - AG254FG</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/MouseGamerLogitech-GPROXSuperlight.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Mouse Sem Fio Gamer Logitech G PRO X Superlight, Lightspeed, 25000 DPI,
                            5 Botões, Preto - 910-005879</h1>
                        <p class="preco-iphone">R$709</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-15-pro.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 15 Pro</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/asus-TUF.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Gamer ASUS TUF VG27AQL3A, 27 QHD, 180Hz, Fast IPS, 1ms,
                            Freesync Premium, G-Sync, 130% sRGB, DisplayHDR 400 - 90LM09A0-B013X0</h1>
                        <p class="preco-iphone">R$2.300</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/Teclado-Huntsman.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Teclado Gamer Razer Óptico-mecânico, Huntsman, Mini Clickyr, Switch
                            Purple</h1>
                        <p class="preco-iphone">R$1.091</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-15-pro-max.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 15 Pro max</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-kbm.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Gamer Curvo KBM! GAMING MG700 27", 240hz, Full HD, 1ms,
                            DisplayPort e HDMI, 96% SRGB, Adaptive Sync, Ajuste De Altura - KGMG70027PT</h1>
                        <p class="preco-iphone">R$1.059</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/Mousepad-BenQZOWIEG-SR-SE.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Mousepad BenQ ZOWIE G-SR-SE Rogue para e-Sports, tamanho grande
                            470x390mm, resistente a umidade, Control - 9H.N4CFQ.A61</h1>
                        <p class="preco-iphone">R$328</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-14-removebg-preview.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 14</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/monitor-aus-TUF.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Monitor Gamer Asus TUF 31.5 LED 2K QHD, 165Hz, 1ms, HDMI e DisplayPort,
                            HDR, 120% sRGB, FreeSync Premium, Som Integrado, VESA - VG32VQ1B</h1>
                        <p class="preco-iphone">R$1.899</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-14-plus.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 14 Plus</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-13-removebg-preview.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 13</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="produtos">
                    <img src="imagens/iphone-12.png" class="product-img">
                    <div class="produto-inf">
                        <h1 class="name-product">Iphone 12</h1>
                        <p class="preco-iphone">R$5.000</p>
                        <button class="comprar" id="comprar">Comprar</button>
                    </div>
                </div>
            </section>
        </div>
    </nav>
    <footer>
        <table class="cart-table-info">
            <thead>
                <div class="classificacao">
                    <p>atendimento</p>
                    <p>Midia Social</p>
                    <p>Sobre a Loja</p>
                </div>
            </thead>
            <tbody>
                <div class="container-info">
                    <div class="info">
                        <P>Horário de atendimento: 08:00 às 20:00 - <br>
                            Segunda a Sexta, 09:00 às 15:00 - Sabado,<br>
                            horário de Brasília (Exceto domingo e feriados)</P>
                        <p class="name-product ">Endereço: Rua Sao Gomes, 0000 - Centro<br>
                            RibeirãoPreto/SP - CEP: 00000-000</p>
                    </div>

                    <div class="info">
                        <img src="imagens/whatsapp.png" alt="">
                        <img src="imagens/instagram.png" alt="">
                        <img src="imagens/youtube.png" alt="">
                    </div>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Ad facilis delectus
                            nam consequuntur officia tenetur non, <br>obcaecati iste molestias quidem in, veritatis
                            <br>
                            sequi est soluta eligendi rem praesentium ut eos?
                        </p>
                    </div>
                </div>
            </tbody>
        </table>
    </footer>
</body>

</html>