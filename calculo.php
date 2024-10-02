<?php
    if(isset($_POST['btn1'])){
        $lado = $_POST['numAreaQuadrado'];
        
        if(is_numeric($lado)){
            $area = $lado ** 2;
            echo "<h2>A área do quadrado é: $area</h2>";
        }else{
            echo '<h2>Digite um número!</h2>';
        }
        echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
    }else{
        if(isset($_POST['btn2'])){
            $valor_A = $_POST['numValorA'];
            $valor_B = $_POST['numValorB'];
            
            if(is_numeric($valor_A) && is_numeric($valor_B)){
                $valor_C = ($valor_A + $valor_B)/2;
                $valor_D = (($valor_A + $valor_B)*2)/2;
                echo "<h2>Valor de A + Valor de B divido por 2: $valor_C</h2>";
                echo "<h2>O dobro do Valor de A + Valor de B divido por 2: $valor_D</h2>";
            }else{
                echo '<h2>Digite um número!</h2>';
            }
            echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
        }else{
            if(isset($_POST['btn3'])){
                $valor_A = $_POST['numValorA2'];
                $valor_B = $_POST['numValorB2'];

                if(is_numeric($valor_A) && is_numeric($valor_B)){
                    $resultado = ($valor_A - $valor_B)**2;
                    echo "<h2>O quadrado da diferença entre os dois números é: $resultado</h2>";
                }else{
                    echo '<h2>Digite um número!</h2>';
                }
                echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
            }else{
                if(isset($_POST['btn4'])){
                    $valor_A = $_POST['numValorA3'];
                    $valor_B = $_POST['numValorB3'];
                    $valor_C = $_POST['numValorC3'];

                    if(is_numeric($valor_A) && is_numeric($valor_B) && is_numeric($valor_C)){
                        $resultado = ($valor_A**2) + ($valor_B**2) + ($valor_C**2);
                        echo "<h2>A soma do quadrado dos números é: $resultado</h2>";
                    }else{
                        echo '<h2>Digite um número!</h2>';
                    }
                    echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
                    
                }else{
                    if(isset($_POST['btn5'])){
                        $valor_A = $_POST['numValorA4'];
                        $valor_B = $_POST['numValorB4'];
                        $valor_C = $_POST['numValorC4'];

                        if(is_numeric($valor_A) && is_numeric($valor_B) && is_numeric($valor_C)){
                            $resultado = ($valor_A + $valor_B + $valor_C) ** 2;
                            echo "<h2>O quadrado da soma dos números é: $resultado</h2>";
                        }else{
                            echo '<h2>Digite um número!</h2>';
                        }
                        echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
                        
                    }else{
                        if(isset($_POST['btn6'])){
                            $kilos = $_POST['numKg'];

                            if(is_numeric($kilos)){
                                $emagreceu = $kilos - (($kilos * 20)/100);
                                $engordou = $kilos + (($kilos * 15)/100);
                                
                                echo "<h2>Peso se engordar mais 15%: $engordou Kg</h2>";
                                echo "<h2>Peso se emagrecer 20%: $emagreceu Kg</h2>";
                            }else{
                                echo '<h2>Digite um número!</h2>';
                            }
                            echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
                        }else{
                            if(isset($_POST['btn7'])){
                                $valor_A = $_POST['numValorA5'];
                                $valor_B = $_POST['numValorB5'];
                                $valor_C = $_POST['numValorC5'];

                                if(is_numeric($valor_A) && is_numeric($valor_B) && is_numeric($valor_C)){
                                    echo "<h2>Resultado:</h2><br/>";    
                                    $resultado_positivo = (-1 * $valor_B + sqrt(($valor_B ** 2 - 4 * $valor_A * $valor_C))) / 2 * $valor_A;
                                    $resultado_negativo = (-1 * $valor_B - sqrt(($valor_B ** 2 - 4 * $valor_A * $valor_C))) / 2 * $valor_A;
                                    echo "<h2>x = $resultado_positivo </h2><br/>";
                                    echo "<h2>x = $resultado_negativo </h2><br/>";
                                }else{
                                    echo '<h2>Digite um número!</h2>';
                                }
                                echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
                                
                            }else{
                                if(isset($_POST['btn8'])){
                                    $valor_por_litro = $_POST['txtLitro'];
                                    $kilometro_por_litro = $_POST['numKmL'];
                                    $distancia = $_POST['numDistancia'];
                                    

                                    if(is_numeric($valor_por_litro) && is_numeric($kilometro_por_litro) && is_numeric($distancia)){
                                        $litros_necessarios = $distancia / $kilometro_por_litro;
                                        $quantia_gasta = $valor_por_litro * $litros_necessarios;
                                        
                                        echo "<h2>Serão necessários $litros_necessarios Litros para percorrer esta distância.</h2><br/>";
                                        echo "<h2>Será gasto: R$$quantia_gasta</h2><br/>";
                                    }else{
                                        echo '<h2>Digite um número!</h2>';
                                    }
                                    echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';

                                }else{
                                    if(isset($_POST['btn9'])){
                                        $primeiro_angulo = $_POST['num1Ang'];
                                        $segundo_angulo = $_POST['num2Ang'];

                                        if(is_numeric($primeiro_angulo) && is_numeric($segundo_angulo)){
                                            $terceiro_angulo = 180 - ($primeiro_angulo + $segundo_angulo);

                                            echo "<h2>Medida do terceiro ângulo: $terceiro_angulo</h2><br/>";
                                        }else{
                                            echo '<h2>Digite um número!</h2>';
                                        }
                                        echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';
                                    
                                    }else{
                                        if(isset($_POST['btn10'])){
                                            $publico_total = $_POST['numPubTotal'];

                                            if(is_numeric($publico_total)){
                                                $resultado = ((($publico_total*10)/100)*1) + ((($publico_total*50)/100)*5) + ((($publico_total*30)/100)*10) + ((($publico_total*10)/100)*20);

                                                echo "<h2>A renda do jogo foi de: R$$resultado</h2><br/>";
                                            }else{
                                                echo '<h2>Digite um número!</h2>';
                                            }
                                            echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';

                                        }else{
                                            if(isset($_POST['btn11'])){
                                                $valor_x1 = $_POST['numx1'];
                                                $valor_y1 = $_POST['numy1'];
                                                $valor_x2 = $_POST['numx2'];
                                                $valor_y2 = $_POST['numy2'];

                                                if(is_numeric($valor_x1) && is_numeric($valor_y1) && is_numeric($valor_x2) && is_numeric($valor_y2)){
                                                    $resultado = sqrt(($valor_x2 - $valor_x1)**2 + ($valor_y2 - $valor_y1)**2);

                                                    echo "<h2>Distância entre os dois pontos: $resultado</h2><br/>";
                                                }else{
                                                    echo '<h2>Digite um número!</h2>';
                                                }
                                                echo '<br/><a href="index.php" target="self">Clique aqui para voltar</a>';

                                            }else{
                                                echo 'Use o form para envio!<br/>';
                                                echo '<a href="index.php" target="self">Clique aqui para voltar</a>';
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
?>

