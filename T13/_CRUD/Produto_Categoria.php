<select>
<?php
include_once('Conexao.php');
try
{
 $sql = $conn->query('select * from Categoria');
 foreach($sql as $linha)
 {
    echo"
            <option value='$linha[0]'>$linha[2]</option>
    ";
 }

}
catch(PDOException $ex)
{
    echo $ex->getMessage();
}
?>
</select>