<div id="contact" class="main-section top-padding">

    <div class="container">

        <section>
            <div class="row">
            	<div class="col-md-12 text-center">
            		<h1>Get In Touch</h1>
            		<p>
                        Book a tiling job or just make an enquiry, we'd love to hear for you! <br>
                        Either contact us at one the numbers below, send us an email, or fill out the contact form. We will get back to you as soon as possible.
                    </p>
            	</div>
            </div>

            <br>

            <div class="row">

            	<div id="contact-form" class="col-md-8">
                    <h2 class="uppercase">Contact Form</h2>
                    <?php
            		//init variables
            		$cf = array();
            		$sr = false;

            		if(isset($_SESSION['cf_returndata'])){
            			$cf = $_SESSION['cf_returndata'];
            		 	$sr = true;
            		}
                    ?>
                    <!--
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
                    -->

                    <form method="post" action="process.php" class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name: <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control"
                            	value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Your name" required autofocus />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email: <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <input type="email" id="email" class="form-control" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>"
                            	placeholder="Your email address" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telephone" class="col-sm-2 control-label">Telephone: </label>
                            <div class="col-sm-10">
                                <input type="tel" id="telephone" class="form-control" name="telephone" placeholder="Your phone number"
                                value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-sm-2 control-label">Location: </label>
                            <div class="col-sm-10">
                                <input type="text" id="address"  class="form-control" name="address"
                                    value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['address'] : '' ?>" placeholder="e.g. Skibbereen" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message: <span class="required">*</span></label>
                            <div class="col-sm-10">
                                <textarea id="message" class="form-control" name="message" placeholder="What type of tiling work do you need?"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                            </div>
                        </div>

                        <span id="loading"></span>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
                                <button type="submit" class="btn btn-success">Submit enquiry</button>
                            </div>
                        </div>

                    </form>

                </div>

                <div id="contact-details" class="col-md-4">
                    <h2 class="uppercase">Contact Details</h2>
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

            </div>
        </section>

    </div>

</div>
<?php unset($_SESSION['cf_returndata']); ?>