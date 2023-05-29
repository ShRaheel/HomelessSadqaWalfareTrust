<?php 
// Template Name: contact
get_header();
?>

<div class="contact-page">
    <div class="page-header">
       <div class="data">
       <h1>Contact Us</h1>
        <p>Contact Our Team For Help</p>
       </div>
    </div>

    <div class="contact-form">
        <div class="left">
            <form action="#" type="post">
                <div class="input-field">
                    <label for="name">Name:</label>
                    <input required type="text" name="name" id="name" >
                </div>
                <div class="input-field">
                    <label for="email">Email:</label>
                    <input required type="email" name="email" id="email" >
                </div>
                <div class="input-field">
                    <label for="message">Your Message:</label>
                    <textarea required name="message" id="message" ></textarea>
                </div>
                <button id="submitBtn" data-url="<?php echo admin_url();?>" type="submit" name="submit" value="submit" class="btn">Submit</button>
            </form>
        </div>
        <div class="right">
            <h2>Contact Details</h2>
            <div class="dtl">
                <strong>
                    Email:
                </strong>
                <p>email@company.com</p>
            </div>
            <div class="dtl">
                <strong>
                    Phone:
                </strong>
                <p>0300-1234567</p>
            </div>
            <div class="dtl">
                <strong>
                    Address:
                </strong>
                <p>Company Address Here</p>
            </div>
        </div>
    </div>


<!-- projects -->
</div>


<?php 
get_footer();
?>