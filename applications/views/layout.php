<?php $this->load->view( 'header' ); ?>
<?php if ( !empty( $menu ) ){ $this->load->view( $menu ); } ?>
<?php $this->load->view( $page ); ?>
<?php $this->load->view( 'footer' ); ?>