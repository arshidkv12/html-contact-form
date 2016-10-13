=== HTML Contact Form ===
Contributors: arshidkv12
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=H5F3Z6S3MNTXA&lc=IN&item_name=wp%2dlogin%2dlimit&amount=5%2e00&currency_code=USD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted
Tags: web form, email,form mailers, form, contact, contact form, contact form plugin, contact form widget, contact me, custom contact form, custom form,email form, email submit form, email subscription, feedback form,form builder, form manager, forms builder, forms creation, forms creator
Requires at least: 2.8
Tested up to: 4.6 
Stable tag: 1.1.2
License: GPLv2

Contact Form : Simple but flexible contact form . Easy to add CSS styling and input fields (HTML5)
  

== Description ==

Easy to customise contact form . Just add HTML code to HTML Contact Form settings. 
Then add shortcode `[HTML-CF]` to page or post. You can add custom fields by HTML5 code.  

Go to `Settings > HTML Contact Form` .  


= Features =

* Flexible contact form
* Easy to add CSS styling
* Autocomplete text editor
* Light weight plugin 
* HTML5 syntax highlighting
* HTML contact form plugin have ready to go fields
* Fully responsive contact form looks perfect on all screen sizes and mobile devices.
* Add or remove additional fields easily and label any contact form fields you want.

= Support =
Please note that, It is a new contact form plugin. I will add new features as soon as possible.
Please suggest your opinion to 
<a href="https://wordpress.org/support/plugin/html-contact-form">support forum</a>.

= Contact form captcha = 
HTML contact form plugin has powerful inbuilt captcha. 

= How can I add a field to my contact form = 

**Add input field to contact form :-** 

Just add following code in between `<form>` and `</form>`

`<input type="text" name="input_name">`

**Add textarea to contact form :-**

`<textarea rows="5" name="textarea_name"></textarea>`

**Add Radio Button Input to contact form (Demo):-**

` <input type="radio" name="gender" value="male" > Male<br>
  <input type="radio" name="gender" value="female"> Female<br>`

= How to add css style to contact form =

Add css styles to your theme *style.css* file.

 

Demo: http://www.htmlcontactform.net/contact/

[youtube https://www.youtube.com/watch?v=zLKCgNFaJ9s]

= Advantages of Pro HTML Contact Form :- =
* Change “To Email” of contact form .
* Add multiple “To Emails”  by comma (contact form admin).
* Premium support for fix contact form bugs.
* Unlimited installation licence per user.
* Contact form pro version can use on unlimited websites.
* Change contact form error messages (admin section)



== Installation ==

1. Download and extract plugin files to a wp-content/plugin directory.
2. Activate the plugin through the WordPress admin interface.
3. Done !

== Frequently Asked Questions ==
= How to add contact form in page  ? = 

Add shortcode `[HTML-CF]` to your page. 

= How to add captcha ? =

Just add following code before submit button 

 ` <img src="../wp-content/plugins/html-contact-form/captcha.php">`
 ` <input name="captcha" placeholder="Enter captcha text here" type="text">`

= How to receive contact message ? = 

Contact message recieve to your admin email. Please check your admin email inbox.
`settings > General --- [admin email inbox]`

= How to add new input field in contact form ? = 
Just add code as bellow
`<input name="Email" placeholder="Email" type="text" >`

= My contact form always redirects to 404 error page after submission =
Please add `action =""` `and method = "post"`.
`<form action="" method="post">`

= Can I embed a contact form into my template file? =
Add following code to your template php file.
<?php echo do_shortcode( '[HTML-CF]' ); ?>

= I see a response message “Thanks for writing us!..” , but I never receive a mail for that. =
Just wait few minutes. Email speed is depends on your host provider.
Or check spam folder. Please add valid input in email field. 



== Screenshots ==
1. Contact Form Admin  
2. Contact Form Front End


== Changelog ==
Feature Enhancements: Version 1.1.2
* Enhancements: None
* Bug Fix: None
* Additional changes: None

Feature Enhancements: Version 1.1.0
* Enhancements: None
* Bug Fix: None
* Additional changes: Adding captcha system

== Upgrade Notice ==
=1.1=
Add captcha.