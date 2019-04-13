<!-- Portfolio Grid Section --><!-- class="star-dark mb-5" -->
<style>
#contact{
  margin-top:1rem;
}
#inputdiv{
  width:100%;

}
.form-control{
  width:60%;
  text-align:center;
  float:right;
  margin-right:1rem;
}
#smb{
  width:100%;
  text-align:center;
}

label{
  padding-top:0.4rem;
}
</style>
<section id="contact">
    <div class="container">
      <h2 class="text-center text-secondary mb-0">I Need This!</h2>
      <!-- <hr class="star-dark mb-5"> -->
      <br>
      <br>
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form action="/Main2/addNeeds" method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group  text-center "id="inputdiv">
              <div class="form-group mb-0 pb-2" id="inputdiv">
                <label>사고 싶은 거</label>
                <input class="form-control" id="name" type="text" placeholder="ex) 타요 장난감" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group  text-center "id="inputdiv">
              <div class="form-group controls mb-0 pb-2">
                <label>가&nbsp&nbsp&nbsp&nbsp&nbsp격</label>
                <input class="form-control" id="email" type="text" placeholder="ex) 20000" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <!-- <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div> -->
            <br>
            <div id="success"></div>
            <div class="form-group" id="smb">
              <button type="submit" class="btn btn-primary btn-md" id="sendMessageButton">등 록</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
