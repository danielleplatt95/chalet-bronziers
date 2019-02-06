<div class="info">
<h1>Contact us.</h1>
<form method="POST" action='/make-enquiry'>
    @csrf 
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email Address</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>
  <div class="form-group">
   <label for="exampleFormControlTextarea1">Message</label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <br><br>
  <br><br>

</div>