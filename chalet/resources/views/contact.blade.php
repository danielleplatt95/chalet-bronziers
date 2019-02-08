<div class="info">
<h1>Contact us.</h1>
<form method="POST" action='/make-enquiry'>
    @csrf 
  <div class="form-group">
    <label for="fullName">Full Name</label>
    <input type="text" class="form-control" id="fullName" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
   <label for="message">Message</label>
   <textarea class="form-control" id="message" rows="3"></textarea>
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <br><br>
  <br><br>

</div>