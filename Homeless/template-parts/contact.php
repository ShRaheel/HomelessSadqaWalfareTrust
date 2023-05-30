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
            <form action="#" type="POST">
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
                <button id="submitBtn" data-url="<?php echo admin_url('admin-ajax.php');?>" type="submit" name="submit" value="submit" class="btn">Submit</button>
            </form>
        </div>
        <div class="right">
            <h2>Contact Details</h2>
            <div class="dtl">
                <strong>
                    Email:
                </strong>
                <p>Shakeelsheikhefu@gmail.com</p>
            </div>
            <div class="dtl">
                <strong>
                    Phone:
                </strong>
                <p>03312329276 <br> 03028221165</p>
            </div>
            <div class="dtl">
                <strong>
                    Address:
                </strong>
                <p>Sunny Terrace Gulistan e Johar Karachi Sindh Pakistan</p>
            </div>
        </div>
    </div>


<!-- projects -->
</div>


<?php 
get_footer();
?>