    <div class="clear"></div>
	<div class="decoration"></div>
    <p class="breadcrumb"><a href="<?= base_url('login'); ?>">Login</a><em class="bdiv"></em> <a href="<?= base_url(); ?>">Home</a> <em class="bdiv"></em>Profile Page </p>
    <div class="decoration"></div>
    
    
	<div class="profile-box">
    	<img class="replace-2x profile-image" width="80" height="80" src="<?= base_url('images/thumbnail.png') ?>" alt="img">
    	<p class="profile-title">Enabled</p>
        <p class="profile-bio">A short description you want to add here about yourself.</p>
        <p class="profile-mail">Email: <a href="#">mail@domain.com</a></p>
		<div class="clear"></div>
    </div>    
    <div class="content-box">
        <div class="content-box-title">
            <p class="left-title">Profile Information Edit</p>
            <div class="clear"></div>    
        </div>
        <div class="content-box-container">
        	<p class="field-description">Profile Name</p>
        	<input type="text" name="" class="field" value="Enabled"/>
            <p class="field-description">Profile Description</p>
            <input type="text" name="quick-tags" class="field" placeholder="A short description..."/>
            <p class="field-description">Profile Email Address</p>
            <input type="text" name="quick-tags" class="field" placeholder="mail@domain.com"/>
            <p class="field-description demo">You can create however many fields you require! These are just for a demo!</p>
        </div>
	</div>
