# Beny
<! DOCTYPE html >
< html  lang = " en " >
< cabeça >
    < meta  charset = " UTF-8 " >
    < meta  http-equiv = " X-UA-Compatible " content = " IE = edge " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    < título > Formulário | GN </ title >
    < estilo >
        corpo {
            família da fonte : Arial , Helvetica , sans-serif;
            imagem de fundo :  gradiente linear (para a direita ,  rgb ( 20 ,  147 ,  220 ) ,  rgb ( 17 ,  54 ,  71 ));
        }
        . box {
            cor : branco;
            posição : absoluta;
            topo :  50 % ;
            esquerda :  50 % ;
            transformar :  traduzir ( -50 % , -50 % );
            cor de fundo :  rgba ( 0 ,  0 ,  0 ,  0,6 );
            preenchimento :  15 px ;
            raio da borda :  15 px ;
            largura :  20 % ;
        }
        fieldset {
            borda :  3 px sólido dodgerblue;
        }
        legend {
            borda :  1 px dodgerblue sólido;
            preenchimento :  10 px ;
            alinhamento de texto : centro;
            cor de fundo : dodgerblue;
            raio da borda :  8 px ;
        }
        . inputBox {
            posição : relativa;
        }
        . inputUser {
            fundo : nenhum;
            fronteira : nenhum;
            borda inferior :  branco sólido de 1 px ;
            esboço : nenhum;
            cor : branco;
            tamanho da fonte :  15 px ;
            largura :  100 % ;
            espaçamento entre letras :  2 px ;
        }
        . labelInput {
            posição : absoluta;
            topo :  0 px ;
            esquerda :  0 px ;
            eventos de ponteiro : nenhum;
            transição :  0,5 s ;
        }
        . inputUser : focus  ~ . labelInput ,
        . inputUser : válido  ~ . labelInput {
            topo :  -20 px ;
            tamanho da fonte :  12 px ;
            cor : dodgerblue;
        }
        # data_nascimento {
            fronteira : nenhum;
            preenchimento :  8 px ;
            raio da borda :  10 px ;
            esboço : nenhum;
            tamanho da fonte :  15 px ;
        }
        # submit {
            imagem de fundo :  gradiente linear (para a direita , rgb ( 0 ,  92 ,  197 ) ,  rgb ( 90 ,  20 ,  220 ));
            largura :  100 % ;
            fronteira : nenhum;
            preenchimento :  15 px ;
            cor : branco;
            tamanho da fonte :  15 px ;
            cursor : ponteiro;
            raio da borda :  10 px ;
        }
        # submit : hover {
            imagem de fundo :  gradiente linear (para a direita , rgb ( 0 ,  80 ,  172 ) ,  rgb ( 80 ,  19 ,  195 ));
        }
    </ estilo >
</ head >
< corpo >
    < div  class = " box " >
        < form  action = "" >
            < fieldset >
                < legend > < b > Fórmulário de Clientes </ b > </ legend >
                < Br >
                < div  class = " inputBox " >
                    < input  type = " text " name = " nome " id = " nome " class = " inputUser " obrigatório >
                    < label  for = " nome " class = " labelInput " > Nome completo </ label >
                </ div >
                < Br > < br >
                < div  class = " inputBox " >
                    < input  type = " text " name = " email " id = " email " class = " inputUser " obrigatório >
                    < label  for = " email " class = " labelInput " > Email </ label >
                </ div >
                < Br > < br >
                < div  class = " inputBox " >
                    < input  type = " tel " name = " telefone " id = " telefone " class = " inputUser " obrigatório >
                    < label  for = " telefone " class = " labelInput " > Telefone </ label >
                </ div >
                < p > Sexo: </ p >
                < input  type = " radio " id = " feminino " name = " genero " value = " feminino " obrigatório >
                < label  for = " feminino " > Feminino </ label >
                < Br >
                < input  type = " radio " id = " masculino " name = " genero " value = " masculino " obrigatório >
                < label  for = " masculino " > Masculino </ label >
                < Br >
                < input  type = " radio " id = " outro " name = " genero " value = " outro " obrigatório >
                < label  for = " outro " > Outro </ label >
                < Br > < br >
                < label  for = " data_nascimento " > < b > Data de Nascimento: </ b > </ label >
                < input  type = " date " name = " data_nascimento " id = " data_nascimento " obrigatório >
                < Br > < br > < br >
                < div  class = " inputBox " >
                    < input  type = " text " name = " cidade " id = " cidade " class = " inputUser " obrigatório >
                    < label  for = " cidade " class = " labelInput " > Cidade </ label >
                </ div >
                < Br > < br >
                < div  class = " inputBox " >
                    < input  type = " text " name = " estado " id = " estado " class = " inputUser " obrigatório >
                    < label  for = " estado " class = " labelInput " > Estado </ label >
                </ div >
                < Br > < br >
                < div  class = " inputBox " >
                    < input  type = " text " name = " endereco " id = " endereco " class = " inputUser " obrigatório >
                    < label  for = " endereco " class = " labelInput " > Endereço </ label >
                </ div >
                < Br > < br >
                < input  type = " submit " name = " submit " id = " submit " >
            </ fieldset >
        </ form >
    </ div >
</ body >
</ html > 
