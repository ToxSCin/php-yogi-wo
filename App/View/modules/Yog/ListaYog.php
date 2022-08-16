<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yog</title>
    
</head>
<body>
<img scr="https://pt.dreamstime.com/beleza-do-prato-%C3%A0-noite-estrelas-e-luas-adjacentes-ao-belo-c%C3%A9u-noturno-esta-imagem-reflete-uma-paz-harmoniosa-tomada-sobre-o-image221357618">
<center>
    <style>
    input{
        font-size: 40px;
        background-color:whitesmoke;
        font-family: 'Blaka', cursive;
            font-family: 'Pacifico', cursive;
    }

    label,button,legend{
        font-size: 40px;
        font-family: 'Blaka', cursive;
            font-family: 'Pacifico', cursive;
    }

    input {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    body{
            background-color: white;
        }
    </style>
</head>
<body>
    <center>

    
    <fieldset>
        <legend>Login Yogioh Cartas</legend>

        <form method="post" action="/yog/form/save">

<center>
<h1> <img scr="<img loading="lazy" class="aligncenter wp-image-69332 size-full" src="https://i1.wp.com/www.jbox.com.br/wp/wp-content/uploads/2019/12/yugioh-banner.jpg?resize=774%2C306&amp;quality=99&amp;strip=all&amp;ssl=1" sizes="(max-width: 774px) 100vw, 774px" srcset="https://i1.wp.com/www.jbox.com.br/wp/wp-content/uploads/2019/12/yugioh-banner.jpg?resize=774%2C306&amp;quality=99&amp;strip=all&amp;ssl=1 774w, https://www.jbox.com.br/wp/wp-content/uploads/2019/12/yugioh-banner-768x304.jpg 768w" alt="Imagem: Yami Yugi em 'Yu-Gi-Oh!'." width="768" height="304" alt="Yog" width=60 height=40> </h1>
<center>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <br>
            <br>
             
            <label  for="senha">Senha</label>
            <input type="password" id="senha" name="senha" value="<?= $model->senha ?>" type="passaword" />

            
            <br>
            <br>
            <label for="pin">Pin</label>
            <input id="pin" name="pin" value="<?= $model->pin ?>" type="number" />
            <br>


            <br>
            <br>
            <button type="submit">Login!</button>
            <br>

            </table>
              
            

       
  
 
            </fieldset>
            </center>
</body>
</html>