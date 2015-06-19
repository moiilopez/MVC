<h1>Lista de Productos</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td><a href="index.php?controller=ProdutoController&action=ordenar">Nome</a></td>
    </tr>
    
 
<?php foreach ($categorias as $categoria) : ?>
        
      <tr>
          <td><?php echo $categoria['ID'] ?></td>
          <td><?php echo $categoria['NOME'] ?></td>
          <td><a href="index.php?controller=ProdutoController&action=atualizar&id=<?php echo $categoria['ID'] ?>">Editar</a></td>
          <td><a href="index.php?controller=ProdutoController&action=deletar&id=<?php echo $categoria['ID'] ?>">Deletar</a></td>
      </tr>

 <?php endforeach; ?>

</table>
<br>
<a href="index.php?controller=ProdutoController&action=inserir">Registrar Produto</a>