<?
  function findHash($data){
    return substr(md5($data), 0, 6);
  }

  if($_GET['string'])
    echo findHash($_GET['string']);
?>
