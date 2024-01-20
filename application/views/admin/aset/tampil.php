                   <?php
if($page=='home')
{
    
?>         
<?php $this->load->view('aset/home'); ?>

<?php

}
else if($page=='tambah_usulan')
{
    
?>         
<?php $this->load->view('skpd/form_usulan'); ?>

<?php

}
else if($page=='hasil_usulan_tracking')
{
    
?>         
<?php $this->load->view('aset/tracking'); ?>

<?php

}
else if($page=='hasil_usulan')
{
    
?>         
<?php $this->load->view('aset/hasil_usulan'); ?>

<?php

}

else if($page=='rekap_usulan')
{
    
?>         
<?php $this->load->view('aset/rekap_usulan'); ?>

<?php

}

else if($page=='rekap_usulan_selesai')
{
    
?>         
<?php $this->load->view('aset/rekap_usulan_selesai'); ?>

<?php

}


else if($page=='rekap_usulan_excel')
{
    
?>         
<?php $this->load->view('aset/rekap_usulan_excel'); ?>

<?php

}
else if($page=='review_usulan')
{
    
?>         
<?php $this->load->view('aset/edit_usulan'); ?>

<?php

}



?>
                                         