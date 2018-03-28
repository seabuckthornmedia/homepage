 <!-- Modal -->
 <div id="askstd" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Standard Package Enquiry</h4>
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
                          <input id="subject" name="subject" class="form-control" value="Standard Package Enquiry">
                      </div>
  
                      <div class="form-group text-left">
                          <label name="message">Message:</label>
                          <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
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
     <!-- Modal -->
 <div id="askcom" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Community Package Enquiry</h4>
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
                          <input id="subject" name="subject" class="form-control" value="Community Package Enquiry">
                      </div>
  
                      <div class="form-group text-left">
                          <label name="message">Message:</label>
                          <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
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
       <!-- Modal -->
 <div id="askpro" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Professional Package Enquiry</h4>
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
                          <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
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