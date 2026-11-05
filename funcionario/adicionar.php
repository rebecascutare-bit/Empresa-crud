<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <h1>Cadastro de Funcionario</h1>
            <form action="inserir.PHP" method="POST">
               <p>
                    <label> nome:<ilabel>
                    <input type="text" name="nome" required>
               </p> 
               <p>
                    <label> email:<ilabel>
                    <input type="email" name="email" required>
               </p> 
               <p>
                    <label> cargo:<ilabel>
                    <input type="text" name="cargo" required>
               </p> 
               <p>
                    <label> salario:<ilabel>
                    <input type="number" name="salario" etep="0.01" required>
               </p> 
               <p>
                    <label> data:<ilabel>
                    <input type="text" name="admissao" required>
               </p> 
               <p>
               <label for="submit">Enviar:</label>
               <input type="submit" value="Enviar">
               <input type="reset" value="Limpar">
               </p>

</body>
</html>
        