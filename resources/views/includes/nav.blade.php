
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow">
    
    <h5 class="my-0 mr-md-auto font-weight-normal">Sea Buckthorn Media</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#features">Features</a>
      <a class="p-2 text-dark underlineOver" style="cursor:pointer;" role="button" data-toggle="modal" data-target="#support" >Support</a>
      <a class="p-2 text-dark" href="#pricing">Pricing</a>
    </nav>
  </div>
   <!-- Modal -->
 <div id="support" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Support Request</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="container">
            <!-- Modal Form -->
            <form action="{{ url('contact') }}" method="POST">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12 text-left">
                  <!-- Modal Rest Of The Contact Form-->
                  <div class="form-group text-left">
                      <label name="email">Email:</label>
                      <input id="email" name="email" class="form-control">
                  </div>

                  <div class="form-group text-left">
                      <label name="subject">Subject:</label>
                      <input id="subject" name="subject" class="form-control" value="Professional Package Enquiry">
                  </div>

                  <div class="form-group text-left">
                      <label name="message">Message:</label>
                      <textarea id="message" name="message" class="form-control">Support Request</textarea>
                  </div>
                  <input type="submit" value="Send Message" class="btn btn-success">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->
