<?php 
  if( isset($_POST['cd_sequencia']) && !empty($_POST['cd_sequencia']) ) {

   $cd_seq = $_POST['cd_sequencia'];
   $dt_mov = $_POST['dt_mov'];
   $reduzido_cred = $_POST['cd_reduzido_cred'];
   $reduzido_deb = $_POST['cd_reduzido_deb'];
   $vl_lan = $_POST['vl_lanc'];
   $hist_pad = $_POST['hist_padrao'];
   $cd_set_cred =$_POST['cd_setor_cred'];
   $cd_set_deb =$_POST['cd_setor_deb'];
   $vl_lan_setor =$_POST['vl_lanc_setor'];
   $ds_lanc =$_POST['ds_lanc'];
   $cd_emp =$_POST['cd_empresa'];
   $cd_aux_cred =$_POST['cd_auxiliar_cred'];
   $cd_aux_deb =$_POST['cd_auxiliar_deb'];
  
//Definição de local onde salvar o arquivo.
   $arquivo=fopen('arquivo/carga_contabil.txt', 'a+',0);
    if ($reduzido_deb < 0 && $reduzido_cred > 0){

        $linha = str_pad($cd_seq, 8, "0", STR_PAD_LEFT).str_pad($dt_mov, 8, "0", STR_PAD_LEFT).str_pad($reduzido_cred, 10,"0", STR_PAD_LEFT).str_pad($reduzido_deb, 10, " ", STR_PAD_LEFT).str_pad($vl_lan, 12, "0", STR_PAD_LEFT).str_pad($hist_pad, 4, "0", STR_PAD_LEFT).str_pad($cd_set_cred, 4, "0", STR_PAD_LEFT).str_pad($cd_set_deb, 4, " ", STR_PAD_LEFT).str_pad($vl_lan_setor, 12, "0", STR_PAD_LEFT).str_pad($ds_lanc,60, " ", STR_PAD_RIGHT).str_pad($cd_emp, 4, "0", STR_PAD_LEFT).str_pad($cd_aux_cred, 10, "0", STR_PAD_LEFT).str_pad($cd_aux_deb, 10, "0", STR_PAD_LEFT)."\r";

    }elseif($reduzido_deb > 0 && $reduzido_cred < 0){
        $linha = str_pad($cd_seq, 8, "0", STR_PAD_LEFT).str_pad($dt_mov, 8, "0", STR_PAD_LEFT).str_pad($reduzido_cred, 10," ", STR_PAD_LEFT).str_pad($reduzido_deb, 10, "0", STR_PAD_LEFT).str_pad($vl_lan, 12, "0", STR_PAD_LEFT).str_pad($hist_pad, 4, "0", STR_PAD_LEFT).str_pad($cd_set_cred, 4, " ", STR_PAD_LEFT).str_pad($cd_set_deb, 4, "0", STR_PAD_LEFT).str_pad($vl_lan_setor, 12, "0", STR_PAD_LEFT).str_pad($ds_lanc,60, " ", STR_PAD_RIGHT).str_pad($cd_emp, 4, "0", STR_PAD_LEFT).str_pad($cd_aux_cred, 10, "0", STR_PAD_LEFT).str_pad($cd_aux_deb, 10, "0", STR_PAD_LEFT)."\r";
    }else{
        $linha = str_pad($cd_seq, 8, "0", STR_PAD_LEFT).str_pad($dt_mov, 8, "0", STR_PAD_LEFT).str_pad($reduzido_cred, 10,"0", STR_PAD_LEFT).str_pad($reduzido_deb, 10, "0", STR_PAD_LEFT).str_pad($vl_lan, 12, "0", STR_PAD_LEFT).str_pad($hist_pad, 4, "0", STR_PAD_LEFT).str_pad($cd_set_cred, 4, "0", STR_PAD_LEFT).str_pad($cd_set_deb, 4, "0", STR_PAD_LEFT).str_pad($vl_lan_setor, 12, "0", STR_PAD_LEFT).str_pad($ds_lanc,60, " ", STR_PAD_RIGHT).str_pad($cd_emp, 4, "0", STR_PAD_LEFT).str_pad($cd_aux_cred, 10, "0", STR_PAD_LEFT).str_pad($cd_aux_deb, 10, "0", STR_PAD_LEFT)."\r";
    }

   fwrite($arquivo,$linha,strlen($linha));
   fclose($arquivo);
}
?>
<script>
    window.location.replace("http://localhost/import_form_to_txt/index.php");
</script>