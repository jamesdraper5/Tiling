<section>
	<div class="grid_12">
		<h1>Get In Touch</h1>
		<p>If you would like to book a tiling job, please contact us at the the numbers below, send us an email or fill out the contact form, and we will get back to you as soon as possible.</p>
	</div>
	<div id="contact-details" class="grid_4">
		<h2>Contact Details</h2>
		<ul class="bullets">
			<li itemprop="telephone">(028) 38460</li>
			<li itemprop="telephone">(087) 6244562</li>
			<li itemprop="email">info@westcorktiling.com</li>
			<li itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="name">Bob Draper,</span><br>
				<span itemprop="streetAddress">Ardralla,</span><br>
				<span>Church Cross,</span><br>
				<span itemprop="addressLocality">Skibbereen,</span><br>
				<span itemprop="addressregion">Co. Cork<span>
			</li>
		</ul>
	</div>
	<div id="contact-form" class="grid_8">
        <h2>Contact Form</h2>
        <?php
		//init variables
		$cf = array();
		$sr = false;

		if(isset($_SESSION['cf_returndata'])){
			$cf = $_SESSION['cf_returndata'];
		 	$sr = true;
		}
        ?>
        <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
            <li id="info">There were some problems with your form submission:</li>
            <?php
			if(isset($cf['errors']) && count($cf['errors']) > 0) :
				foreach($cf['errors'] as $error) :
			?>
            <li><?php echo $error ?></li>
            <?php
				endforeach;
			endif;
			?>
        </ul>
        <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! I will get back to you ASAP!</p>
        <form method="post" action="process.php">
            <label for="name">Name: <span class="required">*</span></label>
            <input type="text" id="name" name="name"
            	value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Your Name" required autofocus />

            <label for="email">Email Address: <span class="required">*</span></label>
            <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>"
            	placeholder="email@example.com" required />

            <label for="telephone">Telephone: </label>
            <input type="tel" id="telephone" name="telephone"
            	value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />

            <label for="address">Your Location: </label>
            <input type="text" id="address" name="address"
            	value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['address'] : '' ?>" placeholder="e.g. Skibbereen" />

            <label for="enquiry">Enquiry: </label>
            <select id="enquiry" name="enquiry">
                <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>General</option>
                <option value="Tiling" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Tiling') ? "selected='selected'" : '' ?>>Tiling</option>
                <option value="Other" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'Other') ? "selected='selected'" : '' ?>>Other</option>
            </select>

            <label for="message">Message: <span class="required">*</span></label>
            <textarea id="message" name="message"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>

            <span id="loading"></span>
            <input type="submit" value="Go!" id="submit-button" class="cta" />
            <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
        </form>

    </div>
</section>

<?php unset($_SESSION['cf_returndata']); ?>