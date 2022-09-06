<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yog</title>
    
</head>
<body>
<center>
    <style>
    input,p{
        font-size: 40px;
        background-color:white;
        font-family: 'Blaka', cursive;
            font-family: 'Pacifico', cursive;
    }

    label,button,legend,p{
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
            background-color: orange;
        }
     
    </style>
</head>
<body>
    <center>
 
    <h1><img src="https://cea.vtexassets.com/arquivos/ids/49200650-800-auto?v=637639500936170000&width=800&height=auto&aspect=true" height="1000px" width="200px" align="left"></h1>
    <h1><img src="https://cea.vtexassets.com/arquivos/ids/49200650-800-auto?v=637639500936170000&width=800&height=auto&aspect=true" height="1000px" width="200px" align="right"></h1>
    <img src="https://cdn.mangayabu.top/mangas/yu-gi-oh/capitulo-93/00.jpg"> 

    <br>
    <br>

    <p>Login Yogioh</p>

        <form method="post" action="/Yog/form">

<center>
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
            <form method="post" action="/Yog/form">
            <button type="submit">Login</button>
            <br>

            </table>
              
            

       
  
 
            </fieldset>
            </center>
</body>
</html>